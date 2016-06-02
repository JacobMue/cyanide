function loseLogin(){
	var logout=document.getElementById('registerButton');
	var login=document.getElementById('loginButton');
	if(logout.text!="REGISTER"){
		login.style.display='none';
	}else{
		login.style.display='inline-block';
	}
}