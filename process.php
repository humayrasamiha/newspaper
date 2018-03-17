<?php 

   session_start();

   $hostname="localhost";

   $username="root";

   $password="";

   $db="login";

   $tb_name="user";

   $con=mysql_connect($hostname,$username,$password)or die("can not connect");

   $db_connect=mysql_select_db($db) or die ("can not connect database");

   if (isset($_POST['submit'])){

     $user=$_POST['user'];

     $pass=$_POST['pass'];



     $sql="select*from $tb_name where username='$user' and password='$pass'";

     $result=mysql_query($sql);

     $count=mysql_num_rows($result);

     if($count==true){

      $row=mysql_fetch_array($result);

      $_SESSION['name']=$row['username'];

     	header('location:admin.php');
     }

    
   
    else{

     	header('location:login.php');
     }


   }




?> 