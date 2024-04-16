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
})