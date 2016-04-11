<?php
session_start();
$site_path = realpath(dirname(__FILE__));
define ('__SITE_PATH', $site_path);

$site_url = str_replace('C:\wamp\www\\','/',__SITE_PATH);
define ('__SITE_URL', $site_url);

include 'registry.php';
include './Controller/template.class.php';
include '/Model/db.dao.php';  
include 'init.php'; //inclu les classe maitres

 /*** a new registry object ***/
 $registry = new registry;
 $registry->router = new router($registry,__SITE_PATH);
 $registry->template = new template($registry);
 $registry->router->loader();
 
 



?>
