<?php
if (isset($_POST['login']) && $_POST['login'] == "signin") {
	$conn = pg_connect("host=localhost port=5432 dbname=rapidGrocers user=postgres password=kishan29");

	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	$result = pg_query($conn, "SELECT * FROM login_info");
	$id = pg_num_rows($result);
	$id += 1;
	
	
	$loginQuery = "INSERT INTO login_info VALUES ($id, '$user', '$pass')";
	
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
	
	}
	
	verifyUser($result, $user, $pass);
}


