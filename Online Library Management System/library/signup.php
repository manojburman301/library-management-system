<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['signup']))
{
$StudentId=$_POST['studentid'];   
$fname=$_POST['fullname'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email']; 
$password=md5($_POST['password']); 
$status=1;
$sql="INSERT INTO  tblstudents(StudentId,FullName,MobileNumber,EmailId,Password,Status) VALUES(:StudentId,:fname,:mobileno,:email,:password,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':StudentId',$StudentId,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo '<script>alert("Your Registration successfull and your student id is  "+"'.$StudentId.'")</script>';
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
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
     <title>sign-page</title>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>
<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>    

</head>
<body>

<?php include('includes/header.php');?>


    
<div class="reg">
         <div class="reg-content">
            <form name="signup" method="post" onSubmit="return valid();">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input class="form-control" type="text" placeholder="FullName" name="fullname" autocomplete="off" required />
            </div><br>
            <div class="input-group">
                <input class="form-control" type="text" placeholder="EnrollmentNumber" name="studentid" autocomplete="off" required />
            </div><br>
            <div class="input-group">
               <input class="form-control" type="text" placeholder="MobileNumber" name="mobileno" maxlength="10" autocomplete="off" required />
            </div><br>
            <div class="input-group">
                <input class="form-control" type="email" placeholder="EmailId" name="email" id="emailid" onBlur="checkAvailability()"  autocomplete="off" required  />
               
            </div><br>
            <div class="input-group">
                <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="off" required  />
            </div><br>
             <div class="input-group">
               <input class="form-control"  type="password" placeholder="confirmpassword" name="confirmpassword" autocomplete="off" required  />
            </div><br>
            <div class="input-group">
                <button type="submit" name="signup" class="btn btn-danger" id="submit">Register</button>
            </div>
            <p class="login-register-text" style="font-weight:600;">Have an account? <a href="index.php">Login Here</a></p>
        </form>
          <span id="user-availability-status" style="font-size:20px;"></span>

        </div>
    </div>

     <script src="assets/js/jquery-1.10.2.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>
