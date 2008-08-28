<?php
// +--------------------------------------------------------------------------+
// | FileMgmt Plugin - glFusion CMS                                           |
// +--------------------------------------------------------------------------+
// | submit.php                                                               |
// |                                                                          |
// | Allow users to submit new downloads                                      |
// +--------------------------------------------------------------------------+
// | $Id::                                                                   $|
// +--------------------------------------------------------------------------+
// | Copyright (C) 2002-2008 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// |                                                                          |
// | Based on the FileMgmt Plugin for Geeklog                                 |
// | Copyright (C) 2004 by Consult4Hire Inc.                                  |
// | Author:                                                                  |
// | Blaine Lang            blaine@portalparts.com                            |
// |                                                                          |
// | Based on:                                                                |
// | myPHPNUKE Web Portal System - http://myphpnuke.com/                      |
// | PHP-NUKE Web Portal System - http://phpnuke.org/                         |
// | Thatware - http://thatware.org/                                          |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+

require_once("../lib-common.php");
include_once($_CONF[path_html]."filemgmt/include/header.php");
include_once($_CONF['path_html']."filemgmt/include/functions.php");
include_once($_CONF[path_html]."filemgmt/include/xoopstree.php");
include_once($_CONF[path_html]."filemgmt/include/errorhandler.php");
include_once($_CONF[path_html]."filemgmt/include/textsanitizer.php");

