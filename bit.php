<?php
header("Content-Type: text/html; charset=UTF-8");

$url = $_GET['url'];

$urls['twit'] = "https://twitter.com/bts_twt?lang=ko";
$urls['insta'] = "http://ink361.com/app/users/ig-21145068/bts___/photos";
$urls['twit'] = "https://twitter.com/bts_twt?lang=ko";
$urls['twit'] = "https://twitter.com/bts_twt?lang=ko";
$urls['twit'] = "https://twitter.com/bts_twt?lang=ko";

if(array_key_exists( $url, $urls )){
   header("Location: ". $urls[url] );
   exit();
}else{
   echo $url. " is not registered.";
}

?>
