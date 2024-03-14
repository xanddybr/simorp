
const sessao = sessionStorage.getItem("userNow") 
if(!sessao) {
    sessionStorage.clear();
    alert("vc não esta logado, será redirecionado para o logon")
    window.location.replace('index.php');
}

const userNow1 = sessionStorage.getItem("userNow")
$(document).ready(function(){
	$("#demo").append(userNow1)
});
