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
include'connect.php';
$_SESSION['message']='';

if($_SERVER['REQUEST_METHOD']=='POST'){
	if($_POST['password']==$_POST['confirmpassword']){
		$username=$_POST['username'];
		$email=$_POST['email'];
	    $password=$_POST['password'];
	    $avatar_path='image/'.$_FILES['avatar']['name'];
	$username =mysqli_real_escape_string($conn,$username);
	$email =mysqli_real_escape_string($conn,$email);
	$avatar_path =mysqli_real_escape_string($conn,$avatar_path);
	
	if(preg_match("!image!",$_FILES['avatar']['type'])){
		if(copy($_FILES['avatar']['tmp_name'],$avatar_path)){
			$_SESSION['username']=$username;
		    $_SESSION['avatar']=$avatar_path;
			$sql="INSERT INTO users(name,email,pass,image)VALUES('$username','$email','$password','$avatar_path')";
			if(mysqli_query($conn,$sql)){
				$_SESSION['message']="Registration sucssfuly";
				header("location:profile.php");
				}else{
				$_SESSION['message']="user could not added";
			}
		}else{
			$_SESSION['message']="file uploaded";
		}
	}else{
		$_SESSION['message']="please upload only jpj ,png or gif image";
	}
	}else {
		$_SESSION['message']="password did not match";
}}



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
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="stylee.css" type="text/css">
<div class="body-content" style="background-color:#0077b3;">
  <div class="module">
  <header>
    <h1>Create an account</h1>
	</header>
    <form class="form" action="index.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?=$_SESSION['message']?></div>
	  <div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-user"> </span></span>
<input type="text" placeholder="User Name" name="username" required />
</div> 
	  <div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-user"> </span></span>
<input type="email" placeholder="Email" name="email" required />
</div> 
	  <div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-lock"> </span></span>
<input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
</div> 
	  <div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-lock"> </span></span>
 <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
</div> 
     
      <div class="avatar"><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register new account " name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>

</html>