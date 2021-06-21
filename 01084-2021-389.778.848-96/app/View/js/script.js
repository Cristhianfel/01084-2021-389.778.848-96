function c(id) {
    var letra = document.getElementById(id).value;
    letra = letra.split("");
    var tmp = "";
    for (i = 0; i < letra.length; i++) {
        if (letra[i - 1]) {
            if (letra[i - 1] == " " || letra[i - 1] == ".") {
                letra[i] = letra[i].replace(letra[i], letra[i].toUpperCase());
            }
        } else {
            letra[i] = letra[i].replace(letra[i], letra[i].toUpperCase());
        }
        tmp += letra[i];
    }
    document.getElementById(id).value = tmp;
}

function Onlychars(e)
{
	var tecla=new Number();
	if(window.event) {
		tecla = e.keyCode;
	}
	else if(e.which) {
		tecla = e.which;
	}
	else {
		return true;
	}
	if((tecla >= "48") && (tecla <= "57")){
		return false;
	}
}
