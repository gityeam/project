<!DOCTYPE html>
<html>
<head>
	<title>VM만들기 회원가입 페이지</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script type="text/javascript" src="./js/submit.js"></script>
</head>
<body>
	<div id="header">
		<?php include "header.php";?>
	</div>

	<div id="member_form">
			<p>
			<h2>회원가입</h2> 
			<hr />
			</p>
			<form name="member_form" method="post"  ACTION="member_result.php">
			<table>
			<tr>
				<td>아이디</td>
				<td><input type ="text" name="id" size="32" placeholder="아이디 입력"></td>
			</tr>
			<tr>
				<td>비밀번호</td>
				<td><input type ="password" name="pwd" size="32" placeholder="비밀번호 입력"></td>
			</tr>
			<tr>
				<td>비밀번호 확인</td>
				<td><input type ="password" name="pwd2" size="32" placeholder="비밀번호 확인"></td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type ="text" name="name" size="32"  placeholder="이름 입력"> </td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type ="email" name="email" size="32"  placeholder="email 입력"></td>
			</tr>
			</table>

			<input type="button" onclick="check_input_member();" value="회원 가입" >
			<input type="reset" value="다시 쓰기">

			
	</form>
	</div>
</div>

<div id="footer">
<?php include "footer.php";?>
</div>

</body>
</html>
