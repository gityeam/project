<?php include"header.php"; ?>
<!-- 현재는 사용하고 있지 않은 페이지 -->

<?php 
	
	if (isset($_SESSION['id'])){
		echo "loginning!!";
	}
	else {
		 echo ("
           <script>
           alert('로그인 필요한 서비스입니다.');
           location.href = 'login_form.php';
           </script>
       ");
	}
	

?>

<?php include("footer.php"); ?>
