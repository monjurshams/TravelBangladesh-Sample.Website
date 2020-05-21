<?php 
session_start();
require('config.php');
require('classes/Model.php');
require('classes/Controller.php');
require('classes/Bootstrap.php');
require('classes/Message.php');


require('models/home.php');
require('models/admin.php');
require('models/touristspots.php');


require('controllers/home.php');
require('controllers/gallery.php');
require('controllers/about.php');
require('controllers/admin.php');
require('controllers/touristspots.php');





$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
if($controller){
  $controller->executeAction();
}