<?php
/*-------------------------------------------------------------*\
| phpErrorDoc written by jason rust <rusty@rustyparts.com>
|
| v1.0 De. 29 2001 - first version 
|
| from http://www.rustyparts.com/scripts.php
| under the GNU license you are free to use/modify this script 
| email me any improvements and  want them included in the next 
| version.
| this script comes with no implied warranty.
|
| If you want to send me a thank you, starbucks coupons 
| are gladly accepted
| (http://www.starbucks.com ;)
| my address is:
| attention: jason's phpErrorDoc
| 212 Cottage Grove Ave.
| Santa Barbara, CA 93101
| otherwise it's free!
|
| Cheers!
| -Jason
\*-------------------------------------------------------------*/
//               **Changelog**
/* Modified by Eric Caldwell on January 28th, 2002 for use with
|  XOOPS as the errorhandler module
|  http://www.boardjive.com  -  eric.caldwell@boardjive.com
|
|  Ok, I renamed the phpErrordoc.php file to index.php and
|  created a couple of dirs for the lang and logs.  I also
|  created a english.php file for the language defines and 
|  added the necessary files to make this script a XOOPS mod.
*/

include("header.php");
include("../../header.php");
include("config.php");
global $xoopsConfig;

// images to display on left hand side (full path to the image)
$image = array (
         '000' => 'modules/errorhandler/images/error.gif',
         '400' => 'modules/errorhandler/images/error.gif',
         '401' => 'modules/errorhandler/images/error.gif',
         '403' => 'modules/errorhandler/images/error.gif',
         '404' => 'modules/errorhandler/images/error2.gif',
         '500' => 'modules/errorhandler/images/error.gif'
         );

// These are the Subject Lines for the e-mail notification
// You can modify these in the language file not causing any problems.
$subject = array ( 
         '000' => _EMAILMSG_000,
         '400' => _EMAILMSG_400,
         '401' => _EMAILMSG_401,
         '403' => _EMAILMSG_403,
         '404' => _EMAILMSG_404,
         '500' => _EMAILMSG_500
         );

// These are the Subject Lines for the web page notification
// You can modify these in the language file not causing any problems.
$msg = array (
        '000' => _WEBMSG_000,
        '400' => _WEBMSG_400,
        '401' => _WEBMSG_401,
        '403' => _WEBMSG_403,
        '404' => _WEBMSG_404,
        '500' => _WEBMSG_500
        );
        

$result = $QUERY_STRING;
if ($result != "400" && $result != "400" && $result != "403" && $result != "404" && $result != "500") $result="000";

print_header($result);
echo $msg[$result];
print_footer();

if ($log[$result] == "Y") notify("L",$result);
if ($email[$result] == "Y") notify("M",$result);

################################################################## 
# this routine sends an e-mail or writes to a log depending
# on whether it was called with an "L" or "M"
function notify ($action, $result)
{
  global $errorLog, $subject, $notify, $sitename, $REDIRECT_URL, $REMOTE_ADDR, $HTTP_USER_AGENT, $REDIRECT_ERROR_NOTES, $SERVER_NAME,$HTTP_REFERER;
  $date=date("D M j G:i:s T Y");


  # see what action to take
  if ($action == "L") { 
    $message = "[$date] [client: $REMOTE_ADDR ($HTTP_USER_AGENT)] $REDIRECT_ERROR_NOTES\n";
    $fp = fopen ($errorLog,"a+");
    fwrite($fp, $message);
    fclose($fp);
  } else {
    # create message
    $message = " 
------------------------------------------------------------------------------
Site:\t\t$sitename ($SERVER_NAME)
Error Code:\t$result $subject[$result] ($REDIRECT_ERROR_NOTES)
Occurred:\t$date
Requested URL:\t$REDIRECT_URL
User Address:\t$REMOTE_ADDR
User Agent:\t$HTTP_USER_AGENT
Referer:\t$HTTP_REFERER
------------------------------------------------------------------------------";
    mail("$notify", "[ Server Error: $subject[$result] ]", $message,
      "From: server_error@$SERVER_NAME\r\n"
      ."X-Mailer: PHP/" . phpversion());
  }
}

function print_header($result) 
{
  global $subject, $body_bg_color, $table_bg_color, $table_fg_color, $image_bg_color, $image, $header_color, $sitename, $REDIRECT_ERROR_NOTES;
  # take off the path to the script, we don't want them to see that
  $error_notes = preg_replace("/:.*/","",$REDIRECT_ERROR_NOTES);
  if (empty($error_notes)) $error_notes = "Unknown";
  OpenTable();
    echo "<tr>
      <td valign=\"center\">
        <table width=\"550\" bgcolor=\"$table_bg_color\" border=\"1\" align=\"center\" cellspacing=\"0\" cellpadding=\"5\" color=\"$table_fg_color\">
          <tr>
            <td bgcolor=\"$image_bg_color\">
              <img src=\"$image[$result]\" alt=\"error\">
            </td>
            <td>
              <center>
                <span style=\"font-weight: 600; color: $header_color;\">$sitename</span> <b>Error $result</b>
                <br />
                ($error_notes)
              </center>
              <br />";
}

function print_footer()
{
  global $returnLink;
  echo "
              <br />
              <br />
              <center>Please <a href=\"$returnLink\">Click Here</a> to Return to our Home Page.</center>
            </td>
          </tr>
        </table>
      </td>
    </tr>
";
CloseTable();
include("../../footer.php");
}
?>