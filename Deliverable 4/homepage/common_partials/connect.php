<?php
$conn = pg_connect("host=localhost port=5432 dbname=rapidGrocers user=postgres password=kishan29");

// User Login
if (isset($_POST['login']) && $_POST['login'] == "signin") {


	$user = $_POST['username'];
	$pass = $_POST['passwords'];


	$result = pg_query($conn, "SELECT * FROM login_info");

	function verifyUser($result, $user, $pass, $conn)
	{
		// $conn = pg_connect("host=localhost port=5432 dbname=rapidGrocers user=postgres password=kishan29");

		$userID = pg_fetch_all_columns($result, pg_field_num($result, 'user_id'));
		$name = pg_fetch_all_columns($result, pg_field_num($result, 'full_name'));
		$arrUser = pg_fetch_all_columns($result, pg_field_num($result, 'username'));
		$arrPass = pg_fetch_all_columns($result, pg_field_num($result, 'password'));

		for ($i = 0; $i < count($arrUser); $i++) {
			if ($user == $arrUser[$i] && $pass == $arrPass[$i]) {
				session_start();
				$_SESSION['userID'] = $userID[$i];
				$_SESSION['name'] = $name[$i];
				header("location: ../../homepage/main/homepage.php");
			}
		}
				// $_SESSION['delivery'] = $delInfo;

		// $delInfo = pg_query($conn, "SELECT address FROM delivery WHERE user_id = $_SESSION['userID']");



		echo "<script>alert('Incorrect Username or Password')</script>";
		echo "<script> window.location = '../../homepage/login/login.php'; </script>";
	}
	verifyUser($result, $user, $pass, $conn);
}

// New User Register
else if (isset($_POST['register']) && $_POST['register'] == "register") {

	// $conn = pg_connect("host=localhost port=5432 dbname=rapidGrocers user=postgres password=kishan29");

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

	session_start();
	$_SESSION['userID'] = $personal_rows;
	$_SESSION['name'] = $name;

	pg_query($conn, "INSERT INTO login_info VALUES ('$personal_rows', '$email', '$pass', '$name')");
	pg_query($conn, "INSERT INTO delivery VALUES ('$delivery_rows', '$address', '$phone')");

	// echo "<script> alert('Account successfully created'); </script>";
	echo "<script> window.location = '../../homepage/main/homepage.php'; </script>";
}

// Save Comments
else if (isset($_POST['contact']) && $_POST['contact'] == "contact") {
	// Personal Information
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comment'];

	pg_query($conn, "INSERT INTO feedback VALUES ('$name', '$email', '$comments')");

	echo "<script> alert('Thank you for your feedback!'); </script>";
	echo "<script> window.location = '../../homepage/main/homepage.php'; </script>";
} 

else if (isset($_POST['payment']) && $_POST['payment'] == "payment") {

	if (isset($_POST['saveCC'])) {
		$cc = (int) $_POST['cc'];
		$expiry = (int) $_POST['expiry'];
		$cvv = (int) $_POST['cvv'];
		$id =  $_SESSION['userID'];

		pg_query($conn, "INSERT INTO payment VALUES ('$id', '$cc', '$expiry', '$cvv')");
	}

	echo "<script> window.location = '../../homepage/receipt/receipt.php'; </script>";
}

if (isset($_POST["functionname"])){
	switch ($_POST["functionname"]) {

		case 'createProducts':
			createProductArray();
			break;
	}
}



function createProductArray()
{

	$main_array = array();


	$conn = pg_connect("host=localhost port=5432 dbname=rapidGrocers user=postgres password=kishan29");

	$query = pg_query($conn, "SELECT * FROM products");

	while ($row = pg_fetch_assoc($query)) {
		$main_array[] = array($row['name'], (float)$row['price'], $row['category'], $row['image']);
	}
	echo json_encode($main_array);
}
