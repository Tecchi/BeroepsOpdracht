<?php include('server.php') ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ubuntu Boys | Mijn account</title>
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
  <div class="container">
    <h3><img src="img/logo-klein.png" width="10%" alt="">Mijn account</h3>     
  </div>
</div>
<!-- Jumbotron -->
	
	
	
<!-- Login -->
<div>
<form method="post" action="server.php" class="login">
	<?php include('errors.php'); ?>
	<h1>Login</h1>
	<p>Log in om producten te uploaden</p>
  <div class="form-group">
    <label>Username</label>
  	<input type="text" name="username" >
  </div>
  <div class="form-group">
    <label>Password</label>
  	<input type="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="login_user">Login</button>
</form>		
<!-- Login -->
	
	
	
	
<!-- Register -->
	<form class="register" method="post" action="index5.php">
		<?php include('errors.php');?>
	<h1>Registreer</h1>
  <div class="form-group">
    <label>Gebruikersnaam</label>
	<input type="text" name="username" value="<?php echo $username; ?>">
  </div>
  <div class="form-group">
    <label>Email</label>
  	 <input type="email" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
    <label>Wachtwoord</label>
  	  <input type="password" name="password_1">
  </div>
  <div class="form-group">
    <label>Herhaal Wachtwoord</label>
  	  <input type="password" name="password_2">
  </div>
  <button type="submit" name="reg_user" class="btn btn-primary">Registreer</button>
</form>		
	</div>
<!-- Register -->
	
	
	
	
	
<!-- Footer -->
<footer class="stickyfooter">
	<a href="https://www.instagram.com/?hl=en">
  <img src="img/insta.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
</a>
	<a href="https://www.facebook.com/">
  <img src="img/face.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
</a>	
		&copy; Ubuntu Boys Inc. 2018

</footer>
<!-- Footer -->
	
</body>
</html>
