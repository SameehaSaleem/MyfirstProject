<?php
session_start();

include 'DatabaseConnection.php';


$formUserName=$_POST['userName'];
$formPassword=$_POST['inputPassword'];

$query="SELECT *  FROM member where username =? AND password =?" ;
$STH=$DBH->prepare($query);
$STH->bindParam(1,$formUserName);
$STH->bindParam(2,$formPassword);
$STH->execute();
$result = $STH->fetchAll();
$count=$STH->rowCount();

if($formUserName==""|| $formPassword=="" ){
  echo"Enter user name or password" ; 
}

elseif($count<=0)
{
  echo "Invalied user " ; 
}
else{
   echo"Welcome " ;
   header("location: home.php"); 
   $_SESSION['id']=$userid;
   
}