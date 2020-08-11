<?php include('style.php');?>
<?php include('autoloader.php');?>
<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">

	<?php include('header_links.php'); ?>
	<title>Kay's Motors</title>

</head>
<body>
	<div class="navbar-fixed">
		<nav class="purple darken-4">
			<div class="container">
				<div class="nav-wrapper">
					<a href="index.php" class="brand-logo">Kay's Motors</a>
					<a href="#" class="sidenav-trigger" data-target="sidenav">
						<i class="material-icons">menu</i>
					</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="index.php">Home</a></li>
						<!-- <li><a href="about.php">About Us</a></li> -->
						<li><a href="stock.php">Car Search</a></li>

						<!--
						<li><a href="register.php">Register</a></li>
-->
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!--
  <div class="navbar-fixed">
   <nav class="grey lighten-2">
      <div class="container">
     <div class="row">
         
     </div>
      </div>
      
   </nav>
   
    
</div>
-->

	<ul class="sidenav" id="sidenav">
		<li>
			<a href="index.php"><i class="material-icons">home</i>Home</a>
		</li>

		<li>
			<a href="stock.php"><i class="material-icons">directions_car</i>In Stock</a></li>
		<!--
		<li>
			<a href="saved.php"><i class="material-icons">favorite</i>Favourites</a>
		</li>
-->
		<li><a href="login.php"><i class="material-icons">account_circle</i>Login</a></li>
		<li><a href="register.php"><i class="material-icons">person_add</i>Register</a></li>
		<li>
			<a href="contact.php"><i class="material-icons">email</i>Contact</a>
		</li>
	</ul>
