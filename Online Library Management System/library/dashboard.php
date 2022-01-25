<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
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
   <title>dashborad</title>
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


             <h4 class="header-line">DASHBOARD</h4>
             <hr>


             <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <img src="IMG/menu-4-512.png" width="65" height="65">
<?php 
$sid=$_SESSION['stdid'];
$sql1 ="SELECT id from tblissuedbookdetails where StudentID=:sid and RetrunStatus is null";
$query1 = $dbh -> prepare($sql1);
$query1->bindParam(':sid',$sid,PDO::PARAM_STR);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$issuedbooks=$query1->rowCount();
?>

                            <h3><?php echo htmlentities($issuedbooks);?> </h3>
                            Book Issued
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <img src="IMG/text-file-4-512.png" width="65" height="65">
<?php 
$sql ="SELECT id from tblbooks ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$listdbooks=$query->rowCount();
?>


                            <h3><?php echo htmlentities($listdbooks);?></h3>
                      Books 
                        </div>
                    </div>
             
               <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-warning back-widget-set text-center">
                            <img src="IMG/document-512.png" width="65" height="65">
<?php 
$sql5 ="SELECT id from tblcategory ";
$query5 = $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$listdcats=$query5->rowCount();
?>

                            <h3><?php echo htmlentities($listdcats);?> </h3>
                           Listed Categories
                        </div>
                    </div>
        </div>

         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
            
    
</body>
</html>

