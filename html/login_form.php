<!DOCTYPE html>
<html>
<head>
	<title>VM만들기 로그인 페이지</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script type="text/javascript" src="./js/submit.js"></script>
</head>
<body>
	<div id="header">
		<?php include "header.php";?>
	</div>

	<div id="login_form">
			<p>
			<h2>로그인</h2> 
			<hr />
			</p>
			<?/* 로그인 입력 폼 입력 받은 값을 
				login.php로 넘김 */?>
			
			<form name="login_form" method="post" action="login_result.php">
			<table>
			<tr>
				<td>아이디 &nbsp;</td>
				<td><input type="text" name="id" placeholder="아이디 입력"></td>
			</tr>
			<tr>
				<td>패스워드 &nbsp;</td>
				<td><input type="password" name="pwd" placeholder="패스워드 입력"></td>
			</tr>
			</table>
			<a href="#"><img src="./img/login.jpg" width="100" onclick="check_input_info()"></a>

			</form>



	</div>
	<div id="footer">
		<?php include "footer.php";?>
	</div>

</body>
</html>
