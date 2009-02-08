<?php
// +--------------------------------------------------------------------------+
// | glFusion CMS                                                             |
// +--------------------------------------------------------------------------+
// | im-image.php                                                             |
// |                                                                          |
// | ImageMagick Graphic Library interface                                    |
// +--------------------------------------------------------------------------+
// | $Id::                                                                   $|
// +--------------------------------------------------------------------------+
// | Copyright (C) 2002-2008 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
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

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

function _img_getIMversion()
{
    global $_CONF;

    // get im version
    list($results, $status) = UTL_exec($_CONF['path_to_mogrify'] . '/identify');

    foreach ($results as $resultLine) {
        if (preg_match('/(ImageMagick|GraphicsMagick)\s+([\d\.r-]+)/', $resultLine, $matches)) {
	        $version = array($matches[1], $matches[2]);
        }
    }
    return $version;
}

/*
 * ImageMagick specific rotate function
 */
function _img_RotateImage($srcImage, $direction,$mimeType)
{
    global $_CONF;

    switch( $direction ) {
        case 'right' :
            $IM_rotate = "90";
            break;
        case 'left' :
            $IM_rotate = "-90";
            break;
        default :
            COM_errorLog("_img_rotateImage: Invalid direction passed to rotate, must be left or right");
            return array(false,'Invalid direction passed to rotate, must be left or right');
    }

    $tmpImage = $srcImage . '.rt';

    UTL_execWrapper('"' . $_CONF['path_to_mogrify'] . "/convert" . '"' . " -quality 100 -rotate " . $IM_rotate . " $srcImage $tmpImage");
    if ( $_CONF['jhead_enabled'] == 1 && ($mimeType == 'image/jpeg' || $mimeType == 'image/jpg') ) {
        $rc = UTL_execWrapper('"' . $_CONF['path_to_jhead'] . "/jhead" . '"' . " -te " . $srcImage . " " . $tmpImage);
    }
    $rc = copy($tmpImage, $srcImage);
    @unlink($tmpImage);
    return array(true,'');
}

function _img_resizeImage($srcImage, $destImage, $sImageHeight, $sImageWidth, $dImageHeight, $dImageWidth, $mimeType)
{
    global $_CONF;

    $version = _img_getIMversion();

    $rc = version_compare($version[1],"6.3.4");
    if ( $rc == -1 ) {
        $noLayers = 1;
    } else {
        $noLayers = 0;
    }

    $JpegQuality = 85;

    if ( $_CONF['debug_image_upload'] ) {
        COM_errorLog("_img_resizeImage: Resizing using ImageMagick src = " . $srcImage . " mimetype = " . $mimeType);
    }
    if ( ( $dImageHeight > $sImageHeight) && ($dImageWidth > $sImageWidth )) {
        $dImageWidth = $sImageWidth;
        $dImageHeight = $sImageHeight;
    }
    $newdim = $dImageWidth . "x" . $dImageHeight;

    if ( $mimeType == 'image/gif' ) {
        if ( $_CONF['debug_image_upload'] ) {
            if ( $noLayers == 0 ) {
                $rc = UTL_execWrapper('"' . $_CONF['path_to_mogrify'] . "/convert" . '"' . " $srcImage -verbose -coalesce -quality $JpegQuality -resize $newdim -layers Optimize $destImage");
            } else {
                $rc = UTL_execWrapper('"' . $_CONF['path_to_mogrify'] . "/convert" . '"' . " $srcImage -verbose -coalesce -quality $JpegQuality -resize $newdim $destImage");
            }
        } else {
            if ( $noLayers == 0 ) {
                $rc = UTL_execWrapper('"' . $_CONF['path_to_mogrify'] . "/convert" . '"' . " $srcImage -coalesce -quality $JpegQuality -resize $newdim -layers Optimize $destImage");
            } else {
                $rc = UTL_execWrapper('"' . $_CONF['path_to_mogrify'] . "/convert" . '"' . " $srcImage -coalesce -quality $JpegQuality -resize $newdim $destImage");
            }
        }
        if ( $rc != true ) {
            COM_errorLog("_img_resizeImage: Error - Unable to resize image - ImageMagick convert failed.");
            return array(false,'Error - Unable to resize image - ImageMagick convert failed.');
        }
        clearstatcache();
        if ( !file_exists($destImage) || !filesize($destImage) ) {
            COM_errorLog("_img_resizeImage: Error - Unable to resize image - ImageMagick convert failed.");
            return array(false,'Error - Unable to resize image - ImageMagick convert failed.');
        }
    } else {
        if ( $_CONF['debug_image_upload'] ) {
            $rc = UTL_execWrapper('"' . $_CONF['path_to_mogrify'] . "/convert" . '"' . " -verbose -flatten -quality $JpegQuality -size $newdim $srcImage -geometry $newdim $destImage");
        } else {
            $rc = UTL_execWrapper('"' . $_CONF['path_to_mogrify'] . "/convert" . '"' . " -flatten -quality $JpegQuality -size $newdim $srcImage -geometry $newdim $destImage");
        }
        if ( $rc != true ) {
            COM_errorLog("_img_resizeImage: Error - Unable to resize image - ImageMagick convert failed.");
            return array(false,'Error - Unable to resize image - ImageMagick convert failed.');
        }
        clearstatcache();
        if ( !file_exists($destImage) || !filesize($destImage) ) {
            COM_errorLog("_img_resizeImage: Error - Unable to resize image - ImageMagick convert failed.");
            return array(false,'Error - Unable to resize image - ImageMagick convert failed.');
        }
        if ( $_CONF['jhead_enabled'] == 1 ) {
            UTL_execWrapper('"' . $_CONF['path_to_jhead'] . "/jhead" . '"' . " -v -te " . $srcImage . " " . $destImage);
        }
    }
    return array(true,'');
}

