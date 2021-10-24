<?php
session_start();
$cont=mysqli_connect("localhost", "user1", "12345", "project");

// 로그인 성공시 DB에서 가져온 isset($_SESSION['id']) 값을 $id 변수에 넣음
	if (isset($_SESSION['id'])){
		$id = $_SESSION['id'];
	
	}
	//로그인 실패시
	else{
		$id = "";
	}
	// 로그인 성공시 DB에서 가져온 isset($_SESSION['name']) 값을 $name 변수에 넣음
	if (isset($_SESSION['name'])){
		$name = $_SESSION['name'];
	}
	//로그인 실패시
	else{
		$name = "";
	}

?>