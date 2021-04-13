<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("703471435115-5kbfp0r0tmgj2vuspkb9qg88uu7o6g8p.apps.googleusercontent.com");
	$gClient->setClientSecret("qr0WL8THHPNMltM__d_NWIVc");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");//set di credential URI
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