/*
 * ImageMagick Specific method to convert image
 */
function _img_convertImageFormat($srcImage,$destImage,$destFormat, $mimeType)
{
    global $_CONF;

    COM_errorLog("_img_convertImageFormat: Converting image to " . $destFormat);
    $rc = UTL_execWrapper('"' . $_CONF['path_to_mogrify'] . "/convert" . '"' . " -flatten -quality " . $_CONF['jpg_orig_quality'] . " $srcImage -geometry +0+0 $destImage");
    if ( $rc != true ) {
        COM_errorLog("_img_convertImageFormat: Error converting " . $srcImage . " to " . $destImage);
        return array(false,'ImageMagick convert failed to convert image.');
    }
    clearstatcache();
    if ( !file_exists($destImage) || !filesize($destImage) ) {
        COM_errorLog("_img_resizeImage: Error - Unable to resize image - ImageMagick convert failed.");
        return array(false,'ImageMagick convert failed to convert image.');
    }

    if ( $srcImage != $destImage) {
        @unlink($srcImage);
    }
    return array(true,'');
}

function _img_watermarkImage($origImage, $watermarkImage, $opacity, $location, $mimeType )
{
    global $_CONF;

    if ( $_CONF['debug_image_upload'] ) {
        COM_errorLog("_img_watermarkImage: Using ImageMagick to watermark image.");
    }
    switch( $location ) {
        case 'topleft' : // 1 :
            $location = "NorthWest";
            break;
        case 'topcenter' : // 2:
            $location = "North";
            break;
        case 'topright': // 3:
            $location = "NorthEast";
            break;
        case 'leftmiddle' : // 4 :
            $location = "West";
            break;
        case 'center' : // 5 :
            $location = "Center";
            break;
        case 'rightmiddle' : // 6 :
            $location = "East";
            break;
        case 'bottomleft' : //7 :
            $location = "SouthWest";
            break;
        case 'bottomcenter' : // 8 :
            $location = "South";
            break;
        case 'bottomright' : // 9 :
            $location = "SouthEast";
            break;
        default:
            COM_errorLog("_img_watermarkImage: Unknown watermark location: " . $location);
            return array(false,'Unknown watermark location');
            break;
    }
    $rc = UTL_execWrapper('"' . $_CONF['path_to_mogrify'] . "/convert" . '" ' . " $watermarkImage -fill grey50 -colorize 40  miff:- | " . '"' . $_CONF['path_to_mogrify'] . "/composite" . '"' . " -dissolve " . $opacity . " -gravity " . $location . " - $origImage $origImage");
    COM_errorLog("_img_watermarkImage: Watermark successfully applied (ImageMagick)");
    return array($rc,'');
}
?>