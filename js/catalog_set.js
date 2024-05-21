            
      function RowEmpty(id,desc,fam){
        
        var row = "<tr id='item"+ c +"' style='height:30px; border: 1px solid #F7F7F8; border-collapse: collapse;'>"+
                  "<td style='text-align:center;' class='col-lg-1' id='idItem"+ c +"'>" + id + "</td>"+
                  "<td style='text-align:justify;' class='col-lg-4' id='descricao"+ c +"'>" + desc + "</td>"+
                  "<td style='text-align:center;' class='col-lg-4' id='familiaItem"+ c +"'>" + fam + "</td>"+
                  "</tr>";
                  
                  $("#table01:last").append(row);
                 
      }


      function LodaDataList(id1, id2, url, valueField, desc1, desc2){
            
            $.getJSON(url, function(data) {
                $(data.registros).each(function(obj) {
                  option = "<option value=\"" + data.registros[obj][valueField] + "\">" + data.registros[obj][desc1] + " - " + data.registros[obj][desc2] + "</option>";
                      $(id1).append(option) + $(id2).append(option);
                        
            })
          })
          }

      function LodaDataListKey(key1, key2, id1, url, desc1){
                    
            $.getJSON(url, function(data) {
              $('#descItem').empty();
                $(data.registros).each(function(obj){ 
                  if(data.registros[obj]['familia'] == key1 && data.registros[obj]['tipo'] == key2){
                    option = "<option value=\"" + data.registros[obj]['id'] + " - " + data.registros[obj][desc1] + "\">" + data.registros[obj]['familia'] + "</option>";
                    $(id1).append(option);

                  }
              })
            })
          }

          var c = 0;
          function loadTable(){
              
            $.getJSON('data/itens.json', function(data) {
              $('#descItem').empty();
                $(data.registros).each(function(obj){ 
                  if(data.registros[obj]['familia'] == $("#familiaList").val()){

                  RowEmpty(data.registros[obj]['id'], data.registros[obj]['descricao'], data.registros[obj]['familia']);   
                  c++;

                  }
              })
            })
          }
       

  

    // MODIDFY PLACEHOLDER IN FIELD
    //$("#descricao").attr("placeholder", "variable");

