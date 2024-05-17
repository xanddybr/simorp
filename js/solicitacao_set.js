        
        var i = 0;
        function Insert(){

            
        }                
   
        function RemoveItens(){
              $(".chbox:checked").each(function(){
              let item = $(this).attr("id");
              $("#"+item).remove();
              $("#checkAll").prop('checked',false);
              $("#qtdItenslist").append(parseInt(i));
           })
        }

        function RowEmpty(i){

          var row = "<tr id='item"+ i +"' style='height:30px; border: 1px solid #e4e2e2; border-collapse: collapse;'>"+
                    "<td style='width:30px;'><input type='checkbox' class='chbox' id='item"+ i +"' name=check[]></td>"+
                    "<td style='width:100px; text-align:center' id='idItem"+ i +"'></td>"+
                    "<td style='width:700px; text-align:justify;' id='descricao"+ i +"'></td>"+
                    "<td style='width:400px; text-align:center;' id='familiaItem"+ i +"'></td>"+
                    "<td style='width:200px; text-align:center;' id='unidade"+ i +"'><input class='form-control col-lg-1' list='unidades'  id='fdunidade"+ i +"' placeholder='UNIDADE' name='solRegPrec[]'><datalist id='unidades'></datalist></td>"+
                    "<td style='width:150px; text-align:center;' id='qtdItens"+ i +"'></td>"+
                    "<td style='width: 0px;'></td>"+
                    "<td style='width: 10px;'></td></tr>";

                    $("#table01:last").append(row);
        }
                  
        function LodaDataList(id1, id2, url, valueField, desc1){
            $.getJSON(url, function(data) {
                $(data.registros).each(function(obj) {
                  option = "<option value=\"" + data.registros[obj][valueField] + "\">" + data.registros[obj][desc1] + "</option>";
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
                var desc = $("#descricao").val();
                var qtd = $("#qtdItens").val();

                var descPart = desc.split("-");
                var qtdPart = qtd.split(',');
                
              $(descPart).each(function(x) {
                if(data.registros[obj]['id'] == descPart[x]){
                    let desc = data.registros[obj]['descricao'];
                    let fam = data.registros[obj]['familia'];

                      RowEmpty(i);
                      $("#idItem"+i).append("<b>"+ descPart[x] +"</b>");
                      $("#descricao"+i).append(desc);
                      $("#familiaItem"+i).append(fam);
                      $("#fdunidade"+i).val($("#unidade").val());
                      $("#qtdItens"+i).append(qtdPart[x]);
                      CountItens();
                      i++;
              }
                        
              })
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

        function MsgBoxModal($msg){

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

        function CountItens(){
         
         let qtdItens = $(".chbox").length;
         $("#qtdItensTotal").empty();
         $("#qtdItensTotal").append("&nbsp;"+ qtdItens);

        }
    
        function DefaultMultInsert(){
          $("#familiaList").hide();
            $("#l_familia").hide();
            $("#descItem").empty();
            $("#descricao").val("");
         }
   
        function DefaultItemtoItem(){
            $("#familiaList").show();
            $("#l_familia").show();
            $("#familiaList").val("");
         
        }
        
        function AppendItemSingle(){
          var desc = $("#descricao").val();
          var descPart = desc.split("-");

          RowEmpty(i);
          $("#idItem"+i).append("<b>"+ descPart[0] +"</b>");
          $("#descricao"+i).append(descPart[1]);
          $("#familiaItem"+i).append($("#familiaList").val());
          $("#fdunidade"+i).val($("#unidade").val());
          $("#qtdItens"+i).append($("#qtdItens").val());
          i++;

        }