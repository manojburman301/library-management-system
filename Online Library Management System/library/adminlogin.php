<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{

$username=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:username and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location ='admin/dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <link rel="stylesheet"  href="css/main.css">
     <link rel="shortcut icon" href="IMG/icons8-open-book.gif">

     <title>AdminLogin-page</title>
 </head>
  <body>
    <?php include('includes/header.php');?>

     
     

     <div  class="login">
         <div class="login-content">
             <img src="IMG/person-circle.svg" alt="#"  width="50" height="50" >

             <form action="" method="post" class="login-email">
             <p class="login-text" style="font-size: 1.5rem; font-weight: 600;">ADMIN LOGIN</p>
                 <div class="input-group">
                 <input class="form-control" type="text" placeholder="Username" name="username" autocomplete="off" required />
                 </div><br>
                 <div class="input-group">
                 <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="off" required />
                 </div><br>
                 <div class="input-group">
                 <button type="submit" name="login" class="btn btn-info">LOGIN </button>
                </div>
             </form>
        </div>
    </div>
      
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
  </body>
</html>