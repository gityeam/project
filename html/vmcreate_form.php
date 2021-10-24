<script type="text/javascript" src="./js/submit.js"></script>
<?php include"header.php"; ?>

<!-- isset을 이용하여 현재 세션에서 id 값이 들어 있을 경우에만 페이지가 열리도록 하고  id 값이 비어있으면 '로그인이 필요하다는 창이 뜨도록 만든 구성' -->

<?php
if (isset($_SESSION['id'])) {
	echo '
<? /*가상 머신 만들 값을 받아서 vmcreate_result.php 넘김 */?>
<form  action="vmcreate_result.php" method="post" name="vmcreate">
	<table>
		<tr>
			<td>VM이름을 입력해주세요 &nbsp;</td>
			<td><input type="text" size="30" name="vmhostname" style="width:200px;"></td>
		</tr>
		
		<tr>
			<td>CPU을 선택 해주세요.&nbsp;</td>
			<td><select  name="vmcpu" style="width:200px; font-size: 20px;"> 
					<option value="1" selected>CPU1</option>
					<option value="2" >CPU2</option>
				</select></td>
		</tr>
		<tr>
			<td>RAM을 선택해주세요.&nbsp;</td>
			<td><select  name="vmram" style="width:200px; font-size: 20px;"> 
					<option value="1024" selected>RAM1</option>
					<option value="2048">RAM2</option>
					<option value="4096">RAM4</option>
				</select></td>
		</tr>
		
		<tr>
			<td>네트워크를 선택해주세요&nbsp;</td>
			<td><select name="vmnetwork" style="width:200px; font-size: 20px;">
					<option value="default" selected>default</option>
					<option value="bridge=br0" >bridge</option>
				</select></td>
		</tr>

		<tr>
			<td>디스크 크기를 선택하세요&nbsp;</td>
			<td><select name="volume" style="width:200px; font-size: 20px;">
					<option value="/cloud/ubuntu10g.qcow2" selected>10G</option>
					<option value="/cloud/ubuntu15g.qcow2" >15G</option>
					<option value="/cloud/ubuntu20g.qcow2" >20G</option>
			</select></td>
		</tr>
		
	</table>
	<div>
	<? /* 간단하게 보내기 버튼과 초기화 버튼 */?>
	<input type="submit" style = "width:  100pt; height: 30pt; font-size: 20pt;"value="만들기"/>
	<input type="reset" style = "width:  100pt; height: 30pt; font-size: 20pt; "value="초기화"/>
	</div>
	</form>';
} 
// 로그인이 안되어있다면 바로 여기로 들어와서 로그인 페이지로 보냄 

else {
	 echo ("

           <script>
           alert('로그인이 필요한 서비스 입니다.');
           location.href = 'login_form.php';
           </script>
       ");
}

?>

<?php include("footer.php"); ?>
