  <!--Mask-->

<div id="intro" class="view">
  <div class="mask rgba-black-strong">

    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

        <div class="row d-flex justify-content-center text-center">

            <div class="col-md-10">

                <!-- Heading -->
                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Travel Bangladesh</h2>

                <!-- Divider -->
                <hr class="hr-light">

                <!-- Description -->
                <h4 class="white-text my-4">Welcome To the website for travelling Bagnladesh. Scroll down to start exploring</h4>
                
                <a href="#1"><button type="button" class="btn btn-outline-white">Start exploring<i class="fa fa-book ml-2"></i></button></a>

            </div>

        </div>

    </div>

  </div>
</div>
<!--/.Mask-->


<!-- layout -->

<main>
  <div class="container" id="1">
  <br>
  <br>
  <br>
  <div class="row" >
  <div class="col-md-7">
    <div class="view overlay z-depth-1-half">
          <img src="https://i.pinimg.com/originals/ec/eb/5c/eceb5ca8f6d88aa2c326063af1b38fe0.jpg" class="card-img-top" alt="">
        <div class="mask rgba-white-light"></div>
    </div>
  </div>

    <div class="col-md-5">

    <h2 >Welcome to Beautiful Bangladesh</h2>
    <hr>
    <p>Bangladesh is the land of beauty, country of six seasons and blessed with an outstanding natural views. Its breathtaking beuties can easily make someone fall into love with her. The tourist places here are well worth to visit even for once in the lifetime. The whole country is full of grennery and countless rivers. That's why its also called the land of rivers. So what's the delay?Let's explore!  </p>


  </div>
  </div>
  <br><br>
  <h2>A Historical Journey</h2>
    <hr>
  <div class="row">
    <div class="col-md-12">
      
    
    <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
    <li data-target="#carousel-example-2" data-slide-to="4"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
        <div class="view">
            <img class="d-block w-100" src="<?php echo ROOT_URL; ?>asset/img/overlays/slider1.jpg" class="img-fluid" alt="First slide" style="height: auto; width: 100%">
            <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
            <div class="animated fadeInDown">
                <h2 class="h3-responsive">1952</h2>
                <h3 class="subtext">The Language Movement</h3>
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
            <img class="d-block w-100" src="<?php echo ROOT_URL; ?>asset/img/overlays/mujib-campaign.jpg" alt="Second slide" style="height: auto; width: 100%">
            <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
          <div class="animated fadeInDown">
            <h2 class="h3-responsive">1966</h2>
            <h3 class="subtext">The six point movement</h3>
        </div>
    </div>
    </div>
    <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
            <img class="d-block w-100" src="<?php ROOT_URL; ?>asset/img/overlays/download (2).jpg" alt="Third slide" style="height: auto; width: 100%">
            <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <div class="animated fadeInDown">
            <h2 class="h3-responsive">The Election of 1970</h2>
            <h3 class="subtext">Bangbandhu Sheikh Mujibur Rahman </h3>
        </div>
    </div>
  </div>
    <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
            <img class="d-block w-100" src="<?php ROOT_URL; ?>asset/img/overlays/Bangabandhu-SMR.jpg" alt="Third slide" style="height: auto; width: 100%">
            <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <div class="animated fadeInDown">
            <h2 class="h3-responsive">7th March, 1971</h2>
            <h3 class="subtext">The historical speech at Race Course Ground By Bangbandhu Sheikh Mujibur Rahman</h3>
        </div>
    </div>
  </div>
    <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
            <img class="d-block w-100" src="<?php echo ROOT_URL; ?>asset/img/overlays/dh2edaxc.bmp" alt="Third slide" style="height: auto; width: 100%">
            <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <div class="animated fadeInDown">
            <h2 class="h3-responsive">1971</h2>
            <h3 class="subtext">The Liberation War </h3>
        </div>
    </div>
  </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
  </div>
  </div>
  <br><br>
  <?php if($viewModel) :?>
  <h2>Latest Tourist Spots</h2>
  <hr class="hr-strong-black">
  
  <div class="row">
    <?php foreach($viewModel as $item) : ?>
          <!-- Card -->
  <div class="col-lg-4">
    <div class="card mb-4">
      <!--Card image-->
        <div class="view overlay">
          <img class="card-img-top" src="<?php echo ROOT_URL.'asset/img/spot/'.$item['image'] ;?>" alt="Card image cap">
        </div>

        <!--Card content-->
        <div class="card-body">
        <!--Title-->
            <h4 class="card-title"><?php echo $item['name']; ?></h4>
            <!--Text-->
            <p class="card-text"> <?php echo $item['description'] ;?></p>
        </div>

      </div>
  </div>        
    
    <?php endforeach; ?>
 
    
  </div>

  <?php endif; ?>






</main>