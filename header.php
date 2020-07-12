<?php
// ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System                      //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
// Based on:								     //
// myPHPNUKE Web Portal System - http://myphpnuke.com/	  		     //
// PHP-NUKE Web Portal System - http://phpnuke.org/	  		     //
// Thatware - http://thatware.org/					     //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
include("../../mainfile.php");
include_once($xoopsConfig['root_path']."class/xoopsmodule.php");
include_once($xoopsConfig['root_path']."class/xoopsgroup.php");
$xoopsModule = XoopsModule::getByDirname("errorhandler");
if ( !$xoopsModule ) {
	redirect_header($xoopsConfig['xoops_url']."/",2,_MODULENOEXIST);
	exit();
}
if ( $xoopsUser ) {
	if ( !XoopsGroup::hasAccessRight($xoopsModule->mid(), $xoopsUser->groups()) ) {
		redirect_header($xoopsConfig['xoops_url']."/",2,_NOPERM);
		exit();
	}
} else {
	if ( !XoopsGroup::hasAccessRight($xoopsModule->mid(), 0) ) {
		redirect_header($xoopsConfig['xoops_url']."/",2,_NOPERM);
		exit();
	}
}
if(file_exists($xoopsConfig['root_path']."modules/errorhandler/language/".$xoopsConfig['language'].".php")){
	include($xoopsConfig['root_path']."modules/errorhandler/language/".$xoopsConfig['language'].".php");
}else{
	include($xoopsConfig['root_path']."modules/errorhandler/language/english.php");
}

?>