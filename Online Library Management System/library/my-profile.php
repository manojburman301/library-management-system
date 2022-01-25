<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{ 
if(isset($_POST['update']))
{    
$sid=$_SESSION['stdid'];  
$fname=$_POST['fullanme'];
$mobileno=$_POST['mobileno'];

$sql="update tblstudents set FullName=:fname,MobileNumber=:mobileno where StudentId=:sid";
$query = $dbh->prepare($sql);
$query->bindParam(':sid',$sid,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Your profile has been updated")</script>';
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
   <title>My Profile</title>
</head>
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


             <h4 class="header-line">MY PROFILE</h4>
             <hr>


        </div>
             <div class="row">
           
<div class="col-md-12">
               <div class="panel panel-danger">
                        
                        <div class="panel-body-mp">
                            <form name="signup" method="post">
<?php 
$sid=$_SESSION['stdid'];
$sql="SELECT StudentId,FullName,EmailId,MobileNumber,RegDate,UpdationDate,Status from  tblstudents  where StudentId=:sid ";
$query = $dbh -> prepare($sql);
$query-> bindParam(':sid', $sid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  

<div class="form-group">
<label>Student ID : </label>
<?php echo htmlentities($result->StudentId);?>
</div>

<div class="form-group">
<label>Reg Date : </label>
<?php echo htmlentities($result->RegDate);?>
</div>
<?php if($result->UpdationDate!=""){?>
<div class="form-group">
<label>Last Updation Date : </label>
<?php echo htmlentities($result->UpdationDate);?>
</div>
<?php } ?>


<div class="form-group">
<label>Profile Status : </label>
<?php if($result->Status==1){?>
<span style="color:green">Active</span>
<?php } else { ?>
<span style="color: red">Blocked</span>
<?php }?>
</div>


<div class="form-group">
<label>Enter Full Name</label>
<input class="form-control" type="text" name="fullanme" value="<?php echo htmlentities($result->FullName);?>" autocomplete="off" required />
</div>


<div class="form-group">
<label>Mobile Number :</label>
<input class="form-control" type="text" name="mobileno" maxlength="10" value="<?php echo htmlentities($result->MobileNumber);?>" autocomplete="off" required />
</div>
                                        
<div class="form-group">
<label>Enter Email</label>
<input class="form-control" type="email" name="email" id="emailid" value="<?php echo htmlentities($result->EmailId);?>"  autocomplete="off" required readonly />
</div>
<?php }} ?>
                              
<button type="submit" name="update" class="btn btn-primary" id="submit">Update Now </button>

                                    </form>
                            </div>
                        </div>
                    </div>
        </div>
    
    
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>
