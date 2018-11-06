<?php 

  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index3.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index3.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ubuntu Boys | Producten uploaden</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/logo-klein.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	
<!-- Nav bar -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><img src="img/logo.png" width="200px" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index5.php">Producten uploaden</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="index4.php">Actueel aanbod</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="index5.php">Mijn account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index6.php">Spelregels</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="index7.php">Contact</a>
      </li> 
    </ul>
  </div>  
</nav>
<!-- Nav bar -->		
	
<!-- Jumbotron -->
	 
<div class="jumbotron jumbotron-fluid">
	<h1 class="text-center">Welkom <strong><?php echo $_SESSION['username']; ?></strong></h1>
		<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
  <div class="container">
    <h3><img src="img/logo-klein.png" width="10%" alt="">Producten uploaden</h3>    
  </div>
</div>
<!-- Jumbotron -->
<div class="content">
<!-- Upload form -->
<form>
  <div class="form-group">
    <label for="subject">Onderwerp</label>
    <input type="text" class="form-control" id="subject">
  </div>
  <div class="form-group">
    <label for="message">Omschrijving</label>
    <input type="text" style="height:170px" class="form-control" id="description">
  </div>
<input type="file" /><br><br>
  <button type="submit" class="btn btn-primary">Verzenden</button>
</form>	
<!-- Upload form -->
	
<!-- Footer -->
<footer class="stickyfooter">
	<a href="https://www.instagram.com/?hl=en">
  <img src="img/insta.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
</a>
	<a href="https://www.facebook.com/">
  <img src="img/face.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
</a>	
		&copy; Ubuntu Boys Inc. 2018
	
		<!-- notification message -->
 

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
	</div>
</footer>
<!-- Footer -->
	
</body>
</html>
