<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/bootstrap.js">
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form1">
  <form>
   <h2 id="lf">LOGIN FORM</h2>
  
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputUserName" class="col-form-label">User Name</label>
  </div>
  <div class="col-auto">
    <input type="Uname" id="UName" class="form-control" aria-describedby="nameHelpInline" placeholder="Enter Your User Name">
  </div>
</div>


  <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" id="password" class="form-control" aria-describedby="passwordHelpInline" placeholder="Must be 8-20 AlphaNumeric long.">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
    </span>
  </div>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <p  class="small fw-bold mt-2 pt-1 mb-0">Dont have an account?<a href="RegForm.php" class="link-primary">Register</a></p>
</div>
</form>  
</body>
</html>