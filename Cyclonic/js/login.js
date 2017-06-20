function login(){
	var usr = document.getElementById('usuario').value;
	var psw = document.getElementById('senha').value;
	if (usr == 'antonio' && psw == '123'){
		window.location.href = 'empresa/index.html';
		return true;
	}else if (usr == 'martha' && psw == '123'){
		window.location.href = 'sindico/index.html';
		return true;
	}

}