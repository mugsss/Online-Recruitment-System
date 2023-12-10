<?php
   include('log1.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="home.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="car.html">Career Options</a>
  <div class="login-container">
    <form action="logout.php">
      <button type="submit">Logout</button>

    </form>
  </div>
</div>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:100px">ARIES</h1>
    <h2>Creating Opportunities</h2>
    <h1>Hi, <b><?php echo $_SESSION['login_user']; ?></b>.
	<p>User id: <b><?php echo $_SESSION['login_id']; ?></p></b>.
  </div>
</div>
</br></br></br>
<div class="row">
  <div class="column">
    <div class="card">
	<!--<form method="POST" action="mockbeg.php"-->
      <h3>Freshers</h3>
      <p>Looking for opportunities just after degree?</p>
      <p>Don't worry ! CLICK HERE</p>
      <form action="mockbeg.php"><button class="btn success">Learn More</button>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Experienced</h3>
      <p>Have an experience of just 1/2/yrs?</p>
      <p>Create more experiences</p>
      <button class="btn warning">Learn more</button>
    </div>
</div>
</br></br></br></br></br></br></br></br></br></br></br></br>
<div class="container">
  <img src="/minip/media/4.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>About Us</h1>
    <p>Blah</p>
  </div>
</div>
</body>
</html>