if (SEC_hasRights("filemgmt.upload") OR $mydownloads_uploadselect) {

    // Get the number of files in the database and post it in the title.
    $_GROUPS = SEC_getUserGroups( $uid );

    $myts = new MyTextSanitizer; // MyTextSanitizer object
    $eh = new ErrorHandler; //ErrorHandler object
    $mytree = new XoopsTree($_DB_name,$_FM_TABLES['filemgmt_cat'],"cid","pid");
    $mytree->setGroupAccessFilter($_GROUPS);

    if($_POST['submit']){

        if(isset($_USER['uid']) AND $_USER['uid'] > 1 ) {
            $submitter = $_USER['uid'];
        }else{
            $submitter = 1;
        }
        // Check if Title entered
        if ($_POST["title"] == '') {
            $eh->show("1001");
        }
        // Check if filename entered
        if ($_FILES['newfile']['name'] != '') {
            $name = ($_FILES['newfile']['name']);
            $url = rawurlencode($name);
            $name = $myts->makeTboxData4Save($name);
            $url = $myts->makeTboxData4Save($url);
        } else {
            $eh->show("1016");
        }

        // Check if Description entered
        if ($_POST['description'] == '') {
            $eh->show("1008");
        }

        $uploadfilename = $myts->makeTboxData4Save($_FILES['newfile']['name']);

        // Check if file is already on file
        if (DB_COUNT($_FM_TABLES['filemgmt_filedetail'], 'url', $uploadfilename) > 0) {
            $eh->show("1108");
        }

        if ( !empty($_POST['cid']) ) {
            $cid = intval($_POST['cid']);
        } else {
            $cid = 0;
        }

        $AddNewFile = false;    // Set true if fileupload was sucessfull
        $name = $myts->makeTboxData4Save($name);
        $title = $myts->makeTboxData4Save($_POST['title']);
        $homepage = $myts->makeTboxData4Save($_POST['homepage']);
        $version = $myts->makeTboxData4Save($_POST['version']);
        $size = intval($_FILES['newfile']['size']);
        $description = $myts->makeTareaData4Save($_POST['description']);
        $comments = $_POST['commentoption'];
        $date = time();
        $tmpfilename = randomfilename();

        // Determine write group access to this category
        $grp_writeaccess = DB_getItem($_FM_TABLES['filemgmt_cat'],'grp_writeaccess',"cid=$cid");
        if (SEC_inGroup($grp_writeaccess)) {
            $directUploadAccess = true;
        } else {
            $directUploadAccess = false;
        }

        // Upload New file
        if ($uploadfilename != '') {
            $pos = strrpos($uploadfilename,'.') + 1;
            $fileExtension = strtolower(substr($uploadfilename, $pos));
            if (array_key_exists($fileExtension, $_FMDOWNLOAD)) {
                if ( $_FMDOWNLOAD[$fileExtension] == 'reject' ) {
                    COM_errorLOG("AddNewFile - New Upload file is rejected by config rule:$uploadfilename");
                    $eh->show("1109");
                } else {
                    $fileExtension = $_FMDOWNLOAD[$fileExtension];
                    $tmpfilename = $tmpfilename . ".$fileExtension";

                    /* Need to also rename the uploaded filename or URL that will be used for the approval name */
                    /* Grab the filename without extension and add the mapped extension */
                    $pos = strrpos($url,'.') + 1;
                    $url = strtolower(substr($url, 0,$pos)) . $fileExtension;
                }
            } else {
                $tmpfilename = $tmpfilename . ".$fileExtension";
            }
            $tmp  = $_FILES["newfile"]['tmp_name'];    // temporary name of file in temporary directory on server
            if (is_uploaded_file ($tmp)) {                               // is this temporary file really uploaded?
                if ($directUploadAccess) {
                    $returnMove = move_uploaded_file($tmp, "{$filemgmt_FileStore}{$name}");             // move file to your upload directory
                } else {
                    $returnMove = move_uploaded_file($tmp, $filemgmt_FileStore."tmp/".$tmpfilename);    // move temporary file to your upload directory
                }
//                $returnMove = move_uploaded_file($tmp, $filemgmt_FileStore."tmp/".$tmpfilename);    // move temporary file to your upload directory
                if (!$returnMove) {
                    if ($directUploadAccess) {
                        COM_errorLOG("Filemgmt submit error: Direct upload, file could not be created: $tmp to {$filemgmt_FileStore}{$name}");
                    } else {
                        COM_errorLOG("Filemgmt submit error: Temporary file could not be created: $tmp to {$filemgmt_FileStore}tmp}/{$tmpfilename}");
                    }
                    $eh->show("1102");
                } else {
                    $AddNewFile = true;
                }
            }
        }

        // Upload New file snapshot image  - but only is file was uploaded ok
        $uploadfilename = $myts->makeTboxData4Save($_FILES['newfileshot']['name']);
        if ( $uploadfilename != '' AND $AddNewFile ) {
            $shotname = $uploadfilename;
            $logourl = rawurlencode($shotname);
            $shotname = $myts->makeTboxData4Save($shotname);
            $logourl = $myts->makeTboxData4Save($logourl);
            $tmpshotname = randomfilename();

            $tmp = $_FILES['newfileshot']['tmp_name'];    // temporary name of file in temporary directory on server
            $pos = strrpos($uploadfilename,'.') + 1;
            $fileExtension = strtolower(substr($uploadfilename, $pos));

            if (array_key_exists($fileExtension, $_FMDOWNLOAD)) {
                if ( $_FMDOWNLOAD[$fileExtension] == 'reject' ) {
                    COM_errorLOG("AddNewFile - New Upload file snapshot is rejected by config rule:$uploadfilename");
                    $eh->show("1109");
                } else {
                    $fileExtension = $_FMDOWNLOAD[$fileExtension];
                    $tmpshotname = $tmpshotname . ".$fileExtension";

                    /* Need to also rename the uploaded filename or URL that will be used for the approval name */
                    /* Grab the filename without extension and add the mapped extension */
                    $pos = strrpos($logourl,'.') + 1;
                    $logourl = strtolower(substr($logourl, 0,$pos)) . $fileExtension;
                }
            } else {
                $tmpshotname = $tmpshotname . ".$fileExtension";
            }
            // Append the temporary name for the file, using a ; as delimiter. We will be able to store both names in one field
            $tmpfilename .= ';'.$tmpshotname;

            if (is_uploaded_file ($tmp)) {
                if ($directUploadAccess) {
                    $returnMove = move_uploaded_file($tmp, "{$filemgmt_SnapStore}{$tmpshotname}");    // move temporary snapfile to your upload directory
                } else {
                    $returnMove = move_uploaded_file($tmp, "{$filemgmt_SnapStore}tmp/{$tmpshotname}");    // move temporary snapfile to your upload directory
                }
                if (!$returnMove) {
                    COM_errorLOG("Filemgmt submit error: Temporary file could not be created: ".$tmp." to ".$filemgmt_SnapStore."tmp/".$tmpshotname);
                    $AddNewFile = false;    // Set false again - in case it was set true above for actual file
                    $eh->show("1102");
                } else {
                    $AddNewFile = true;
                }
            }
        }

        if ($AddNewFile){
            if ($directUploadAccess) {
                $status = 1;
            } else {
                $status = 0;
            }
            $fields = 'cid,title,url,homepage,version,size,platform,logourl,submitter,status,date,hits,rating,votes,comments';
            $sql = "INSERT INTO {$_FM_TABLES['filemgmt_filedetail']} ($fields) VALUES ";
            $sql .= "('$cid','$title','$url','$homepage','$version','$size','$tmpfilename','$logourl','$submitter',$status,'$date',0,0,0,'$comments')";
            DB_query($sql) or $eh->show("0013");
            $newid = DB_insertID();
            DB_query("INSERT INTO {$_FM_TABLES['filemgmt_filedesc']} (lid, description) VALUES ($newid, '$description')") or $eh->show("0013");
            if ($directUploadAccess) {
                CACHE_remove_instance('whatsnew');
                redirect_header("index.php",2,_MD_FILEAPPROVED);
            } else {
                redirect_header("index.php",2,_MD_RECEIVED."<br>"._MD_WHENAPPROVED."");
            }
            exit();
        } else {
            redirect_header("index.php",2,_MD_ERRUPLOAD."");
            exit();
        }

    } else {

        $display .= COM_siteHeader('menu');
        $display .= COM_startBlock("<b>". _MD_UPLOADTITLE ."</b>");
        $display .= "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"8\" class=\"plugin\"><tr><td style=\"padding-top:10px;padding-left:50px;\">\n";
        $display .= "<ul><li>"._MD_SUBMITONCE."</li>\n";
        $display .= "<li>"._MD_ALLPENDING."</li>\n";
        $display .= "<li>"._MD_DONTABUSE."</li>\n";
        $display .= "<li>"._MD_TAKEDAYS."</li>\n";
        $display .= "<li>"._MD_REQUIRED."</li></ul>\n";

        $display .= "<form action=\"submit.php\" method=\"post\" enctype='multipart/form-data'> \n";
        $display .= "<table width=\"80%\"><tr>";
        $display .= "<td align=\"right\" style=\"white-space:nowrap;\"><b>"._MD_FILETITLE."</b></td><td>";
        $display .= "<input type=\"text\" name=\"title\" size=\"50\" maxlength=\"100\"" . XHTML . ">";
        $display .= "</td></tr><tr><td align=\"right\" style=\"white-space:nowrap;\"><b>"._MD_DLFILENAME."</b></td><td>";
        $display .= "<input type=\"file\" name=\"newfile\" size=\"50\" maxlength=\"100\"" . XHTML . ">";
        $display .= "</td></tr>";
        $display .= "<tr><td align=\"right\" style=\"white-space:nowrap;\"><b>"._MD_CATEGORY."</b></td><td>";

        $sql = "SELECT cid,title,grp_writeaccess FROM {$_FM_TABLES['filemgmt_cat']} WHERE pid=0 ";
        if (count($_GROUPS) == 1) {
            $sql .= " AND grp_access = '" . current($_GROUPS) ."' ";
        } else {
            $sql .= " AND grp_access IN (" . implode(',',array_values($_GROUPS)) .") ";
        }
        $sql .= "ORDER BY cid";
        $query = DB_query($sql);
        $categorySelectHTML = '<select name="cid">';
        while (list($cid,$title,$directUploadGroup) = DB_fetchArray($query)) {
            $categorySelectHTML .= '<option value="'.$cid.'">';
            if (!SEC_inGroup($directUploadGroup)) {
                $categorySelectHTML .= "$title *";
            } else {
                $categorySelectHTML .= "$title";
            }
            $categorySelectHTML .= "</option>\n";
            $arr = $mytree->getChildTreeArray($cid);
            foreach ( $arr as $option ) {
                $option['prefix'] = str_replace(".","--",$option['prefix']);
                $catpath = $option['prefix']."&nbsp;".$myts->makeTboxData4Show($option[2]);
                $categorySelectHTML .= '<option value="'.$option[$mytree->id] . '">';
                if (!SEC_inGroup($option[5])) {
                    $categorySelectHTML .= "$catpath *";
                } else {
                    $categorySelectHTML .= "$catpath";
                }
                $categorySelectHTML .= "</option>\n";
            }
        }
        $categorySelectHTML .= '</select>';

        $display .= $categorySelectHTML;
        $display .= '<span class="pluginTinyText" style="padding-left:5px;">' ._MD_APPROVEREQ ."</span></td></tr>\n";

        $display .= "<tr><td align=\"right\" style=\"white-space:nowrap;\"><b>"._MD_HOMEPAGEC."</b></td><td>\n";
        $display .= "<input type=\"text\" name=\"homepage\" size=\"50\" maxlength=\"100\"" . XHTML . "></td></tr>\n";
        $display .= "<tr><td align=\"right\" style=\"white-space:nowrap;\"><b>"._MD_VERSIONC."</b></td><td>\n";
        $display .= "<input type=\"text\" name=\"version\" size=\"10\" maxlength=\"10\"" . XHTML . "></td></tr>\n";
        $display .= "<tr><td align=\"right\" valign=\"top\" style=\"white-space:nowrap;\"><b>"._MD_DESCRIPTIONC."</b></td><td>\n";
        $display .= "<textarea name=\"description\" cols=\"50\" rows=\"6\"></textarea>\n";
        $display .= "</td></tr>\n";
        $display .= "<tr><td align=\"right\" style=\"white-space:nowrap;\"><b>"._MD_SHOTIMAGE."</b></td><td>\n";
        $display .= "<input type=\"file\" name=\"newfileshot\" size=\"50\" maxlength=\"60\"" . XHTML . "></td></tr>\n";
        $display .= "<tr><td align=\"right\"></td><td>";
        $display .= "</td></tr><tr><td style=\"text-align:right;\"><b>"._MD_COMMENTOPTION."</b></td><td>";
        $display .= "<input type=\"radio\" name=\"commentoption\" value=\"1\" checked=\"checked\"" . XHTML . ">&nbsp;" ._MD_YES."&nbsp;";
        $display .= "<input type=\"radio\" name=\"commentoption\" value=\"0\"" . XHTML . ">&nbsp;" ._MD_NO."&nbsp;";
        $display .= "</td></tr>\n";
        $display .= "</table>\n";
        $display .= "<br" . XHTML . ">";
        $display .= "<input type=\"hidden\" name=\"submitter\" value=\"".$uid."\"". XHTML. ">";
        $display .= "<center><input type=\"submit\" name=\"submit\" class=\"button\" value=\""._MD_SUBMIT."\"" . XHTML. ">\n";
        $display .= "&nbsp;<input type=\"button\" value=\""._MD_CANCEL."\" onclick=\"javascript:history.go(-1)\"" . XHTML . "></center>\n";
        $display .= "</form>\n";
        $display .= "</td></tr></table>";
        $display .= COM_endBlock();
        $display .= COM_siteFooter();
        echo $display;

    }

} else {
    COM_errorLOG("Submit.php => FileMgmt Plugin Access denied. Attempted user upload of a file, Remote address is:{$_SERVER['REMOTE_ADDR']}");
    redirect_header($_CONF['site_url']."/index.php",1,_GL_ERRORNOUPLOAD);
}

?>