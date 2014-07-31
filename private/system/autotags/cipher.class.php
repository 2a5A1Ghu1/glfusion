<?php
// +--------------------------------------------------------------------------+
// | glFusion CMS                                                             |
// +--------------------------------------------------------------------------+
// | cipher.class.php                                                         |
// |                                                                          |
// | cipher PHP autotag functions                                             |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2009-2011 by the following authors:                        |
// |                                                                          |
// | Mark A. Howard         mark AT usable-web DOT com                        |
// +--------------------------------------------------------------------------+
// | Based upon the fine work of:                                             |
// |                                                                          |
// | Joe Mucchiello         joe AT throwingdice DOT com                       |
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
    die ('This file can not be used on its own!');
}

class autotag_cipher extends BaseAutotag {

    function autotag_cipher()
    {
        global $_AUTOTAGS;

        $this->description = $_AUTOTAGS['cipher']['description'];
    }

    function parse($p1, $p2, $fulltag)
    {
        $code = "abcdefghijklmnopqrstuvwxyz";
        $key = Array();
        $len = strlen($p1);
        for ($i = 0; $i < $len; ++$i)
            $key[$p1[$i]] = $code[$i];

        $result = '';
        $len = strlen($p2);
        for ($i = 0; $i < $len; ++$i)
        {
            $c = strtolower($p2[$i]);
            $upper = $c != $p2[$i];
            if (!isset($key[$c]))
                $result .= $p2[$i];
            else if ($upper)
                $result .= strtoupper($key[$c]);
            else
                $result .= $key[$c];
        }
        return $result;
    }
}
?>