<?php
$email="";
$psw="";
$db = mysqli_connect('localhost', 'root', '123456', 'form9');
session_start();
if ($db->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	if(isset($_POST['register'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		
		$no = $_POST['no'];
		$quali = $_POST['quali'];
		$gender = $_POST['gender'];
		$psw = $_POST['psw'];
		$exp = $_POST['exp'];
	$sql = "INSERT INTO u (name,psw,email,no,gender,quali,exp)
					VALUES ('$name','$psw','$email','$no','$gender','$quali','$exp')";
			mysqli_query($db, $sql);
			echo "Data inserted where username is ". $email ;
			$_SESSION['name']= $name; 

}
header("Location:./login.php");
mysqli_close($db);
 ?>
