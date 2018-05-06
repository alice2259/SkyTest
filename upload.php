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
    <link href="https://fonts.googleapis.com/css?family=Lato:300|Cutive+Mono" rel="stylesheet">

    <title>Upload</title>
  </head>
  <body>
      <?php include 'functions.php'; ?>
        <nav class="navbar navbar-expand-sm navbar-light">
          <div class="container">
          <a class="navbar-brand" href="https://www.sky.com/"><img src="images/sky-logo.jpg" alt="Sky logo" style="width: 80px;"/></a>
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
                <h1>Upload programme information</h1>
                <div class="row" style="margin: 20px;">
                <div class="col-sm-3"></div>
                <div class="col-sm-6" style="padding: 20px; background-color: #F1F1F3">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div style="padding-bottom: 20px;">
                        <h4>Select the file you would like to upload</h4>
                        <p>Make sure it's an XML file</p>
                    </div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
                    <input type="file" name="uploadedFile" id="uploadedFile">
                    <input type="submit" value="Upload File" name="upload" id="uploadButton" onclick="return confirm('Uploading a new file will overwrite any exisitng programme data, are you sure?');"><br/>
                            <?php
                            if (isset($_POST["upload"])) {
                                uploadFile();
                            }   ?>
                    <div style="margin: 10px; margin-top: 20px; padding:10px; background-color: #ffffff;">
                            <p>The format of your file should be as follows:</p>
                            <p style="text-align: left; font-family: 'Cutive Mono', monospace;">&lt;programmes&gt;<br/>
                            &emsp;&lt;programme mood="mood"&gt;<br/>
                            &emsp;&emsp;&lt;title&gt;Programme Title&lt;/title&gt;<br/>
                            &emsp;&emsp;&lt;image&gt;imagepath.jpg&lt;/image&gt;<br/>
                            &emsp;&lt;/programme&gt;<br/>
                            &emsp;&lt;programme mood="mood"&gt;<br/>
                            &emsp;&emsp;&lt;title&gt;Programme Title&lt;/title&gt;<br/>
                            &emsp;&emsp;&lt;image&gt;imagepath.jpg&lt;/image&gt;<br/>
                            &emsp;&lt;/programme&gt;<br/>
                            &lt;/programmes&gt;<br/>
                            
                        </p>
                    </div>
                </form>
                </div>
                <div class="col-sm-3"></div>
                </div>
            </div>
        </section>
      
      <footer class="page-footer container-fluid">
          <div class="container">
          <p>&copy; Sky Moodslider 2018</p>
          </div>
      </footer>
    
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    </body>
</html>
