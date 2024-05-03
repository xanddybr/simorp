    
    var i = 1;
    function Insert(item){
    
    let qtdItem = $("#qtdItem"+(i-1)).val();
    let valorItem = $("#valorItem"+(i-1)).val();

        if(qtdItem == "" || valorItem == "") {
         
          alert("O campo valor e quantidade não pode ficar em branco!");

         } else {

            let row = item;

            $("#table01:last").append(row);
            $("#subTotal"+(i-1)).val(parseInt($("#qtdItem"+(i-1)).val()) * parseInt($("#valorItem"+(i-1)).val()));    
            $(".dinheiro").mask('#.##9,99',{reverse: true})

            i++;
            exit();
        }  
          
    } 

    function removeItens(){
        $(".chbox:checked").each(function(){
		   let item = $(this).attr("id");
               $("#"+item).remove();
            })	
    }

    function rowItem(){
        var row = "<tr id='item_N"+ i +"'>"+
                "<td data-field='text' style='width:20px'><input type='checkbox' id='item_N"+ i +"'  class='chbox' name=check[]></td>"+
                "<td data-field='text'><input class='form-control itens' id='listItens' placeholder='INFORME O ITEM...' list='itens'  style='width: 770px;' name='solRegPrec[]' /><datalist id='itens'></datalist></td>"+
                "<td data-field='text'><input type='text' id='tpObjeto' value='' class='form-control' style='width:143px' name='solRegPrec[]' placeholder='' disabled></td>"+
                "<td data-field='text'><input id='uni' list='unidades' class='form-control' style='width:148px' name='solRegPrec[]' placeholder='';><datalist id='unidades'></datalist></td>"+
                "<td data-field='text'><input class='form-control dinheiro' style='width:148px' id='valorItem"+ i +"' name='solRegPrec[]' placeholder='R$' value=''/></td>"+
                "<td data-field='text'><input class='form-control' style='width:100px;' id='qtdItem"+ i +"' placeholder='' name='solRegPrec[]' value='' required /></td>"+
                "<td data-field='text'><input class='form-control dinheiro' style='width:148px' id='subTotal"+ i +"' placeholder='R$' name='solRegPrec[]' value='' disabled/></td>"+
                "<td data-field='text' style='width: 10px;'></td>"+
                "<td data-field='text' style='width: 10px;'></td>"+
                "</tr>";
                return row;
    }
               
    function loadTwoDataList(id1, id2, url, value, desc){
        $.getJSON(url, function(data) {
            $(data.registros).each(function(obj) {
               option = "<option value=\"" + data.registros[obj][value].toUpperCase() + " - " + data.registros[obj][desc] + "\">" + data.registros[obj][value] + "</option>";
                    $(id1).append(option) + $(id2).append(option);
                    
        })
      })
    }

    function loadOneDataList(idf, url, desc1, desc2, desc3){
      $.getJSON(url, function(data) {
          $(data.registros).each(function(obj) {
             option = "<option value=\"" + data.registros[obj][desc1] + " - " + data.registros[obj][desc2] + "\">" + data.registros[obj][desc3] + "</option>";

          $(idf).append(option);
          $("#tpObjeto").val(data.registros[obj]['tipo']);          

          })
           
        })
 
    }

    function appendfield(){
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
        $("#orgao01").append("Orgao Solicitante");
    }

    function AtaInterna(){
        $('#OrgSol_Gestor').empty();
        $('#Org_Aderente').empty();
        $('#orgao01').empty()
        $('#orgao02').empty()
        $('#orgao01').append("Aderente");
        $('#orgao02').append("Orgão Gestor");
        $('#addOrg').hide();
        loadTwoDataList("#OrgSol_Gestor", "#Org_Aderente", "data/orgaos.json","sigla","descricao");
    }

    function AtaExterna(){
        $('#OrgSol_Gestor').empty();
        $('#Org_Aderente').empty();
        $('#orgao01').empty()
        $('#orgao02').empty()
        $('#orgao01').append("Aderente");
        $('#orgao02').append("Orgão Gestor");
        $('#addOrg').show();
        loadTwoDataList("#OrgSol_Gestor","","data/orgaos.json","sigla","descricao");

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
      
   
   