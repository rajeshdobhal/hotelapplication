<?php
include('connection.php');


$s=$_REQUEST["user"];

echo "$s";
 

$m= mysql_query("SELECT *
FROM `hotelinfo`
WHERE `state` = '".$s."'");





while($row=mysql_fetch_array($m))
{ 
   

	$b=$row['HOTEL_NAME'];
echo "$b";



echo "<br>";


}


?>