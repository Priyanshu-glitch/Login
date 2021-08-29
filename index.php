<?php
$result = false;
if(isset($_POST['name'])){
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "space";
   $result = false;
   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   if($con){
      // print("Connection Established Successfully");
   }else{
      die("Error" . mysqli_connect_error);
   }
   $name = $_POST['name'];
   $Email = $_POST['email'];
   $age = $_POST['age'];
   if(empty($_POST['name'])){
     $errMsg = "<h3>Error!Name not given</h3>";
     echo $errMsg;
   }
   else{
   $query = "INSERT INTO `space` (`Name`, `Email`, `Age`) VALUES ('$name', '$Email', '$age')";
   if($con ->query($query)){
    $result=true;
   }
   else{
     die('Error <br> con->error');
   }

  $con->close();
  }

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">

    <title>Space Login</title>
  </head>
  <body>
    <img class="bg" src="as.jpg" alt="">
    <!-- Navigation bar -->
    <header>
    <div class="container">
      <h1>Space Fantasy</h1>
      <a class="topnav1" href="#">Subscribe</a>
      <a class="topnav2" href="#">Know More</a>
    </div>
    </header>

    <section class="Section">
      <h1>Login Details</h1>
      <?php
      if($result){
       echo"<h3>Thanks For Submtting details</h3>";
      }
      ?>
      <center>
      <form class="" action="index.php" method="post">
          <input class="login" type="text" name="name" id="name" value="" placeholder="Name">
          <input class="login" type="email" name="email" id="email" placeholder="Email">
          <input class="login" type="text" name="age" id="age" placeholder="Age">

          <input class="btn" type="submit" name="Submit" value="Submit">
        </center>
      </form>
    </section>
  </body>
</html>
<!-- INSERT INTO `space` (`Name`, `Email`, `Age`) VALUES ('Priyanshu', 'this@this.com', '10'); -->
