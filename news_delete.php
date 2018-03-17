<?php 

   $hostname="localhost";

   $username="root";

   $password="";

   $db="login1";

   $tb_name="news1";

   $connect=mysql_connect($hostname,$username,$password) or die ("can not connect");

   $db_connect=mysql_select_db($db) or die ("not connect");

   $id=$_REQUEST['id'];

   $sql="delete from $tb_name where id='$id'";

   $result=mysql_query($sql);

   if($result){

   	  header('location:news_detail_maintain.php');
   }

  ?>

