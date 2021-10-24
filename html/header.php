<!-- 메인페이지 부분 회원가입폼 / 네비 / 로그인 | 로그아웃 부분이 있고 맨 위에 세션 확인을 넣어둠  -->
<?php include"session.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>가상머신 만들어보자</title>
<link rel="stylesheet" type="text/css" href="css/default.css" />
</head>	
<body>
	<div id="header">
		<div>
			<?/* 세션 로그아웃 */ ?>
			<p id="loginout">
			<?php
				if(!$id) {

					echo ("<a
					href='member_form.php'>회원가입</a>&nbsp; | &nbsp; <a 
					href='login_form.php'>로그인</a>");		
				}
				else {
					echo "{$name}님 반갑습니다. |	 <a href='logout.php'>로그아웃</a>";
					echo "<br>";
				}

				?>
		</p>
		</div>
	</div>
		<?/* 사이드바 네비게이션 */ ?>
		<div id="nav">
			<ul>
			  <li><a href="index.php">홈으로 가기</a></li>
			  <li><a href="vmcreate_form.php">가상머신 만들기</a></li>
			  <li><a href="vmstatus_result.php">가상머신 정보 보기</a></li>
			  
			</ul>
		</div>

								
	</body>	
</html>
