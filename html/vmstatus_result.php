<?php include("header.php"); ?>
<?php 
	/* 로그인 먼저 되어있는지 확인!! */
	if(isset($_SESSION['id'])){ ?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title> vm_Status</title>
</head>
<body>
	<h2>VM STATUS</h2><hr>
	<table border="1">
	<tr align="center">
		<td width = "100">hostname</td>
		<td width = "100">cpu</td>
		<td width = "100">ram</td>
		<td width = "100">network</td>
		<td width = "100">volume</td></tr>

<?php
	/* 받은 값들 디비에서 추출!! */
	$cont = mysqli_connect("localhost","user1","12345","project");
	$sql = "select * from vm_status";
	$result=mysqli_query($cont,$sql);


	while($row = mysqli_fetch_array($result)){
		echo "<tr align='center'><td>".$row['vmhostname']."</td>";
		echo "<td>".$row['vmcpu']."</td>";
		echo "<td>".$row['vmram']."</td>";
		echo "<td>".$row['vmnetwork']."</td>";
		echo "<td>".$row['volume']."</td></tr>";
	}

	mysqli_close($cont);

?>
	</table>
</body>

<?php } 
	/* 만약 isset($_SESSION['id'])이 없다면 login_form.php 이동! */
	else{
	 echo ("
           <script>
           alert('로그인 필요한 서비스입니다.');
           location.href = 'login_form.php';
           </script>
       ");
} ?>
<?php include("footer.php"); ?>