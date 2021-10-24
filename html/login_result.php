<!-- 로그인 확인 페이지로 디비와 연결하여 아이디 중복 확인 및 페스워드 비교-->
<?php include "header.php"; ?>
<?php
	include "session.php";
	$id = $_POST["id"];
	$pwd = $_POST["pwd"];

	$cont = mysqli_connect("localhost","user1","12345","project");
	$sql = "select * from member_tbl where id ='$id'";
	$result = mysqli_query($cont,$sql);
	
	$num_match = mysqli_num_rows($result); //존재 여부 확인(행개수 세기)

	if(!$num_match){
		echo(" 
			  <script>
			   window.alert('등록되지 않은 사용자 입니다.');
			   history.go(-1);
			   </script>
			    ");
	}
	else {
		$row = mysqli_fetch_array($result);
		$db_pass = $row["pwd"];
		mysqli_close($cont);

		// DB로 부터의 패스워드와 폼에 입력한 패스워드 비교
		if($pwd != $db_pass){
			echo ("
					<script>
					window.alert('잘못된 패스워드 입니다.');
					location.href = 'login_form.php';
					</script>
				");
		exit;
	}
	else
	{
		/* 로그인 성공시 세션 시작 */
		$_SESSION['id'] = $row["id"];
		$_SESSION['name'] = $row["name"];

	
		echo ("
			<script>
			location.href = 'index.php';
			</script>
			");
		}
}	
?>
<?php include "footer.php";?>

