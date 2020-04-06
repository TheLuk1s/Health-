<?php
session_start();
ob_start();
include_once 'includes/functions.php';include_once 'includes/mysql.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>HEALTH+</title>

		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
		<!-- Bootstrap -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
		<!-- Local CSS, JS -->
		<link rel="stylesheet" href="/style.css" type="text/css" media="screen" />
		<script src="/includes/custom.js"></script>

	</head>
	<body>
		<div class="container-fluid px-0">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="/">HEALTH+</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
						<!--<li class="nav-item active">
							<a class="nav-link text-uppercase" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-uppercase" href="#">Features</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="/login.php" title="Sign in"><i class="fas fa-sign-in-alt"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/register.php" title="Register"><i class="fas fa-user-plus"></i></a>
						</li>
						<!-- if logged in they can see this, if not  -  not. -->
						<?php
							if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == FALSE)
							{}else{
						 ?>
						 <li class="nav-item">
							 <a class="nav-link" href="/logout.php" title="Logout"><i class="fas fa-sign-out-alt"></i></a>
						 </li>
						 <div class="dropdown">
							 <button class="nav-link profile" id="dropdownMenuButton" title="Profile"><i class="far fa-user-circle"></i> Profile</button>
							 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								 <a class="dropdown-item" href="/profile.php">Profile</a>
								 <a class="dropdown-item" href="#">Link 2</a>
								 <a class="dropdown-item" href="#">Link 3</a>
							 </div>
						 </div>
					 <?php } ?>
					 <!-- ****************************************************************** -->
					</ul>
				</div>
			</nav>
		</div>
