function check_input_info(){
	if (!document.login_form.id.value)
	{
		alert("아이디가 입력되지 않았습니다");
	 	return;
	}
	if (!document.login_form.pwd.value)
	{
		alert("패스워드가 입력되지 않았습니다");
		return;
	}

	document.login_form.submit();

}

function check_input_member(){

	if (!document.member_form.id.value)
	{
		alert("아이디가 입력되지 않았습니다");
	 	return;
	}
	if (!document.member_form.pwd.value)
	{
		alert("비밀번호가 입력되지 않았습니다");
		return;
	}
	if (!document.member_form.pwd2.value)
	{
		alert("비밀번호 확인이 되지 않았습니다.");
		return;
	}
	if (!document.member_form.name.value)
	{
		alert("이름 입력되지 않았습니다");
		return;
	}
	document.member_form.submit();
}


