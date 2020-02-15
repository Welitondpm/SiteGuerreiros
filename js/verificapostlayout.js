function verificalayout(){
    if (document.getElementById('titulolayout') == "") {
        document.getElementById('titulolayout').focus()
        alert("Preecha os campos corretamente")
        return false
    } else if (document.getElementById('linklayout') == ""){
        document.getElementById('linklayout').focus()
        alert("Preecha os campos corretamente")
        return false
    } else {
        return true
    }

}