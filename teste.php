<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="data/data0.json"></script>
 
</head>

<?php

 

?>


<script src="./js/jquery-1.11.1.min.js"></script>

<script>

//Input Autocomplete field Jquery

  $(document).ready(function (){

        url = 'data/data0.json';
        $.getJSON(url, function(data) {
        $(data.registros).each(function(obj) {
            carsOption = "<option value=\"" + data.registros[obj]['sigla'] + " - " + data.registros[obj]['uniGestora'].toUpperCase() + "\"></option>";
            $('#orgaos').append(carsOption);
           
        })
    })
})
      
       
        

 
 

</script>




<script>

const d = new Date();

/*        
$(document).ready(function (){

        $('#box2').focus(function (){
        
          document.getElementById('box2').value = 1;

        })

})

 var i=1;
$(document).ready(function (){
        $('#bt1').click(function (){
            $('#frm').submit();    
                
                $('#div1').prepend("<input type='text' width='100px' id='box[i]' value=[i] /><br>");
                document.getElementById('box[i]').value = parseInt([i]);
                i+=1;
               
                const printWindow = window.open('', '_Blank');
                printWindow.document.write('<html><head><title>Print with JavaScript </title></head><body>');
                printWindow.document.write(valor);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print(); 

                document.write();

        })
})
*/

</script>

<body>
<form id='frm' action='post'>
<div id='div1'>

</div>

<label>Auto Fill</label><BR><BR>
<input list='orgaos' autocomplete='true' style='width:500px;'/>
<datalist id='orgaos'></datalist>
</form>   
</body>
</html>



