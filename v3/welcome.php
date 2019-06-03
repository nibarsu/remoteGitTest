<?php
  $webroot =  dirname(__FILE__) ;
  $originPath = str_replace("/var/www/eip","$webroot",ini_get("include_path"));
  ini_set("include_path",$originPath);
  //echo ini_get('include_path');
  
  //smarty
  include('smartyconf.php');
  //smarty
  $smarty->display("welcome.html");
?>
