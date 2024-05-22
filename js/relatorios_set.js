


  $(document).ready(function(){

    $("#tabRel01").hide();
    $("#tabRel02").hide();
  
    $("#tpRel").change(function () {
      if($("#tpRel").val() == "regPrec") {
            $("#tabRel01").show();
            $("#tabRel02").hide();
    
      }
    })

    $("#tpRel").change(function () {
      if($("#tpRel").val() == "adesaoAta") {
            $("#tabRel02").show();
            $("#tabRel01").hide();
      }
   })

    $("#makeReport").click(function() {

      const content = document.getElementById("rel01");
      const printWindow = window.open('','_blank');


      printWindow.document.write("<html><head><title>Relatório de Registro de Preço</title></head><body>");
     	printWindow.document.write(content.outerHTML);
      printWindow.document.write('</body></html>');

      printWindow.print();
    
    }) 


  })
  


  
