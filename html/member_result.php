<?php
  include "session.php";
  $id = $_POST["id"];
  $pwd = $_POST["pwd"];
  $pwd2 = $_POST["pwd2"];
  $name = $_POST["name"];
  $email = $_POST["email"];

#   $cont=mysqli_connect("localhost", "user1", "12345", "project");

 #비밀번호 같은지 확인
if($pwd != $pwd2){
  echo ("
    <script>
    alert('비번이 서로 달라요')
    history.go(-1)
    </script>
    ");
  }


#아이디 유효성 검사
$sql_id = "select * from member_tbl where id ='$id'";
$result_id = mysqli_query($cont,$sql_id);
$num_match = mysqli_num_rows($result_id); 

   if($num_match == 1)
     {
     echo ("
           <script>
           alert('이미 있는 id 입니다');
           history.go(-1);
           </script>
       ");
     }
  else{
      # 아이디 중복 체크 이후 중복 아이디가 아니면 디비에 넣기#
$sql = "insert into member_tbl (id,pwd,name,email) values( '$id','$pwd','$name','$email')";
$result = mysqli_query($cont, $sql); 
  }

   #디비에 회원정보 들어갔는지 확인으로  if(!$result)이라면 회원가입이 실패 그것이 아니면 회원가입 성공
   if(!$result) {
      echo "(
      <script>
      alert('회원 가입 실패');
      history.go(-1);
      </script>
      )";
   }
   else {
	   echo "(
      <script>
      alert('회원 가입 성공');
      location.href = 'index.php';
      </script>
      )";
   } 
   mysqli_close($cont);

?>
