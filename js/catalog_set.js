

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

    function InsertMultipleItens(){

      $.getJSON('data/itens.json', function(data) {

    $(data.registros).each(function(obj){
    var desc = $("#familiaList").val();
           
    $(descPart).each(function(x) {
      if(data.registros[obj]['familia'] == desc){
          let desc = data.registros[obj]['descricao'];
          let fam = data.registros[obj]['familia'];
          let idItem = data.registros[obj]['id'];

            RowEmpty(i);
            $("#idItem"+i).append("<b>"+ descPart[x] +"</b>");
            $("#descricao"+i).append(idItem +" - "+ desc);
            $("#familiaItem"+i).append(fam);
         
            i++;
          
          }
              
        })
      })
    })
    }

    function RowEmpty(i){

      var row = "<tr id='item"+ i +"' style='height:30px; border: 1px solid #e4e2e2; border-collapse: collapse;'>"+
                "<td style='width:100px; text-align:center' id='idItem"+ i +"'></td>"+
                "<td style='width:700px; text-align:justify;' id='descricao"+ i +"'></td>"+
                "<td style='width:400px; text-align:center;' id='familiaItem"+ i +"'></td></tr>";
                
                $("#table01:last").append(row);
    }

    // MODIDFY PLACEHOLDER IN FIELD
    //$("#descricao").attr("placeholder", "variable");

