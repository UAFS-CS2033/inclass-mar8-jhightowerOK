<?php
    require_once 'model/ProfileDAO.php';

    showErrors(1);

    $profileDAO = new ProfileDAO();
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $username = $_POST['username'];
	    $passwd = $_POST['passwd'];
	    $profile = new Profile($firstName,$lastName,$username,$passwd);
      $profileDAO->addProfile($profile);
      header('Location: addProfile.php');
      exit;        
    }

    function showErrors($debug){
        if($debug==1){
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 bg-secondary-subtle" >
      <h3 class="p-3">User Profile</h3>
      <form action="addProfile.php" method="post">

          <div class="form-group p-3">
              <label for="firstName">First Name:</label>
              <input type="text" class="form-control" id="firstName" name="firstName" required>
          </div>

          <div class="form-group p-3">
              <label for="lastName">Last Name:</label>
              <input type="text" class="form-control" id="lastName" name="lastName" required>
          </div>

          <div class="form-group p-3">
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" name="username" required>
          </div>

          <div class="form-group p-3">
              <label for="passwd">Password:</label>
              <input type="password" class="form-control" id="passwd" name="passwd" required>
          </div>
          <div class="form-group p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>