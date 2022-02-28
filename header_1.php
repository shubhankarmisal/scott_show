<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us page</title>
  <link rel="stylesheet" type="text/css" href="assets/css/as-alert-message.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/contact_us.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="./assets/css/user_profile.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  
</head>

<body>
  <header id="site-header" class="w3l-header fixed-top">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
      <div class="container">
        <h1><a class="navbar-brand" href="index.php"><span class="fa fa-play icon-log" aria-hidden="true"></span>
          ScottShow </a></h1>
        <!-- if logo is image enable this   
                    <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <span class="fa icon-expand fa-bars"></span>
          <span class="fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="movies.php">Movies</a>
            </li>
            

            <li class="nav-item active">
              <a class="nav-link" href="Contact_Us.php">Contact</a>
            </li>
            
          </ul>

          <!--/search-right-->
          <!--/search-right-->

          <div class="Login_SignUp" id="login" style="font-size: 2rem ; display: inline-block; position: relative;">
            <!-- <li class="nav-item"> -->
            <a class="nav-link" href="sign_in.php"><i class="fa fa-user-circle-o"></i></a>
            <!-- </li> -->
          </div>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
      </div>
    </nav>
  </header>