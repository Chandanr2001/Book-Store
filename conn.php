<?php
  $dbhost="localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="test1";

  //create connection
  $con =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  	if($con-> connect_error){
  	die('connection failed:'.$con-> connect_error);

  }
 

  
  echo "connection successful";

?>