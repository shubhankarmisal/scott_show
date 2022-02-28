<?php include("header_nav.php"); ?>

<?php include("sidenav.php"); ?>

 <!-- admin_sign_up -->

      <!-- <div class="container-fluid" style="margin-top:10px">
            <div class="" style="margin-top:70px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Create Account</h3>
                        </div>
                        <div class="p-4">
                            <form action="engine.php" method="post">
                                <input type="hidden" name="mode" value="admin_sign_up">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" name="sign_up_name" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-envelope text-white"></i></span>
                                    <input type="email" name="sign_up_email" class="form-control" placeholder="Email">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" name="sign_up_passwd" class="form-control" placeholder="password">
                                </div>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" type="submit"><span></span> Sign up</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>  -->

    <section class="login-section ">
        <div class="container ">
            <div class="row justify-content-center align-items-center" style="height: 80vh;">
                <div class="col-4  py-2">
                    <h3 class="text-dark text-center mb-4">Add Account</h3>
                    <div class="card ">
                        <div class="card-body ">

                        <form action="engine.php" method="post">
                                <input type="hidden" name="mode" value="admin_sign_up">

                                <div class="mb-3">
                                    <label for="sign_up_name" class="form-label"> Name </label>
                                    <input type="text" name="sign_up_name" class="form-control" id="sign_up_name">
                                </div>

                                <div class="mb-3">
                                    <label for="sign_up_email" class="form-label">Email address</label>
                                    <input type="text" name="sign_up_email" class="form-control" id="sign_up_email">
                                </div>
                                <div class="mb-3">
                                    <label for="sign_up_passwd" class="form-label">Password</label>
                                    <input type="password" name="sign_up_passwd" class="form-control" id="sign_up_passwd">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100 text-uppercase">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>


            </div>
    </section>

 


<?php include("footer_nav.php"); ?>






