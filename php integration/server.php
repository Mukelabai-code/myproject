<?php

session_start();

//initilising variables

$username = "";
$email = "";

$error = array();

//connect to db

$db = mysqli_connect('localhost','root','','z nkani')or die("could not connect to database");

//register users

$username = mysqli_real_escape_string($db;$_POST['username']);
$email = mysqli_real_escape_string($db; $_POST['email']);
$password_1 = mysqli_real_escape_string($db; $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db; $_POST['password_2']);

//form validation
if(empty($username)) {array_push($errors, "username is required")};
if(empty($email)) {array_push($errors, "email is required")};
if(empty($password_1)) {array_push($errors, "password is required")};
if($password_1 !=$password_2){array_push($errors, "passwords do not match")};

//check db for existing user with same user name
$user_check_query = "SELECT * FROM user WHERE username = '$usernmae'or email= '$email' LIMIT 1";
$results= mysqli_query($db, $user_check_query);
$user= mysqli_fetch_assoc($result);
if($user) {
	if($user['username']==$username){array_push($errors, "username already exists);}
	if($user['email']==$email){array_push($errors, "email id  already has a registered username");}
}

//register the user if no errors
if(count($errors)== 0 ){
	$passwords = md5($password_1); //this will encrypt the password
	$query = "INSERT INTO z nkani(username,email, password)VALUES('$username', '$email','$password')";
	mysqli_query($db, $query);
	$_SESSION['username']= $username;
	$_SESSION['success']= "you are now logged in";
	
	header('location: index.php');
}


























?>