<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet"  href="css/main.css">
    <link rel="shortcut icon" href="IMG/icons8-open-book.gif">

    <title>Home-page</title>
  </head>
  <body>
    <?php include('includes/header.php');?>


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="IMG/1.jpg" height="625px" width="100%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="IMG/2.jpg" height="625px" width="100%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>The only thing you absolutely have to know is the location of the library.</h5>
        <p>-Albert Einstein</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="IMG/3.jpg" height="625px" width="100%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<footer class="page-footer text-lg-start bg-light text-muted bg-dark pt-4">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase">LIBRARY MANAGEMENT SYSTEM</h5>
        <p> A library management system is software that is designed to manage all the functions of a library. It helps librarian to maintain the database of new books and the books that are borrowed by members along with their due dates.</p>

      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">useful Links</h5>
        <ul class="list-unstyled">
          <li>
            <a href="adminlogin.php">ADMIN LOGIN</a>
          </li>
          <li>
            <a href="index.php">USER LOGIN</a>
          </li>
          <li>
            <a href="signup.php">REGISTER</a>
          </li>
        </ul>

      </div>
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Contact</h5>
        <ul class="list-unstyled">
            <li>
            <a class="fhn">Government Engineering College,</a>
          </li>
          <li>
            <a class="fhn">Koni Bilaspur C.G.</a>
          </li>
          <li>
            <a href="mailto:info@example.com">info@example.com</a>
          </li>
          <li>
            <a href="tel:+ 01 234 567 88">01 234 567 88</a>
          </li>
          
        </ul>

      </div>
    </div>
  </div>
 
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="#">Library Management System</a>
  </div>
</footer>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
  </body>
</html>