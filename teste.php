<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<script src="./js/jquery-1.11.1.min.js"></script>

<script>
$(document).ready(function (){

        $('#box2').focus(function (){

         
          document.getElementById('box2').value = 1;

        })

})
 var i=1;
$(document).ready(function (){
        $('#bt1').click(function (){
       
           $('#div1').prepend("<input type='text' width='100px' id='box[i]' value=[i] /><br>");
           document.getElementById('box[i]').value = parseInt([i]);
            i+=1;

               
               /* const printWindow = window.open('', '_Blank');
                printWindow.document.write('<html><head><title>Print with JavaScript </title></head><body>');
                printWindow.document.write(valor);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print(); */

        })
})


</script>
<body>
 <form>
<div id='div1'>
conteudo da div!
</div>
<input type='text' width='100px' id='box0' /><button type='button' id='bt1' >adicionar</button>


</form>   
</body>
</html>



<?php




?>