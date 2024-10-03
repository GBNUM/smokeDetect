
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'sample';

$connect = mysqli_connect($host, $user, $password, $database);

if($_SERVER['REQUEST_METHOD'] == 'GET'){
  $puser = $_POST['username'];
  $ppass = $_POST['password'];
  $sqlname = "Select * form registration where username = '$puser'";
  $result = mysqli_query($connect, $sqlname);

  echo "$result";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
    <style>
  
   
    </style>
</head>
<body class="">
   <div class="container d-flex body">
  <div class="container cont1">
  <h1>Facebook</h1>
  <h5>Recent log ins</h1>
  <p>Click to log in your account</h3>
  <div class="d-flex img-cont container">
    <img src="img/op2.jpg " class="w-25">
    <img src="img/opfr.jpg" class="w-25">
    <div class="w-25 add d-flex">
      <span><p>+</p></span>
      <p class="addp">Add account</p>
    </div>
  </div>
  </div>
 <div class="container formcont" >
   <div class="container row w-75 mx-auto  form ">
    <form method="get">
      <div class=" ">
        <label for="email">Email</label>
        <input type="text" placeholder="email"  name="username" class="form-control">
      </div>
      <div>
        <label for="email">Password</label>
        <input type="text"  name="password" placeholder="password" class="form-control ">
      </div>
      <button class="btn btn-primary mt-3 w-100 p-2" >Login</button>
      <a ><p class="forgot link-primary">Forgot password</p></a>
<div class="d-flex justify-content-center">
      <button class="btn create">Create new Account</button>
      </div>

    </form>
   </div>
  </div>

   </div>
    
</body>
</html> 