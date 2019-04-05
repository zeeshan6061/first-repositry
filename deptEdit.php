<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="studentdb";
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		$department_id = $_GET['dept_id'];
		$slct="SELECT * From department Where dept_id='$department_id' ;";
		
		
	$result=$conn->query($slct);
if($result->num_rows>0){
	
	echo "";
}else{
echo"0 result";
}

	}
	
	
	if(isset($_POST['update']) && $_POST['update']!=""){
		//print_r($_POST);
		$dept_id=$_POST['dept_id'];
		$deptname=$_POST['dname'];
		$update="UPDATE department SET name='$deptname'
									Where dept_id='$dept_id';";
									
									
		
		$res=$conn->query($update);
		if($res){
	
		 header("Location: departments.php"); 
		}else{
		echo"0 res";
		}
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>DepartmentSysytem</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/library/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	th, td {
  padding: 10px;
}
	.button2:hover {
  box-shadow: 0 12px 13px 0 rgba(0,0,0,0.24),0 1px 3px 0 rgba(0,0,0,0.19);
}


  </style>
</head>
<body class="bg-dark text-white">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top ">
  <a class="navbar-brand" href="student.php">Home</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link " href="student.php">Student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="teacher.php">Teachers</a>
    </li> 
	<li class="nav-item">
      <a class="nav-link active" href="departments.php">Department</a>
    </li>
		<li class="nav-item">
      <a class="nav-link" href="course.php">Course</a>
    </li>
  </ul>
</nav>

<div class="jumbotron  bg-light text-dark">
  <div class="container text-center">
<br>    <h1>Department</h1> 

  </div>
</div>
<div class="container">
<form action="deptEdit.php?dept_id=<?php echo $_GET['dept_id']; ?>" method="POST" >
<h2>Edit Department Information</h2>
<div class="row">
	<?php
	
	
		while($row = mysqli_fetch_array($result)){
	?>
	<input type="hidden" name="dept_id" value ="<?php echo $row['dept_id']; ?>" required>
<div class="col-md-8">
		<label>Department Name:</label>
		<input type="text" class="form-control" name="dname" value ="<?php echo $row['name']; ?>" required>
	</div>
	</div>
<div class="row">
	<div class="col-md-4">
	<br>
		<button type="submit" class="btn btn-success button2 " name="update" value="Submit"><i class="fa fa-user" aria-hidden="true"></i>Update</button>
	<br><br>
	</div>
</div>
		
		<?php } ?> 

		
		</form>
		
</div>


</body>
</html>