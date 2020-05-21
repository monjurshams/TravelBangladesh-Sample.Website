<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travel Bangladesh</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo ROOT_URL ;?>asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo ROOT_URL ;?>asset/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo ROOT_URL ;?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL;?>asset/css/magnific-popup.css" rel="stylesheet">
</head>

<body>
 
 <!-- navigation -->

 	<!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top">

      <!-- Navbar brand -->
      <div class="container">
        <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Travel Bangladesh</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
  
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo ROOT_URL; ?>touristspots">Tourist Spots</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>about">About</a>
                </li>
                <?php if(isset($_SESSION['is_logged_in'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>touristspots/add">Add Tourist Spots</a>
                </li>
                <?php endif; ?>
               
            </ul>
            <ul class="navbar-nav">
              <?php if(!isset($_SESSION['is_logged_in'])) : ?>
                <li class="nav-item">
                  <a href="<?php echo ROOT_URL; ?>admin/login" class="nav-link">Login</a>
                </li>
              <?php else :?>
              <li class="nav-item">
                  <a href="#" class="nav-link"><?php echo $_SESSION['admin_data']['email'] ;?></a>
              </li>
              <li class="nav-item">
                  <a href="<?php echo ROOT_URL; ?>admin/logout" class="nav-link">Logout</a>
              </li>
              <?php endif; ?>  
            </ul>
          
        </div>
        <!-- Collapsible content -->
      </div>
     

  </nav>
  <!--/.Navbar-->




<?php require_once($view) ;?>




	<!-- Footer -->
<footer class="page-footer font-small indigo mt-4">

<!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Home</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">About</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Gallery</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Tourist Spots</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Contact</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem">This is a travelling website. </p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fa fa-facebook fa-lg white-text mr-md-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fa fa-twitter fa-lg white-text mr-md-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fa fa-google-plus fa-lg white-text mr-md-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fa fa-linkedin fa-lg white-text mr-md-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fa fa-instagram fa-lg white-text mr-md-4"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fa fa-pinterest fa-lg white-text"> </i>
          </a>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="#"> Hypertext Assasins </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  <!-- SCRIPTS -->
  <!-- JQuery -->

  <script src="<?php echo ROOT_URL ;?>asset/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo ROOT_URL ;?>asset/js/popper.min.js"></script>
  <script src="<?php echo ROOT_URL ;?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo ROOT_URL ;?>asset/js/mdb.min.js"></script>
  <script src="<?php echo ROOT_URL ;?>asset/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo ROOT_URL ;?>asset/js/script.js"></script>
</body>

</html>
