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
//       Changelog

/* Created by Eric Caldwell on January 28th, 2002 for use with
|  XOOPS as the errorhandler module
|  http://www.boardjive.com  -  eric.caldwell@boardjive.com
|
|  This file was created so that you can create language files
|  for the errorhandler module.  See index.php for other changelog
|  Spanish Translation w4z004@hotmail.com http://ar.xoops.org
*/

// 000 = HTML CODE TO APPEAR WHEN AN UNAUTHORIZED PAGE ACCESS ATTEMP OCCURS
// 400 = HTML CODE TO APPEAR WHEN A BAD REQUEST OCCURS
// 401 = HTML CODE TO APPEAR WHEN AN UNAUTHORIZED PAGE ACCESS ATTEMP OCCURS
// 403 = HTML CODE TO APPEAR WHEN A FORBIDDEN ATTEMPT IS MADE
// 404 = HTML CODE TO APPEAR WHEN A DOCUMENT NOT FOUND HAPPENS
// 500 = HTML CODE TO APPEAR WHEN A SERVER CONFIGURATION ERROR OCCURS


// Define the email messages
define("_EMAILMSG_000","El archivo no existe");
define("_EMAILMSG_400","Pedido erroneo");
define("_EMAILMSG_401","Sin Autorización");
define("_EMAILMSG_403","URL Prohibido");
define("_EMAILMSG_404","URL no encontrado");
define("_EMAILMSG_500","Error de Configuración");

//define the web page messages
define("_WEBMSG_000","<b>El URL que pidió, $REDIRECT_URL resultó en un código de error desconocido. <br /><br /> Hemos grabado este error y corregiremos el problema.</b>");
define("_WEBMSG_400","<b>El URL que pidió, $REDIRECT_URL es un pedido erroneo.</b>");
define("_WEBMSG_401","<b>El URL que pidió, $REDIRECT_URL necesita preautorización para acceder.</b>");
define("_WEBMSG_403","<b>El accesso al URL que pidió, $REDIRECT_URL, está prohibido.</b>");
define("_WEBMSG_404","<b>El URL que pidió, $REDIRECT_URL,  no puede ser encontrado. Usted escrbió incorrectamente el URL o nosotros tenemos un enlace roto. <br /><br /> Hemos grabado este error y corregiremos el problema si este es un enlace roto.</b>");
define("_WEBMSG_500","<b>El URL que pidió, $REDIRECT_URL da como resultado un error de configuración del server. <br /><br /> Hemos grabado este error y corregiremos el problema.</b>");

?>
