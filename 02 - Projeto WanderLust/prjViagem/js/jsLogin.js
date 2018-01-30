function irPara(x) {
	if(x == 1) {
		location.href = "pags/login.php";
	}	else if(x == 2) {
		location.href = "pags/cadastro.php";
	} else if(x == 3) {
		location.href = "login.php";
	} else {
		location.href = "cadastro.php";
	}
}