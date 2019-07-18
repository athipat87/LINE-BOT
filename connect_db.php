<?php
$Setup_Server = 'localhost';
$Setup_User = 'athipat_day';
$Setup_Pwd = 'it!112233';
$Setup_Database = 'athipat_linebot';
mysql_connect($Setup_Server,$Setup_User,$Setup_Pwd);
mysql_query("$Setup_Database");
mysql_query("SET NAMES UTF8");
?>