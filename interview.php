<?php
$email="";
$psw="";
$db = mysqli_connect('localhost', 'root', '123456', 'form9');
if ($db->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	if(isset($_POST['submit'])) {
		$loc = $_POST['loc'];
		$dat = $_POST['dat'];
		$id = $_POST['id'];
		//$psw = $_POST['psw'];
	$sql = "INSERT INTO interview (loc,dat,id)
					VALUES ('$loc','$dat','$id')";
			mysqli_query($db, $sql);
			//echo "Data inserted where username is ". $dat ;

}
//header("Location:./login.php");
mysqli_close($conn);  	//exit();
?>
<html>
<head>
<style>
body {
	background-image:url("/minip/media/ok2.gif");
   
}

h1 {
    color: yellow;
	font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}
</style>
</head>
<body>
</br></br></br></br></br></br></br></br></br></br></br></br></br></</br></br><br></br></br></br></br>
<h1>Holla!!Your interview date is <?php echo $dat ?> </h1>
<!--<a href="interview.html" align="center">Click here to know more</a>-->
</body>
</html>

