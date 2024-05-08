        i = 0;
        function Insert(row){
        
             $("#table01:last").append(row);

             $("#idItem"+i).append($("#idItem").val());
             $("#descricao"+i).append($("#descricao").val());
             $("#tpObjeto"+i).append($("#tpObjeto").val());
             $("#unidade"+i).append($("#unidade").val());
             $("#qtdItens"+i).append($("#qtdItens").val());

           i++;
           exit();
              
        } 

        function CalculateFields(){
          $("#subTotal"+(i-1)).val(parseInt($("#qtdItem"+(i-1)).val()) * parseInt($("#valorItem"+(i-1)).val()));
        }

        function RemoveItens(){
          $(".chbox:checked").each(function(){
             let item = $(this).attr("id");
             $("#"+item).remove();
           })

           $(".RowDesc").each(function(){
            let item = $(this).attr("id");
            $("#"+item +"N").remove();
          })
        }

        function Row(){
               var row =  "<tr id='item"+ i +"' style='height:30px;'>"+
                          "<td style='width:40px;'><input type='checkbox' class='chbox' id='check"+ i +"' name=check[]></td>"+
                          "<td style='width:100px;' id='idItem"+ i +"' >&nbsp&nbsp&nbsp</td>"+
                          "<td style='width:800px;' id='descricao"+ i +"' style='width: 800px;'> &nbsp&nbsp&nbsp</td>"+
                          "<td style='width:150px;' id='tpObjeto"+ i +"'> &nbsp&nbsp&nbsp</td>"+
                          "<td style='width:200px;' id='unidade"+ i +"'> &nbsp&nbsp&nbsp</td>"+
                          "<td style='width:150px;' id='qtdItens"+ i +"'> &nbsp&nbsp&nbsp</td>"+
                          "<td style='width: 0px;'></td>"+
                          "<td style='width: 10px;'></td></tr>";
               return row;
        }
                  
        function LodaDataList(id1, id2, url, valueField, field1){
            $.getJSON(url, function(data) {
                $(data.registros).each(function(obj) {
                  option = "<option value=\"" + data.registros[obj][valueField] + "\">" + data.registros[obj][field1] + "</option>";
                      $(id1).append(option) + $(id2).append(option);
                        
            })
          })
        }
                         
        function ShowFieldsAdesaoAta(){
            $("#tipoAta").show();
            $("#l_tipoAta").show();
            $("#nata").show();
            $("#l_nata").show();
            $("#aderente").show();
            $("#desfOptions").show();
            $('#orgao01').empty()
            $('#orgao02').empty()
            $('#orgao01').append("Aderente");
            $('#orgao02').append("Orgão Gestor");
        }

        function HideFieldsAdesaoAta(){
          $("#tipoAta").val('');
            $("#tipoAta").hide();
            $("#l_tipoAta").hide();
            $("#nata").val('');
            $("#nata").hide();
            $("#l_nata").hide();
            $("#aderente").val('');
            $("#aderente").hide();
            $("#addOrg").hide();
            $("#orgao01").empty();
            $("#orgao02").empty();
            $("#orgao01").append("Orgão Solicitante");
        }

        function AtaInterna(){
            $('#OrgSol_Gestor').empty();
            $('#Org_Aderente').empty();
            $('#orgao01').empty()
            $('#orgao02').empty()
            $('#orgao01').append("Aderente");
            $('#orgao02').append("Orgão Gestor");
            $('#addOrg').hide();
            LodaDataList("#OrgSol_Gestor", "#Org_Aderente", "data/orgaos.json","sigla","descricao");
        }

        function AtaExterna(){
            $('#OrgSol_Gestor').empty();
            $('#Org_Aderente').empty();
            $('#orgao01').empty()
            $('#orgao02').empty()
            $('#orgao01').append("Aderente");
            $('#orgao02').append("Orgão Gestor");
            $('#addOrg').show();
            LodaDataList("#OrgSol_Gestor","","data/orgaos.json","sigla","descricao");

        }

        function MsgBoxModal($msg) {

        var modal = "<div class='modal fade' id='myModal' role='dialog' style='margim-left:10px;'>"+
                      "<div class='modal-dialog'>"+
                        "<div class='modal-content'>"+
                          "<div class='modal-header'>"+
                            "<button type='button' class='close' data-dismiss='modal'>&times;</button>"+
                              "<h4 class=modal-title>SIMORP beta</h4>"+
                                "</div>"+
                                  "<div class=modal-body>"+
                                  "<p>" + $msg + "</p>"+
                                "</div>"+
                              "<div class=modal-footer>"+
                            "<input id='fechar' type='button' class='btn btn-default' data-dismiss='modal' value='Fechar' >"+
                          "</div>"+
                        "</div>"+
                      "</div>"+
                    "</div>";
        return modal;
      
        }
      

    
    
    
   
   