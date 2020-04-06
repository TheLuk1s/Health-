<?php
include_once 'mysql.php';
ob_start();

function register(){
	if($_POST['reg_username'] && $_POST['reg_name'] && $_POST['reg_surname'] && $_POST['reg_email'] && $_POST['reg_password'] && $_POST['reg_password_repeat']){
		$username = $_POST['reg_username'];
		$name = $_POST['reg_name'];
		$surname = $_POST['reg_surname'];
		$email = $_POST['reg_email'];
		$password = $_POST['reg_password'];

		$password_hashed = hash("sha256", $password);

		$sql_check = "SELECT id_User FROM tbl_User WHERE username = '$username'";
		$check = mysql::query($sql_check);

		if($check->num_rows == 0){
			$sql = "INSERT INTO tbl_User (Name, Lastname, Email, Username, Password) VALUES ('$name', '$surname', '$email', '$username', '$password_hashed')";
			$data = mysql::query($sql);

			if($data){
				$result['success'] = 'Registration completed';
			} else {
				$result['error'] = 'Registration is failed! Please contact administration!';
			}
		} else {
			$result['error'] = 'Registration is failed! Username is already in use!';
		}
	} else {
		$result['error'] = 'Registration is failed! Please contact administration!';
	}

	echo json_encode($result);
}

function login(){
	if($_POST['log_username'] && $_POST['log_password'])
	{
		$username = $_POST['log_username'];
		$password = hash("sha256",$_POST['log_password']);

		$query = "SELECT id_User FROM tbl_User WHERE Username = '$username' and Password = '$password'";
		$data = mysql::select($query);

		if($data)
		{
			$_SESSION['loggedIn'] = true;
			$_SESSION['id_User'] = $data;
			$_SESSION['Username'] = $username;

			$result['success'] = "Logged in succesfully!";
		}
		else {
			$result['error'] = 'Wrong username or password!';
		}
	}

	echo json_encode($result);
}

function profile(){
	
}
?>
