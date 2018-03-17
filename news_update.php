






</html>


<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Newspaper</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  
  </head>

  <body>



    <nav class="navbar navbar-default">
  
    <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>

      <a class="navbar-brand" href="#">Admin</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">

        <li class="active"><a href="logout.php">Logout


          (<?php session_start();


         $name=$_SESSION['name']; echo $name;?>)  


         <span class="sr-only">(current)</span></a></li>
        
        
      </ul>
      
      
    </div>

  </div>

</nav>

<div class="container-fluid">

    <div class="row">


         <div class="col-md-3 sidebar">

           <ul>

             <li><a href="#">Side bar</a></li>
             <li><a href="catagori1.php">Add News Catagori</a></li>
             <li><a href="catagori_maintain.php">Catagori Mantain</a></li>
             <li><a href="news_detail.php">Add News Detail</a></li>
             <li><a href="news_detail_maintain.php">News Details Maintain</a></li>

           </ul>

         </div>

          <div class="col-md-9 form-group news_form">

            <?php 

   $hostname="localhost";

   $username="root";

   $password="";

   $db="login1";

   $tb_name="news1";

   $connect=mysql_connect($hostname,$username,$password) or die ("can not connect");

   $db_connect=mysql_select_db($db) or die ("not connect");


        $id=$_REQUEST['id'];

        $query="select*from $tb_name where id='$id'";

        $result=mysql_query($query);

        while($row=mysql_fetch_array($result)){

            $id=$row['id'];

            $news_title=$row['news_title'];

            $short_description=$row['short_description'];

            $long_description=$row['long_description'];

            $image=$row['image'];



            

     ?>

            <form action="news_update2.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
              <h3>Title</h3>
            <p>
              <input type="text" name="news_title" value="<?php echo $news_title;?>" />
            </p>
            <h3>Short Description</h3>
            <p>
              <textarea type="text" name="short_description"> <?php echo $short_description;?></textarea>
            </p>

            <h3>Long Description</h3>

            <p>
              <textarea type="text" name="long_description"><?php echo $long_description;?></textarea>
            </p>

               <input type="file" name="image"/>

               <img src="images/<?php echo $image;?>"/>


            <p>

               <?php

                 $hostname="localhost";

                 $username="root";

                 $password="";

                 $db="login1";

                 $tb_name2="catagori";

                 $con=mysql_connect($hostname,$username,$password)or die("can not connect");

                 $db_connect=mysql_select_db($db) or die ("can not connect database");

                 $query="select*from $tb_name2";

                 $result=mysql_query($query);

                 ?>

                 <select name="category">

                  <option>Select Category</option>

                  <?php

                  while($row=mysql_fetch_array($result)){

                    $news=$row['news'];


                    ?>

                    <option value="<?php echo $news;?>"><?php echo $news;?></option>


              <?Php     } ?>


                  </select>

                </p>

            <p>
              <input type="submit" name="submit" value="update" />
            </p>


        </form>

        <?php } ?>


         </div>

      </div>

    </div>
     




</div>







    
    <script src="js/jquery-1.12.4.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

  </body>

</html>


