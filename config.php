<?php
// Config file for errorhandler module
//This is where all of the various parameters for the script are set.

// The e-mail address of the person to notify when an error occurs.
$notify="you email@ test.com";

// The name of your site
$sitename="your site name";

// The link the reader should follow home.
$returnLink="/";

// the full path to the error log.  make sure it is writable
// if you don't have an error log, create a dir and make it
// writeable by chmod 777 the dir name.
$errorLog = $xoopsConfig['root_path']."modules/errorhandler/logs/error_log";

// colors for the tables error page below
// background color of the page 
$body_bg_color = "#ffffff";

// background color of the table
$table_bg_color = "#dedef6";

// text color of the table
$table_fg_color = "#000000";

// background color of the cell on the left with a image
$image_bg_color = "#ffffff";

// color of the header text
$header_color = "#DD0101";

// Change the N to Y if you want to receive e-mail when a particular error occurs.
$email = array (
        '000' => 'N',
        '400' => 'N',
        '401' => 'N',
        '403' => 'N',
        '404' => 'N',
        '500' => 'N'
        );

// Change the N to Y if you want to log a particular error to file 
$log = array (
        '000' => 'N',
        '400' => 'N',
        '401' => 'N',
        '403' => 'N',
        '404' => 'N',
        '500' => 'N'
        );
?>