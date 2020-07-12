<?php
/*-------------------------------------------------------------*\
| phpErrorDoc written by jason rust <rusty@rustyparts.co?>|
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
//       Changelog
//
/* Created by Eric Caldwell on January 28th, 2002 for use with
|  XOOPS as the errorhandler module
|  http://www.boardjive.com  -  eric.caldwell@boardjive.com
|
|  This file was created so that you can create language files
|  for the errorhandler module.  See index.php for other changelog
*/
//
// 000 = HTML CODE TO APPEAR WHEN AN UNAUTHORIZED PAGE ACCESS ATTEMP OCCURS
// 400 = HTML CODE TO APPEAR WHEN A BAD REQUEST OCCURS
// 401 = HTML CODE TO APPEAR WHEN AN UNAUTHORIZED PAGE ACCESS ATTEMP OCCURS
// 403 = HTML CODE TO APPEAR WHEN A FORBIDDEN ATTEMPT IS MADE
// 404 = HTML CODE TO APPEAR WHEN A DOCUMENT NOT FOUND HAPPENS
// 500 = HTML CODE TO APPEAR WHEN A SERVER CONFIGURATION ERROR OCCURS
//
//
// Define the email messages
define("_EMAILMSG_000","Arquivo não Existe");
define("_EMAILMSG_400","Bad Request");
define("_EMAILMSG_401","Sem Autorização");
define("_EMAILMSG_403","Forbidden URL");
define("_EMAILMSG_404","Missing URL");
define("_EMAILMSG_500","Erro na Configuração");
//
//define the web page messages
define("_WEBMSG_000","<b>The URL that you requested, $REDIRECT_URL resulted in an unknown error code. It is possible that the condition causing the problem will be gone by the time you finish reading this. <br /><br /> We have logged this error and will correct the problem.</b>");
define("_WEBMSG_400","<b>The URL that you requested, $REDIRECT_URL was a bad request.</b>");
define("_WEBMSG_401","<b>The URL that you requested, $REDIRECT_URL requires preauthorization to access.</b>");
define("_WEBMSG_403","<b>Access to the URL that you requested, $REDIRECT_URL, is forbidden.</b>");
define("_WEBMSG_404","<b>The URL that you requested, $REDIRECT_URL, could not be found. Perhaps you either mistyped the URL or we have a broken link. <br /><br /> We have logged this error and will correct the problem if it is a broken link.</b>");
define("_WEBMSG_500","<b>The URL that you requested, $REDIRECT_URL resulted in a server configuration error. It is possible that the condition causing the problem will be gone by the time you finish reading this. <br /><br /> We have logged this error and will correct the problem.</b>");
//
?>