<?php
/* Nasty Way Of Deploying This Beast */
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: ' . $uri . '/eBanking/core/');
exit;
