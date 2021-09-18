<?php
//server details
$servername="localhost";
$username="root";
$password="";

//create a connection
$db= mysqli_connect($servername, $username,$password);
if($db){
   //echo"connection established <br>";
}else{
    //echo"connection not established";
}
// a query statement
$query="create database if not exists driverless";
// execute the query
$dbexec=mysqli_query($db,$query);
if ($dbexec){
  //echo"database created";
}
else{
   // echo "no database created". mysqli_error($conn);
}
mysqli_select_db($db,'driverless');
?>