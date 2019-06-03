<?php

$webroot =  dirname(dirname(__FILE__)) ;
 $modules_dir = ( isset($_REQUEST["name"]) && $_REQUEST["name"] != "") ? "/modules" : "";
 $module_name = ( isset($_REQUEST["name"]) && $_REQUEST["name"] != "") ? "/" . $_REQUEST["name"] : "";
 $nowdir = getcwd() ;
 if (!@chdir($webroot.$modules_dir.$module_name."/templates_c/")) @mkdir($webroot.$modules_dir.$module_name."/templates_c/",0777) ;

@chdir($nowdir) ; 
if ($_SERVER["SERVER_ADDR"] == "10.11.2.193"){
  $originPath = str_replace("/var/www/eip","$webroot",ini_get("include_path"));
  ini_set("include_path",$originPath);
}
 include($webroot."/includes/smarty/Smarty.class.php");
 $smarty = new Smarty;
 //$smarty->debugging = true;
 //$smarty->force_compile = true;
 //$smarty->caching = 2;//set caching lifetime
 //$smarty->cache_lifetime = 10;



 //$smarty->template_dir = $webroot.$modules_dir.$module_name."/templates/" ;
 //$smarty->config_dir = $webroot.$modules_dir.$module_name."/templates/language/" ;
 //$smarty->compile_dir = $webroot.$modules_dir.$module_name."/templates_c/";
 //$smarty->cache_dir = $webroot."/cache/";
 //$smarty->assign("LANG","lang-".$currentlang.".conf") ;
 $smarty->setTemplateDir($webroot.$modules_dir.$module_name."/templates/");
 $smarty->setCompileDir($webroot.$modules_dir.$module_name."/templates_c/");
 $smarty->setCacheDir($webroot."/cache/");
 //echo "DIR".$smarty->getCacheDir();
 //var_dump($smarty->getTemplateDir());
 //echo "DIR".$smarty->getCompileDir();

?>
