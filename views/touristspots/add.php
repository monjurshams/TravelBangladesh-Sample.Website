<div class="container mt-5 pt-5">
<?php Message::displayMsg(); ?>  
  <div class="row">
    <div class="col-lg-8 offset-lg-2">
      <div class="card">
          <h5 class="card-header bg-primary white-text py-4 pl-5">
            <strong>Add Tourist Spot</strong>
          </h5>
          <!--Card content-->
          <div class="card-body px-lg-5 pt-0">
            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
              <div class="md-form">
                <div class="file-field">
                    <input type="file" name="image" class="form-control" required>
                </div>
              </div>
             

              <!-- Email -->
              <div class="md-form">
                <input type="text" id="touristName" class="form-control" name="name" required>
                <label for="touristName">Tourist Spot Name</label>
              </div>

              
              <div class="md-form">
                <textarea id="form7" class="md-textarea form-control" rows="3" name="description"></textarea>
                <label for="form7">Description</label>
              </div>

              <!-- Sign in button -->
              <button class="btn btn-primary my-4 waves-effect z-depth-0" type="submit" name="add-submit">Add</button>
            </form>
            <!-- Form -->

          </div>

      </div>
    </div>
  </div>
</div>
