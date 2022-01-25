<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{ 
if(isset($_POST['change']))
  {
$password=md5($_POST['password']);
$newpassword=md5($_POST['newpassword']);
$email=$_SESSION['login'];
  $sql ="SELECT Password FROM tblstudents WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tblstudents set Password=:newpassword where EmailId=:email";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Your current password is wrong";  
}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <link rel="shortcut icon" href="IMG/icons8-open-book.gif">

     <link rel="stylesheet"  href="css/main.css">
   <title>change password</title>
  <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
</head>
<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>

<body>
 <nav class="navbar fixed-top navbar-expand-lg ">
         <img src="IMG/logo.png" alt="" width="250" height="50"class="d-inline-block align-text-top">
         <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
          </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <div class="navbar-nav mr-auto"></div>
          <a class="nav-link active" aria-current="page" href="dashboard.php"> DASHBOARD</a>
            <a class="nav-link active" href="issued-books.php" id="button"> ISSUED BOOKS</a>
              

             <li class="nav-item dropdown active" style="list-style: none; margin-right: 25px;">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ACCOUNT
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="my-profile.php">My Profile</a>
                  <a class="dropdown-item" href="change-password.php">Change Password</a>
                  <a class="dropdown-item" href="logout.php">logout</a>
             </div>
    
             </li>
    
             

     </div>
     </nav>


             <h4 class="header-line">CHANGE PASSWORD</h4>
             <hr>

 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>            
          
<div class="row">
<div class="col-md-12" >
<div class="panel panel-info">

<div class="panel-body-cp">
<form role="form" method="post" onSubmit="return valid();" name="chngpwd">

<div class="form-group">
<label>Current Password</label>
<input class="form-control" type="password" name="password" autocomplete="off" required  />
</div>

<div class="form-group">
<label>Enter New Password</label>
<input class="form-control" type="password" name="newpassword" autocomplete="off" required  />
</div>

<div class="form-group">
<label>Confirm New Password </label>
<input class="form-control"  type="password" name="confirmpassword" autocomplete="off" required  />
</div>

 <button type="submit" name="change" class="btn btn-info">Chnage </button> 
</form>
 </div>
</div>
</div>
</div>  
<!---LOGIN PABNEL END-->            
             
 
    
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>