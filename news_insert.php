<?php 



   $hostname="localhost";

   $username="root";

   $password="";

   $db="login1";

   $tb_name="news1";

   $con=mysql_connect($hostname,$username,$password)or die("can not connect");

   $db_connect=mysql_select_db($db) or die ("can not connect database");

   if (isset($_POST['submit'])){

     $category=$_POST['category'];


     $news_title=mysql_real_escape_string($_POST['news_title']);

     $short_description=mysql_real_escape_string($_POST['short_description']);

     $long_description=mysql_real_escape_string($_POST['long_description']);


     $image=$_FILES['image']['name'];

     $image_tmp=$_FILES['image']['tmp_name'];

        
     move_uploaded_file($image_tmp,"images/$image");

     $sql="insert into $tb_name (category,news_title,short_description,long_description,image)
      values ('$category','$news_title','$short_description','$long_description','$image')";

     $result=mysql_query($sql);

     if($result==true)

      header('location:news_detail_maintain.php?inserted=1');
      

    
   }




?> 