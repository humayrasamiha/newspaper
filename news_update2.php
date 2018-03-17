<?php

 $hostname="localhost";

 $username="root";
 
 $password="";

 $db="login1";

 $tb_name="news1";

 $connect=mysql_connect($hostname,$username,$password)or die("can not connect");

 $db_connect=mysql_select_db($db)or die("can no connect database");



 $id=$_REQUEST['id'];

 $news_title=$_REQUEST['news_title'];

 $short_description=$_REQUEST['short_description'];

 $long_description=$_REQUEST['long_description'];

 $category=$_REQUEST['category'];

 $image=$_FILES['image']['name'];

$image_tmp=$_FILES['image']['tmp_name'];

	
move_uploaded_file($image_tmp,"images/$image");

 


 $sql="update $tb_name set category='$category',news_title='$news_title',short_description='$short_description',

  long_description='$long_description', image='$image' where id='$id'";

 $result=mysql_query($sql);

 if($result){

	header('location:news_detail_maintain.php');
}