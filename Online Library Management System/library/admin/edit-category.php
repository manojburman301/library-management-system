<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 

if(isset($_POST['update']))
{
$category=$_POST['category'];
$catid=intval($_GET['catid']);
$sql="update  tblcategory set CategoryName=:category where id=:catid";
$query = $dbh->prepare($sql);
$query->bindParam(':category',$category,PDO::PARAM_STR);
$query->bindParam(':catid',$catid,PDO::PARAM_STR);
$query->execute();
$_SESSION['updatemsg']="Brand updated successfully";
header('location:manage-categories.php');


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
   <title>EDIT CATEGORY</title>
</head>
<body>
 <?php include('includes/header.php');?>



             <h4 class="header-line">EDIT CATEGORY</h4>
             <hr>
<div class="row">
<div class="col-md-12">
<div class="panel panel-info">
<div class="panel-body-ec">
<form role="form" method="post">
<?php 
$catid=intval($_GET['catid']);
$sql="SELECT * from tblcategory where id=:catid";
$query=$dbh->prepare($sql);
$query-> bindParam(':catid',$catid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{               
  ?> 
<div class="form-group">
<label>Category Name</label>
<input class="form-control" type="text" name="category" value="<?php echo htmlentities($result->CategoryName);?>" required />
</div>
<?php }} ?>
<button type="submit" name="update" class="btn btn-info">Update </button>

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
