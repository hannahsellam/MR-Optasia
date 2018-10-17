<?php
	include("config.inc.php");
	include("pdo.inc.php");

	if (isset($_POST["login"]))
	{
		try {
			$query = "SELECT * 
						FROM projet1a_users
						WHERE user_login='" . $_POST["login"] ."'
						AND user_password='" . $_POST["password"] ."'";
			$req = $pdo->query($query);
			$data = $req->fetchAll(); 
			if(count($data) == 0){
				header("Location:login.php?notif=login_nok");
				exit;
			} else {
				//my_var_dump($data); exit;
				session_start();
				$_SESSION["user"] = $data[0];
				header("Location:index.php");
				exit;
			}
		}
		catch (Exception $e) {
			header("Location:login.php?notif=nok");
		}
	}