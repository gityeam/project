
<!-- php 작성 시작  -->
		<?php
		//세션시작
		include "session.php";
		
		
		//기존 세션값 모두 unset
		unset($_SESSION['id']);
		unset($_SESSION['name']);

		
		//자바 스크립트에서 alert "lougout" 되었습니다."
		//index.php로 이동
		echo ("
				<script>
				window.alert('로그아웃 되었습니다.')
				location.href = 'index.php';
				</script>
			");

	?>
