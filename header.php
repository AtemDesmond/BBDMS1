<!DOCTYPE html>
<html>
<head>
	<title>User Home page</title>
	<link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/style2.css">
     <link rel="stylesheet" href="css/font-awesome.css">
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="header.php" >Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profile.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="RegForm.php"><i class="fas fa-register fa-sm fa-fw mr-2 text-gray-400"></i>
          Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Setting
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Update profile</a></li>
            <li><a class="dropdown-item" href="#">Delete Account</a></li>
            <li><hr class="dropdown-divider"></li>
             <li><a class="dropdown-item" href="#">Language</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="index.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php include_once "carousel.php" ?>
<?php include_once "Udash.php" ?>
<?php include_once "footer.php" ?>