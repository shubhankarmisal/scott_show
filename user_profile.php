
<?php include("header_1.php"); ?>

<!-- user_profile -->
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">Profile</span><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <label for="nametxt" class="labels">Name</label>
                        <input type="text" id="nametxt" class="form-control"  value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 mb-2">
                        <label for="emailtxt" class="labels">Email_ID</label>
                        <input type="email" id="emailtxt" class="form-control"  value="">
                    </div>
                    <div class="col-md-12">
                        <label for="passwordtxt" class="labels">Password</label>
                        <input type="password" id="passwordtxt" class="form-control"  value="">
                    </div>

                    </div>
                    
                
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Edit Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>

<?php include("footer_1.php"); ?>