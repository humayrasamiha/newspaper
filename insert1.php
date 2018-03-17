<?php 

session_start();

   $hostname="localhost";

   $username="root";

   $password="";

   $db="login1";

   $tb_name="catagori";

   $con=mysql_connect($hostname,$username,$password)or die("can not connect");

   $db_connect=mysql_select_db($db) or die ("can not connect database");

   if (isset($_POST['submit'])){

     $news=$_POST['news'];

     $sql="insert into $tb_name (news) values ('$news')";

     $result=mysql_query($sql);

     if($result==true)

      header('location:catagori1.php');

    
   }




?> 