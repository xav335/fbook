<?php
include('facebook.php');

$app_id='';
$app_secret='';
$facebook = new Facebook(array(
  'appId' => $app_id,
  'secret' => $app_secret
));
$pageID='';
$token='';

$attachment = array(
	'access_token' => $token,
	'message' => 'Premier message auto',
	'name' => 'Le pret à surfer',
	'caption' => 'Legend sous le tire',
	'link' => 'http://www.le-pret-a-surfer.com/',
	'description' => 'Description du lien',
	'picture' => 'https://www.google.fr/images/srpr/logo11w.png'
);
$deb = $facebook->api('/'.$pageID.'/feed/', 'post', $attachment);