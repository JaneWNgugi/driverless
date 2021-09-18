<?php
//session 
session_start_;
$_SESSION['login']=false;
$_SESSION['usname']="";

include "connection.php";

/*create tables
customer table
*/
//user table
$query="CREATE TABLE if not exists users(
     userr_id INT(6) unsigned auto_increment primary key,
     fname varchar(30) not null,
     email varchar(50),
     dob date,
     postal_address varchar(30) not null,
     Postcode int,
     username varchar(30) not null,
     password varchar(100) not null,
     userr_regdate timestamp default current_timestamp on update current_timestamp
)";

$exe=mysqli_query($db,$query);
if($exe)
{
  // echo"Users Table created";
}else{
  // echo"Users Table not created" . mysqli_error($dbconn);
}

   $query="CREATE TABLE contact (
    conid int NOT NULL,
    name Varchar(16) NOT NULL,
    question Varchar(100) NOT NULL

    ) ";
    $exe=mysqli_query($db,$query);
    if($exe)
    {
       //echo"Table created";
    }else{
       //echo"Table not created" . mysqli_error($conn);
    }

    //news letter table
  $query="CREATE TABLE if not exists newsletter(
   news_id INT(6) unsigned auto_increment primary key,
   name Varchar(30) NOT NULL,
   email varchar(50) not null
)";

$exe=mysqli_query($db,$query);
if($exe)
{
 // echo"Table created";
}else{
  //echo"Table not created" . mysqli_error($conn);
}
header("location:main.php");
?>