function verificaregistro(){
	if (document.getElementById("nome").value == "") {
		document.getElementById("nome").focus();
		alert("Preencha os campos corretamente")
		return false
	} else if (document.getElementById("email").value == "") {
		document.getElementById("email").focus();
		alert("Preencha os campos corretamente")
		return false
	} else if (document.getElementById("nick").value == "") {
		document.getElementById("nick").focus();
		alert("Preencha os campos corretamente")
		return false
	} else if (document.getElementById("tag").value.indexOf("#") == -1) {
		document.getElementById("tag").focus();
		alert("Preencha os campos corretamente")
		return false
	} else if (document.getElementById("senha").value == "") {
		document.getElementById("senha").focus();
		alert("Preencha os campos corretamente")
		return false
	} else if (document.getElementById("senhaconfirma").value == "") {
		document.getElementById("senhaconfirma").focus();
		alert("Preencha os campos corretamente")
		return false
	} else if (document.getElementById("senha").value == document.getElementById("senhaconfirma").value) {
		return true
	} else {
		alert("As senhas não coencidem")
		return false
	}
}

function verificalogin(){
	if (document.getElementById("senha").value == ""){
		document.getElementById("senha").focus()
		alert("Preencha a senha")
		return false
	} else {
		return true
	}
}