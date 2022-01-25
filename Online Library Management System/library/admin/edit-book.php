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
$bookname=$_POST['bookname'];
$category=$_POST['category'];
$author=$_POST['author'];
$isbn=$_POST['isbn'];
$booknum=$_POST['booknum'];
$price=$_POST['price'];
$bookid=intval($_GET['bookid']);
$sql="update  tblbooks set BookName=:bookname,CatId=:category,AuthorName=:author,ISBNNumber=:isbn,BookNumber=:booknum,BookPrice=:price where id=:bookid";
$query = $dbh->prepare($sql);
$query->bindParam(':bookname',$bookname,PDO::PARAM_STR);
$query->bindParam(':category',$category,PDO::PARAM_STR);
$query->bindParam(':author',$author,PDO::PARAM_STR);
$query->bindParam(':isbn',$isbn,PDO::PARAM_STR);
$query->bindParam(':booknum',$booknum,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':bookid',$bookid,PDO::PARAM_STR);
$query->execute();
$_SESSION['msg']="Book info updated successfully";
header('location:manage-books.php');


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
   <title>EDIT BOOK</title>
</head>
<body>
<?php include('includes/header.php');?>



             <h4 class="header-line">EDIT BOOK</h4>
             <hr>
<div class="row">
<div class="col-md-12">
<div class="panel panel-info">
<div class="panel-body-eb">
<form role="form" method="post">
<?php 
$bookid=intval($_GET['bookid']);
$sql = "SELECT tblbooks.BookName,tblcategory.CategoryName,tblcategory.id as cid,tblbooks.AuthorName,tblbooks.ISBNNumber,tblbooks.BookNumber,tblbooks.BookPrice,tblbooks.id as bookid from  tblbooks join tblcategory on tblcategory.id=tblbooks.CatId  where tblbooks.id=:bookid";
$query = $dbh -> prepare($sql);
$query->bindParam(':bookid',$bookid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  

<div class="form-group">
<label>Book Name<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="bookname" value="<?php echo htmlentities($result->BookName);?>" required />
</div>

<div class="form-group">
<label> Category<span style="color:red;">*</span></label>
<select class="form-control" name="category" required="required">
<option value="<?php echo htmlentities($result->cid);?>"> <?php echo htmlentities($catname=$result->CategoryName);?></option>
<?php 
$sql1 = "SELECT * from  tblcategory";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$resultss=$query1->fetchAll(PDO::FETCH_OBJ);
if($query1->rowCount() > 0)
{
foreach($resultss as $row)
{           
if($catname==$row->CategoryName)
{
continue;
}
else
{
    ?>  
<option value="<?php echo htmlentities($row->id);?>"><?php echo htmlentities($row->CategoryName);?></option>
 <?php }}} ?> 
</select>
</div>

<div class="form-group">
<label>Author Name<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="author" value="<?php echo htmlentities($result->AuthorName);?>"  required="required" />

<div class="form-group">
<label>Book Number<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="booknum" value="<?php echo htmlentities($result->BookNumber);?>"  required="required" />

<div class="form-group">
<label>ISBN Number<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="isbn" value="<?php echo htmlentities($result->ISBNNumber);?>"  required="required" />
</div>

 <div class="form-group">
 <label>Price in USD<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="price" value="<?php echo htmlentities($result->BookPrice);?>"   required="required" />
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
