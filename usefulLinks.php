<?php

  if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
  }

  require_once "config.php";

  readfile('headerContent.html');//IMPORTANT!!!
  readfile('menuContent.html');//IMPORTANT!!!
  readfile('bookmarks.html');
  readfile('footerContent.html');//IMPORTANT!!!
?>