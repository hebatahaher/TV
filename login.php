<html>
<head>
<meta charset ="UTF-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.js">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="stylee.css" type="text/css">

<title> register page </title>
</head>
<body>
<?php
session_start();
include("connect.php");

?>
<?php 
if(isset($_POST['login'])){
	$user=$_POST['name'];
	$pass=$_POST['password'];
	$query="SELECT * FROM users WHERE name='$user' && pass='$pass'";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total==1){
		header('location:connlogin.php');
	}else {
		die("loggin failed");
	}
}
	

?>

<nav class="navbar">


<div class="brand-title" >Roya TV </div>
<a href="#" class="toggle-button">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</a>
<div class="navbar-links">
<ul>
<li class="nav-item active">
        <a class="nav-link active" href="home page.php">Home <span class="sr-only">(current)</span></a>
      </li>
<li><a  href="TVshows.php" > TV Shows</a></li>



</ul>

</div>
<nav >
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button style="background-color:gray;"class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  
</nav>
</nav>

<form style="background-color:#0077b3;margin-bottom:300px;margin-right:300px;margin-left:300px;padding:50x;"class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
<div class="body-content">
  <div class="module">
  <header style="border:2px;border-color:black;">
    <h1 class="text-center">login </h1>
	</header>
    <form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
  <div class="input-group">
	<span class="input-group-addon"><span class="glyphicon glyphicon-user"> </span></span>
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
    <div class="input-group">
	<span class="input-group-addon"><span class="glyphicon glyphicon-user"> </span></span>
<input type="text" class="form-control" name="email" placeholder="E-mail" required>
</div>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-lock"> </span></span>
<input type="password" class="form-control" name="password" placeholder="password">
</div> 
      <br>
	  
      <input type="submit" value="login" name="login" class="btn btn-block btn-primary" />
	  <br>
	  <P class="text-center">Not a member yet ? <a href="register.php" style="color:black;">Sign Up </a></P>
    </form>
  </div>
</div></form>

</body>

</html>