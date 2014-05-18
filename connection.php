<?php
$name = "root";
$password = "";
$localhost = "localhost";
$dbhandle = mysql_connect($localhost, $name, $password)
   or die("unable to connect  1");
$db="kryptonites";
$link = mysql_connect($localhost, $name, $password) or die("could not connect  2");
mysql_select_db('kryptonites',$dbhandle) or die("could not connect  3");

echo "Your city name is";

?> 