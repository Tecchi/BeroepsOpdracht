<?php
session_start();

//initializing variables

$username = "";
$email 	  = "";
$errors = array();
//......Tevin.....//
// connect to the database
$db_hostname = 'localhost'; //of '127.0.0.1'
$db_username = '81472_DBB';
$db_password = 'hYzn97@0';
$db_database = '81472_beroeps';
$db = mysqli_connect($db_hostname, $db_username, $db_password,
	$db_database);

// REGISTER USER
if(isset($_POST['reg_user'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

   // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Gebruikersnaam is verplicht!"); }
  if (empty($email)) { array_push($errors, "Email is verplicht!"); }
  if (empty($password_1)) { array_push($errors, "Wachtwoord is verplicht!"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Wachtwoord komt niet overeen");
  }
	// first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Gebruiker bestaat al");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email bestaat al");
    }
  }
	  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "U bent nu ingelogd";
  	header('location: index3.php');
  }
}

//...Baran......//

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Gebruikersnaam is verplicht!");
  }
  if (empty($password)) {
  	array_push($errors, "Wachtwoord is verplicht!");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "U bent nu ingelogd";
  	  header('location: index3.php');
  	}else {
  		array_push($errors, "Wachtwoord/Gebruikersnaam is niet correct.");
  	}
  }
}

?>