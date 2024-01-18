<?php
  $dname=$_POST['dname'];
  $name=$_POST['name'];
//database connection
  $conn= new mysqli('localhost','root','','test1');
  if($conn-> connect_error){
  	die('connection failed:'.$conn-> connect_error);

  }
  else{
      $stmt=$conn->prepare("insert into regfaculty(dname,name) values(?,?)");
      $stmt->bind_param("ss",$dname,$name);
      $stmt->execute();
      echo("data saved successful");
      $stmt->close();
      $conn->close(); 

  }

?>