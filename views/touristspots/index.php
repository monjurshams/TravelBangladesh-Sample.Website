<div class="container mt-5 pt-5">
<?php Message::displayMsg(); ?>  
<h2>Toursist Spots</h2>
  <hr>
<?php if($viewModel) :?>
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
            <?php if(isset($_SESSION['is_logged_in'] )) :?>
            <a href="<?php echo ROOT_URL; ?>/touristspots/delete/<?php echo $item['id'] ;?>" class="btn btn-danger">Delete</a>
              
            <?php endif; ?>
        </div>

    </div>
    </div>
   
      
    
    <?php endforeach; ?>

    
  </div>
<?php else: ?>
  <h5 class="text-center">No Spots Added Yet</h5>
<?php endif; ?>
</div>

