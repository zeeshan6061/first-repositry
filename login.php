<?php
session_start();
if(isset($_SESSION['loginAdmin']) && $_SESSION['loginAdmin'] !=""){

header("location:student.php");
}


?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/library/bootstrap-4.3.1-dist/css/bootstrap.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 39px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body class="bg-dark text-white">
<nav class="navbar navbar-expand-xs bg-dark navbar-dark fixed-top ">
 <a class="navbar-brand" href="login.php">Login</a>
</nav>
<form action="loginverify.php" method="POST">
  <div class="imgcontainer">
  <div class="row">
  <div class="col-md-8">
    <img src="user.png" alt="Avatar" class="avatar">
	</div>
  </div>
</div>
  <div class="container">
  <div class="row">
  <div class="col-md-8">
    <label for="auname"><b>Admin Username</b></label>
    <input type="text" class="form-control" placeholder="Enter Username" name="auname" required>
	
  </div>
  <div class="col-md-8">
    <label for="psw"><b>Password</b></label>
    <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
   </div>
   </div>
   
   <div class="row">
   <div class="col-md-4">
    <button class="btn btn-success form-control" name="addlog" value="Login" type="submit">Login</button>
	</div>
  </div>
  </div>
  



</form>

</body>
</html>
