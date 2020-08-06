<?php


// this is for autoloading classes when an object is instantiated in a file
spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
  $path = "../classes/";
  $extension = ".class.php";
  $fullPath = $path . $className . $extension;
  echo '<pre>';
  echo $path;
  echo '<br>';
  echo $className;
  echo '<br>';
  echo $extension;
  echo '</pre>';
  echo '<br>';
//returns a much cleaner error message if an error is created when instantiating an object
  if(!file_exists($fullPath)){
    return false;
  }


  include_once $fullPath;
}
?>
