<?php

// User Login
if (isset($_POST['login']) && $_POST['login'] == "signin") {

	$conn = pg_connect("host=localhost port=5432 dbname=rapidGrocers user=postgres password=kishan29");
	$user = $_POST['username'];
	$pass = $_POST['passwords'];



	$result = pg_query($conn, "SELECT * FROM login_info");

	function verifyUser($result, $user, $pass)
	{

		$arrUser = pg_fetch_all_columns($result, pg_field_num($result, 'username'));
		$arrPass = pg_fetch_all_columns($result, pg_field_num($result, 'password'));

		for ($i = 0; $i < count($arrUser); $i++) {
			if ($user == $arrUser[$i] && $pass == $arrPass[$i]) {
				header("location: homepage.php");
			}
		}

		echo "<script>alert('Incorrect Username or Password. Go back to try again.')</script>";
		echo "<script> window.location = 'newpage_login.php'; </script>";
	}

	verifyUser($result, $user, $pass);
} 

// New User Register
else if (isset($_POST['register']) && $_POST['register'] == "register") {

	$conn = pg_connect("host=localhost port=5432 dbname=rapidGrocers user=postgres password=kishan29");

	// Personal Information
	$name = $_POST['name'];
	$email = $_POST['e-mail'];
	$pass = $_POST['password'];

	// Delivery
	$address = $_POST['address'];
	$phone = $_POST['phone'];

	$personal = pg_query($conn, "SELECT * FROM login_info");
	$delivery = pg_query($conn, "SELECT * FROM delivery");

	$personal_rows = pg_num_rows($personal) + 1;
	$delivery_rows = pg_num_rows($delivery) + 1;

	pg_query($conn, "INSERT INTO login_info VALUES ('$personal_rows', '$email', '$pass', '$name')");
	pg_query($conn, "INSERT INTO delivery VALUES ('$delivery_rows', '$address', '$phone')");

	echo "<script> alert('Account successfully created'); </script>";
	echo "<script> window.location = 'homepage.php'; </script>";
}
