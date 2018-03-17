<!doctype html>

<html>
	
	<head>

		<title>practices</title>

    <link href="css/style.css" rel="stylesheet">

	</head>

	<body>

<?php 

   $hostname="localhost";

   $username="root";

   $password="";

   $db="login1";

   $tb_name="catagori";

   $connect=mysql_connect($hostname,$username,$password) or die ("can not connect");

   $db_connect=mysql_select_db($db) or die ("not connect");


        $id=$_REQUEST['id'];

        $query="select*from $tb_name where id='$id'";

        $result=mysql_query($query);

        while($row=mysql_fetch_array($result)){

            $id=$row['id'];

            $news=$row['news'];

            

     ?>

            <form action="catagory_edit2.php?id=<?php echo $id;?>" method="post">

            <p>
            	<input type="text" name="news" value="<?php echo $news;?>" />
            </p>

            

            <p>
            	<input type="submit" name="submit" value="update" />
            </p>


        </form>

        <?php } ?>

	</body>







</html>


