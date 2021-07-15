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
          <a class="nav-link active" href="admin/index.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="user_signin.php">User Login</a>
        </li>
      </ul>

    </div>
  </nav>
  <span>
    <marquee><em>This is Library Management System. It opens from 9:15 am to 8:30 pm (Mon-Fri), 9:15 am to 4:30 pm (Saturday &amp; Sunday)</em></marquee>
  </span><br>
  <div class=" col-md-6 col-md-offset-3 container">
    <div class="panel panel-primary">
      <div class="panel-heading text-center">
        <h1>Registration Form</h1>
      </div>
      <div class="panel-body">
        <form action="admin_register.php" method="post">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" placeholder="id" name="id" required>
          </div>
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" placeholder="name" name="fullName" required>
          </div>
          <div class="form-group">
            <label for="email">Email ID</label>
            <input type="text" name="email" class="form-control" placeholder="xyz@gmail.com" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="text" name="mobile" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <textarea rows="3" cols="40" class="form-control" name="address"></textarea>
          </div>
          <center><button type="submit" class="btn btn-primary btn-lg ">Register</button></center>
        </form>
      </div>









      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>

</html>