<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

        function plus(int $n1 , int $n2) {
                $n3 = $n1 + $n2;
                return $n3;
        }

        function getData() {
                $data = $_POST['data'];
                return $data;
        }


?>

<script src="./js/jquery-1.11.1.min.js"></script>

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

<input type='text' width='100px' id='box0' name='data' /><button type='button' id='bt1' >Adicionar</button>

<p id="demo"></p>

</form>   
</body>
</html>



