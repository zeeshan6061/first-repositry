<?php
session_start();

if(isset($_POST["addlog"]) && $_POST["addlog"] !=""){
	// $_SESSION['loginAdmin']="";
		$uname = $_POST['auname'];
	$pass = md5($_POST['psw']);
	// echo($password);
	// die();
	// $encrpted=md5($password);
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
		$slct="SELECT ad_id,adminname,password FROM `admin` WHERE adminname='$uname'
											AND password='$pass'";
											// print_r($slct);die();
		$result=$conn->query($slct);
		// print_r($result);die();
	if($result->num_rows>0){
		while($row = mysqli_fetch_array($result)){
			$_SESSION['loginAdmin']=$row['ad_id'];
			$_SESSION['studenterror'] = "*";
			$_SESSION['contacterror'] = "*";
			$_SESSION['emailerror'] = "*";
			$_SESSION['teachererror'] = "*";
			$_SESSION['tContacterror'] = "*";
			$_SESSION['tEmailerror'] = "*";
			$_SESSION['departmenterror'] = "*";
			$_SESSION['courseerror'] = "*";
// print_r($_SESSION);die();
		    header("location: student.php");
		}
	}else{
					echo"Incorrect password";
			   header("refresh:2; url=login.php");
	}


	}
}

?>