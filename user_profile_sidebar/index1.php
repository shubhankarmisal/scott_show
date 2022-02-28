

<?php include("./header_user.php"); ?>

<?php include("./userprofile_sidebar.php") ?>
<main>
  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center">


        <div class="col-md-5 border-right-left">
          <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Profile Settings</h4>
              </div>
              <div class="row mt-2">
          <div class="col-md-12 mb-2">

              <label for="nametxt" >Name</label>
              <input type="text" id="nametxt" class="form-control"  value="">
                   
          </div>
          <div class="col-md-12 mb-2">
              <label for="passwordtxt" >Password</label>
              <input type="password" id="passwordtxt" class="form-control"  value="">
          </div>

          <div class="col-md-12">
              <div class="mt-5 text-center">

                <a href="./user_setting.php" class="nav_link">
                  <button class="btn btn-success" type="button">Edit Profile</button>
                </a>

              </div>
          </div>

          </div>

      </div>


        


      </div>
    </div>
  </div>  
</main>


<?php include("./footer_user.php"); ?>


