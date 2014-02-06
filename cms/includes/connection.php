<?php

try{
$pdo = new PDO('mysql: host= localhost;dbname=cms','root');
}catch(PDOException $e){

exit('Database error.');

}



/*
$link = mysql_connect("localhost","root","");

if($link){

mysql_select_db("cms",$link);

}
*/
?>