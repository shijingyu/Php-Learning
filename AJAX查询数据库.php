<?php 

error_reporting(0);
mysql_connect("localhost", "ajaxdemo", "");
mysql_select_db("ajaxde") or die(mysql_error());

mysql_query("set names 'utf8'");
mysql_query("set character set utf8");
mysql_query("set character_set_results=utf8");

$userage = $_GET["userage"];
$usersex = $_GET["usersex"];

$age = mysql_real_escape_string($age);
$sex = mysql_real_escape_string($sex);


$query = "select * from ajaxtest where usersex = '$usersex'";

if(is_numeric($userage))
$query .= "AND userage <= $userage";

$qry_result = mysql_query($query) or die(mysql_error());

$display_string = "<table>";
   $display_string .= "<tr>";
   $display_string .= "<th>用户名</th>";
   $display_string .= "<th>年龄</th>";
   $display_string .= "<th>性别</th>";
   $display_string .= "</tr>";

   // Insert a new row in the table for each person returned
   while($row = mysql_fetch_array($qry_result)) {
      $display_string .= "<tr>";
      $display_string .= "<td>$row[username]</td>";
      $display_string .= "<td>$row[userage]</td>";
      $display_string .= "<td>$row[usersex]</td>";
      $display_string .= "</tr>";
   }
   echo "sql语句为: " . $query . "<br />";

   $display_string .= "</table>";
   echo $display_string;
?>