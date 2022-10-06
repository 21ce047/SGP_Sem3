<?php
require_once('vendor/autoload.php');
$google=new Google_Client();

$google->setClientId('742142871313-mtm89jgfch32trol0rna48mcvs6iqrk8.apps.googleusercontent.com');

$google->setClientSecret('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');

$google->setRedirectUri("http://localhost/api/login_with_google/profile.php");

$google->addScope('email');

    $google->addScope('profile');

    session_start();
?>