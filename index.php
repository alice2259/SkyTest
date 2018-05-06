<!doctype html>
<?php session_start(); ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="SkyTestStyles.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">

    <title>Sky | Moodslider</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-sm navbar-light">
          <div class="container">
          <a class="navbar-brand" href="#"><img src="images/sky-logo.jpg" alt="Sky logo" style="width: 80px;"/></a>
              <!-- Toggler/collapsibe Button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">Moodslider</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="upload.php">Upload</a>
                  </li>
              </ul>
          </div>
          </div>
        </nav>

        <section class="container-fluid">
            <div class="container" style="text-align: center;">
              <h1>Moodslider</h1>
              <h3>Not sure what to watch?</h3>
              <p>Move the sliders to reflect your mood and we'll suggest the perfect programme.</p>
            </div>
        </section>

        <section class="container-fluid ">
            <div class="container" style="text-align: center;">

                <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
                    <div class="col-sm-2">
                        <h4 style="text-align: left;">Happy</h4>
                    </div>

                    <div class="col-sm-8">
                        <div class="slidecontainer">
                            <input type="range" min="1" max="5" value="3" class="slider" id="happy">
                          <p><span id="happyValue">Move the slider to describe your mood</span></p>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <h4 style="text-align: right;">Sad</h4>
                    </div>
                </div>


                <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
                    <div class="col-sm-2">
                        <h4 style="text-align: left;">Calm</h4>
                    </div>
                    <div class="col-sm-8">
                        <div class="slidecontainer">
                          <input type="range" min="1" max="5" value="3" class="slider" id="calm">
                          <p><span id="calmValue">Move the slider to describe your mood</span></p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <h4 style="text-align: right;">Stressed</h4>
                    </div>
                </div>

                <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
                    <div class="col-sm-2">
                        <h4 style="text-align: left;">Tired</h4>
                    </div>
                    <div class="col-sm-8">
                        <div class="slidecontainer">
                          <input type="range" min="1" max="5" value="3" class="slider" id="tired">
                          <p><span id="tiredValue">Move the slider to describe your mood</span></p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <h4 style="text-align: right;">Wide awake</h4>
                    </div>
                </div>

                <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
                    <div class="col-sm-2">
                        <h4 style="text-align: left;">Brave</h4>
                    </div>
                    <div class="col-sm-8">
                        <div class="slidecontainer">
                          <input type="range" min="1" max="5" value="3" class="slider" id="brave">
                          <p><span id="braveValue">Move the slider to describe your mood</span></p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <h4 style="text-align: right;">Scared</h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid slider-section">
            <div class="container" style="text-align: center;">
                <div style="padding-bottom: 20px;">
                <h1>Watch right now</h1>
                <h3>Based on your mood</h3>
                </div>                
                <div class="row">
                    <div class="col-sm-2 offset-1">
                        <div style="box-shadow: 0px 0px 10px lightgrey; background-color: #ffffff;">
                            <div style="padding:5px;">
                                <img id="image1" src="images/no-image.png" style="max-width: 100%; margin-bottom: 10px;">
                                <h5 id="title1">No content</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div style="box-shadow: 0px 0px 10px lightgrey; background-color: #ffffff;">
                            <div style="padding:5px;">
                                <img id="image2" src="images/no-image.png" style="max-width: 100%; margin-bottom: 10px;">
                            <h5 id="title2">No content</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div style="box-shadow: 0px 0px 10px lightgrey; background-color: #ffffff;">
                            <div style="padding:5px;">
                                <img id="image3" src="images/no-image.png" style="max-width: 100%; margin-bottom: 10px;">
                                <h5 id="title3">No content</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div style="box-shadow: 0px 0px 10px lightgrey; background-color: #ffffff;">
                            <div style="padding:5px;">
                                <img id="image4" src="images/no-image.png" style="max-width: 100%; margin-bottom: 10px;">
                                <h5 id="title4">No content</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div style="box-shadow: 0px 0px 10px lightgrey; background-color: #ffffff;">
                            <div style="padding:5px;">
                                <img id="image5" src="images/no-image.png" style="max-width: 100%; margin-bottom: 10px;">
                                <h5 id="title5">No content</h5>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
      <footer class="page-footer container-fluid">
          <p>&copy; Sky Moodslider 2018</p>
      </footer>
          
      

    <!--Project JavaScript-->      
    <script src="scripts.js"></script>
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    
  </body>
</html>