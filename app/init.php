<?php

//require_once './Twig/Autoloader.php';
//Twig_Autoloader::register();
 
//read from databases
    try{
    $dsn = "mysql:host=120.24.233.54;dbname=lhm_chinese_med";
    $db = new PDO($dsn, 'danny', 'Ud0891802183');
    $db->query('set names utf8;');
    }catch(Exception $e){
        echo "Cannot connect to database,Please come back later!";
         echo  $e;
        exit();   
    }

/*
        $imgurl ="http://58.96.172.29/newcmweb.hk/themes/exmed/admin/media/images/";
     $rs = $db->query("SELECT* FROM system");
    $system = $rs->fetch();
    */
   
 
     
session_start();
 
if(isSet($_GET['lang']))
{
$current_lang = $_GET['lang'];
$_SESSION['lang'] = $current_lang;
 
}
else if(isSet($_SESSION['lang']))
{
$current_lang = $_SESSION['lang'];
}
else
{
$current_lang = 'chi';
}
 
switch ($current_lang) {
  
 
  case 'eng':
  $lang_file = 'eng.php';
  break;
 
  default:
  $lang_file = 'chi.php';
 
}
 
include_once 'lang/'.$lang_file;
   
