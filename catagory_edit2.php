<?php

 $hostname="localhost";

 $username="root";
 
 $password="";

 $db="login1";

 $tb_name="catagori";

 $connect=mysql_connect($hostname,$username,$password)or die("can not connect");

 $db_connect=mysql_select_db($db)or die("can no connect database");



 $id=$_REQUEST['id'];

 $news=$_REQUEST['news'];

 


 $sql="update $tb_name set news='$news'

  where id='$id'";

 $result=mysql_query($sql);

 if($result){

	header('location:catagori_maintain.php');
}