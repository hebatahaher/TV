

<html>

<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.js">
<link rel="stylesheet" type="text/css" href="style.css"
<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
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
<div>
<?php 
 session_start();
?>
 <div class="body content">
 <div class="welcome">
 <div class="alert alert-success"> <?=$_SESSION['message']?></div>
 <span class="user"><img src='<?=$_SESSION['avatar']?>'></span>
<div id ="registered">
 <span style="font-weight:bold;font-size:40px;"> All registered users </span>
 <?php 
 $dbhost="localhost";
$user="root";
$pass="";
$db="TV";
$conn=mysqli_connect($dbhost,$user,$pass,$db);
$query="SELECT *FROM users";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
	
	 echo"<div <span style='font-size:35px;'>$row[name]</span><br />";
	echo "<img src='$row[image]'></div>";
}
 ?>
 </div>
 <div>
</body>



</html>


 