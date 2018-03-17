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

             <li><a href="#">Sidebar</a></li>
             <li><a href="catagori1.php">Add News Category</a></li>
             <li><a href="catagori_maintain.php">Category Maintain</a></li>
             <li><a href="news_detail.php">Add News Detail</a></li>
             <li><a href="news_detail_maintain.php">News Details Maintain</a></li>

           </ul>

         </div>

          <div class="col-md-9 form-group news_form">

            <form action="news_insert.php" method="post"  enctype="multipart/form-data">

               <p>News title </p>

                <input type="text" class="form-group news" name="news_title" />

             
                
              <p>Short Description </p>

               <textarea type="text" class="form-group news_1" name="short_description">

               </textarea>

             

              <p>Long description </p>

               <textarea type="text" class="form-group news_1" name="long_description">

               </textarea>

               <p>

                 <input type="file" class="browser" name="image"/>

               </p>




               <?php

                 $hostname="localhost";

                 $username="root";

                 $password="";

                 $db="login1";

                 $tb_name="catagori";

                 $con=mysql_connect($hostname,$username,$password)or die("can not connect");

                 $db_connect=mysql_select_db($db) or die ("can not connect database");

                 $query="select*from $tb_name";

                 $result=mysql_query($query);

                 ?>

                 <p><select class="select" name="category">

                  <option class="select">Select Category</option>

                  <?php

                  while($row=mysql_fetch_array($result)){

                    $news=$row['news'];


                    ?>

                    <option value="<?php echo $news;?>"><?php echo $news;?></option>


              <?Php     } ?>


                  </select></p>


               <p>

                  <input type="submit" class="btn_1 btn-default" name="submit" value="submit">


               </p>


   
            </form>


         </div>

      </div>

    </div>
     




</div>







    
    <script src="js/jquery-1.12.4.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

  </body>

</html>