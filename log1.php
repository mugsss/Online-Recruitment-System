<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "form9";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST['email'];
$psw = $_POST['psw'];
$id='1';
$name='';
$sql = "SELECT * FROM u WHERE email='$email' AND psw='$psw'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {

    while($row = mysqli_fetch_assoc($result)) {

        echo "id: " . $row["email"];
	$id=$row["id"];
	$name=$row["name"];
	$_SESSION['login_user']= $name; 
	$_SESSION['login_id']= $id; 
	header("Location:./login.php");
	exit();

    }
} 
else {
  echo"invalid id or password";
}

mysqli_close($conn);

?>



