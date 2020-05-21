<div class="container mt-5 pt-5">
<?php Message::displayMsg(); ?>  
  <div class="row">
    <div class="col-lg-6 offset-md-3">
      <div class="card">

          <h5 class="card-header bg-primary white-text py-4 pl-5">
            <strong>Admin Sign in</strong>
          </h5>

          <!--Card content-->
          <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

              <!-- Email -->
              <div class="md-form">
                <input type="email" id="materialLoginFormEmail" class="form-control" name="email" required>
                <label for="materialLoginFormEmail">E-mail</label>
              </div>

              <!-- Password -->
              <div class="md-form">
                <input type="password" id="materialLoginFormPassword" class="form-control" name="pass" required> 
                <label for="materialLoginFormPassword">Password</label>
              </div>

              <!-- Sign in button -->
              <button class="btn btn-primary btn-block my-4 waves-effect z-depth-0" type="submit" name="login-submit">Sign in</button>
            </form>
            <!-- Form -->

          </div>

      </div>
    </div>
  </div>
</div>
