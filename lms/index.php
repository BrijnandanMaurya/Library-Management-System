<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>LMS</title>
  <style>
    #image {
      filter: blur(8px);
      -webkit-filter: blur(8px);
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img class="mr-3" src="logo.png" alt="M" width="55" height="55">
    <a class="navbar-brand" href="index.php"><strong>Malviyan's Library</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="lib.php">Facilities</a>
        </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link active" href="admin/index.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="user_signin.php">User Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="register_choice.php">Register</a>
        </li>
      </ul>

    </div>
  </nav>
  <span>
    <marquee><em>This is Library Management System. It opens from 9:15 am to 8:30 pm (Mon-Fri), 9:15 am to 4:30 pm (Saturday &amp; Sunday)</em></marquee>
  </span><br>

  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img3.jpg" class="d-block w-100" alt="..." id="image" width="1000px" height="550px">




        <div class="carousel-caption d-none d-md-block">
          <h5 style="color:#66ff33 ; font-family:courier;font-size:200%;"><b>If you have a Garden and a Library,you have everything you need.</b></h5>
          <p style="color:#ffff33; font-family:courier;font-size:200%;"><i>-Marcus Tullius Cicero</i></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img2.jpg" class="d-block w-100" alt="..." id="image" width="1000px" height="550px">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color:#ff00ff ; font-family:courier;font-size:250%;"><b>No furniture so charming as books.</b></h5>
          <p style="color:#00ffff; font-family:courier;font-size:200%;"><i> - Sydney Smith </i></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img1.jpg" class="d-block w-100" alt="..." id="image" width="1000px" height="550px">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color:#66ffff ; font-family:courier;font-size:200%;"><b>Perhaps no place in any community is so totally democratic as the town library. The only entrance requirement is interest.</b></h5>
          <p style="color:#b3b300; font-family:courier;font-size:200%;"><i> - Lady Bird Johnson</i></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>