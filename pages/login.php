<?php

if(isset($_POST["signin"])){
	$op = "login";
	$data = array("email"=>$_POST["login"],"password"=>$_POST["password"]);
	$result = postapi($url,$op,$data);
	switch ($result->reponse) {
		case '-1':
			//die('<script>alert("error in pwd or email ");</script>');
			echo("<script>alert('error in pwd or email');</script>");
			break;
		
		case '1':
			session_start();
			$_SESSION['user_login_info'] = $result;
			//header('location: profile or main');
			//die('<script>alert("raw ymchi go session part");</script>');
			echo  '<script>alert("raw ymchi go session part");</script>';
			header('location: main.php');
			break;
	}
}
?>