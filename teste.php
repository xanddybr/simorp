<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

 <script src="./js/jquery.min.js"></script>
 <script src="./js/teste.js"></script>

<script>

//Input Autocomplete field Jquery

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


CALLING FUNCTION PHP WITH JAVASCRIPT


$.ajax({
  url: 'test.php',
  success: function(data) {
    $('.result').html(data);
  }
});




*/

console.log('Running..')

</script>

<body>
<form id='frm' action='post'>
<div id='div1'>

</div>

<label>Auto Fill</label><BR><BR>
<select id="select" style="width:500px;">

<option value='maçã' >maçã</option>
<option value='limão' >limão</option>
<option value='canela' >canela</option>

</select>

<input type='button' value='acionar' id='btn' />

</form>   
</body>
</html>



