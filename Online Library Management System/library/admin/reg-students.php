<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 
    
if(isset($_GET['inid']))
{
$id=$_GET['inid'];
$status=0;
$sql = "update tblstudents set Status=:status  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> execute();
header('location:reg-students.php');
}

if(isset($_GET['id']))
{
$id=$_GET['id'];
$status=1;
$sql = "update tblstudents set Status=:status  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> execute();
header('location:reg-students.php');
}


    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link href="assets/js/dataTables.bootstrap.css" rel="stylesheet" />
     <link rel="stylesheet"  href="css/main.css">
     <link rel="shortcut icon" href="IMG/icons8-open-book.gif">
   <title>REGISTERED STUDENT</title>
</head>
<body>
<?php include('includes/header.php');?>



             <h4 class="header-line">REGISTERED STUDENT</h4>
             <hr>
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Email id </th>
                                            <th>Mobile Number</th>
                                            <th>Reg Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
<?php $sql = "SELECT * from tblstudents";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>                                      
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo htmlentities($cnt);?></td>
                                            <td class="center"><?php echo htmlentities($result->StudentId);?></td>
                                            <td class="center"><?php echo htmlentities($result->FullName);?></td>
                                            <td class="center"><?php echo htmlentities($result->EmailId);?></td>
                                            <td class="center"><?php echo htmlentities($result->MobileNumber);?></td>
                                             <td class="center"><?php echo htmlentities($result->RegDate);?></td>
                                             <td class="center"><?php if($result->Status==1)
                                            {
                                                echo htmlentities("Active");
                                            } else {


                                            echo htmlentities("Blocked");
}
                                            ?></td>
                                            <td class="center">
                                             <?php if($result->Status==1)
                                              {?>
                                             <a href="reg-students.php?inid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Are you sure you want to block this student?');"><button class="btn btn-danger"> Inactive</button>
                                            <?php } else {?>

                                            <a href="reg-students.php?id=<?php echo htmlentities($result->id);?>" onclick="return confirm('Are you sure you want to active this student?');"><button class="btn btn-primary"> Active</button> 
                                            <?php } ?>
                                          
                                            </td>
                                            
                                        </tr>
 <?php $cnt=$cnt+1;}} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>


            
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
           <script src="assets/js/jquery.dataTables.js"></script>
         <script src="assets/js/dataTables.bootstrap.js"></script>
         <script src="assets/js/custom.js"></script>

</body>
</html>
<?php } ?>
