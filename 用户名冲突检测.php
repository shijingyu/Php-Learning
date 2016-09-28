<?php
  error_reporting(0); //不显示警告信息
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "ajaxdemo";

  $link = mysql_connect($dbhost, $dbuser, $dbpass);

  mysql_select_db($dbname) or die(mysql_error());
  mysql_query("SET NAMES 'UTF8'"); //页面输出的汉字不会乱码
  mysql_query("SET CHARACTER SET UTF8");
  mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");

  $sql = "select * from ajaxtest where username = '".$_GET["username"]."'";

  $res = mysql_query($sql,$link);

  $mNums = mysql_num_rows($res); //mysql_num_rows() 函数返回结果集中行的数目。
  //$row=mysql_fetch_array($res);
  if($mNums >= 1){
    echo "<font color=red>此用户名被占用</font>";
  }
  mysql_free_result($res);//释放结果内存
?>


