<?php 
include("config.php");
include("fbconfig.php");




$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
//$permissions = ['state']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/testliabrary/sociallogin/facebook/fbcallback.php', $permissions);
echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
//print_r($_SESSION);
?>
