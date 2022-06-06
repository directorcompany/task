<?php
 error_reporting( E_ALL ); 
  spl_autoload_register(function($class_name)
  {
    if (file_exists('controller/'.$class_name.'.php')) {
      require_once('controller/'.$class_name.'.php');
      require_once('config/config.php');
    }
});
$controller = new Controller();
$controller->show();
 ?>