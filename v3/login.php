<?php
  $webroot =  dirname(__FILE__) ;
  $originPath = str_replace("/var/www/eip","$webroot",ini_get("include_path"));
  ini_set("include_path",$originPath);
  //echo ini_get('include_path');
  
  //smarty
  include('smartyconf.php');
  include('adodb.php');

  if (isset($_POST['login']))  
  {
    if (isPass($_POST['emp']))
    {
      setcookie("isLogin", true);
      $gUrl = "https://" . $_SERVER["SERVER_NAME"]."/welcome.php";
      Header("Location:$gUrl");
      exit();
    }
  }

  //smarty
  $smarty->display("login.html");

  /***
   *@param string $emp 工號
   *@param string $password 密碼
   *@return boolean $result 判定結果
   *
   */
  function isPass($emp,$password)
  {
    //require_once("includes/adodb/adodb.inc.php");
    require_once("adodb.inc.php");
    $result = false;
    #連結資料庫
    $conn = &ADONewConnection('oci8');
    $conn->debug=$configflag;
    $conn->Connect('', 'apps', 'psa9696', 'waltondb');
    $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
    $sql = "select EMP_NR from HR_EMP_DATA where EMP_NR ='$emp'";
    $rs = $conn -> Execute($sql);
    if (!$rs)echo ",error:".$conn->errorMsg();
    $r = $rs -> FetchRow();
    if (isset($r['EMP_NR']) and $r['EMP_NR']!='')
    {
      if ($emp == $r['EMP_NR'])
      {
        echo 'success!!';
        $result = true;
      }
      else
      {
        echo 'fail!!';
      }
    }
    return $result;
  }
?>
