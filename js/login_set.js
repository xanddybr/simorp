

//SET FOCUS IN PASSWORD FIELD WHEN PAGE LOAD
$(document).ready(function (){
   
    if ($("#usuario").val() == ""){
            $("#usuario").focus(); 
    } else {
            $("#senha").focus(); 
    }

})

