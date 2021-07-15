<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>LMS</title>
  <link rel="stylesheet" href="css/form.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img class="mr-3" src="logo.png" alt="M" width="55" height="55">
    <a class="navbar-brand" href="index.php">Malviyan's Library</a>
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
          <a class="nav-link active" href="register_choice.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="admin/index.php">Admin login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="logout.php">Logout</a>
        </li>
      </ul>

    </div>
  </nav>
  <marquee><em>This is Library Management System. It opens from 9:15 am to 8:30 pm (Mon-Fri), 9:15 am to 4:30 pm (Saturday &amp; Sunday)</em></marquee>
  </span><br>
  <div class="col-md-6 container" id="main_content">
    <h3>User Login</h3>
    <form action="user_login.php" method="post">

      <div class="form-group">
        <label for="name">Email ID</label>
        <input type="email" name="email" class="form-control" placeholder="xyz@gmail.com" required>
      </div>
      <div class="form-group">
        <label for="name">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <center><button name="login" type="submit" class="btn btn-primary btn-lg ">Login</button></center>
    </form>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>