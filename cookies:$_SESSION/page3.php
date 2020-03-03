<?php
//delete the session cookie from the browser.
$name = session_name();
$expire = strtotime('-1 year');
$params = session_get_cookie_params();
$path = $params['path'];
$domain =$params['domain'];
$secure = $params['secure'];
$httponly = $params['httponly'];
setcookie($name, '', $expire, $path, $domain, $secure, $httponly);

//delete all session cookies and destroy the session on the server.
$_SESSION = array();
session_destroy();
?>
