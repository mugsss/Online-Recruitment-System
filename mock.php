<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "form9";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

 $answer1 = $_POST['a'];
$answer2 = $_POST['b'];
$answer3 = $_POST['c'];
$answer4 = $_POST['d'];
$answer5 = $_POST['e'];
$totalCorrect = 0;

if ($answer1 == "B") { $totalCorrect+=5; }
if ($answer2 == "B") { $totalCorrect+=5; }
if ($answer3 == "B") { $totalCorrect+=5; }
if ($answer4 == "D") { $totalCorrect+=5; }
if ($answer5=="B") { $totalCorrect+=5; }
//$_SESSION['marks']= $totalCorrect; 
//echo "<div id='results'>$totalCorrect / 5 correct</div>";
if($totalCorrect>=10)
{
echo "</br></br></br></br></br></br></br></br></br></br></br>";
echo"<h1>Holla!!! Your final score is $totalCorrect  out of 25</h1>";
echo"<a href='interview.html'align='center' >Click here to know more</a>";
}
else
{
echo "</br></br></br></br></br></br></br></br></br></br></br>";
echo"<h1>Holla!!! Your final score is  $totalCorrect out of 25</h1>";
echo"<a href='index.php' align='center'>Click here to logout</a>";
}
mysqli_close($conn);  
?>
<html>
<head>
<style>

body {
	background-image:url("/minip/media/ok3.gif");
   
}

h1 {
    color: black;
	font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}

</style>
</head>
<body>
</br></br></br></br></br></br></br></br></br></br></br></br></br>
</body>
</html>

