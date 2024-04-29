    
    var i = 2;
    function lineItem(){
                   
                $qtdItem = $("#qtdItem"+(i-1)).val();
                $valorItem = $("#valorItem"+(i-1)).val();

                var row = "<tr id='item_N"+ i +"'>"+
                "<td data-field='text' style='width:50px'><input type='checkbox' id='chekItem"+ i +"'  class='chbox'></td>"+
                "<td data-field='text'><input class='form-control' id='listItens' placeholder='INFORME O ITEM...' list='itens'  style='width: 738px;' name='solRegPrec[]' /><datalist id='itens'></datalist></td>"+
                "<td data-field='text'><input type='text' id='tpObjeto' value='' class='form-control' style='width:143px' name='solRegPrec[]' placeholder='' disabled></td>"+
                "<td data-field='text'><input id='uni' list='unidades' class='form-control' style='width:148px' name='solRegPrec[]' placeholder='';><datalist id='unidades'></datalist></td>"+
                "<td data-field='text'><input class='form-control dinheiro' style='width:148px' id='valorItem"+ i +"' name='solRegPrec[]' placeholder='R$' value=''/></td>"+
                "<td data-field='text'><input class='form-control' style='width:100px;' id='qtdItem"+ i +"' placeholder='' name='solRegPrec[]' value='' required /></td>"+
                "<td data-field='text'><input class='form-control dinheiro' style='width:148px' id='subTotal"+ i +"' placeholder='R$' name='solRegPrec[]' value='' disabled/></td>"+
                "<td data-field='text' style='width: 10px;'></td>"+
                "<td data-field='text' style='width: 10px;'></td>"+
                "</tr>";

                $("#table01:last").append(row);  
                $(".dinheiro").mask('#.##9,99',{reverse: true});
                $("#subTotal"+(i-1)).val(parseInt($("#qtdItem"+(i-1)).val()) * parseInt($("#valorItem"+(i-1)).val()));

                i++;

               } 
               
    function removeItem(){
        $(this).parent().remove();
    }

    function loadDataList(id1, id2, url, value, desc){
                $.getJSON(url, function(data) {
                $(data.registros).each(function(obj) {
                  option = "<option value=\"" + data.registros[obj][value].toUpperCase() + " - " + data.registros[obj][desc] + "\">" + data.registros[obj][value] + "</option>";
                    $(id1).append(option);
                    $(id2).append(option);
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
        $("#orgao01").append("Orgao Solicitante");
    }

    function MaskField(){

    }

    function AtaInterna(){
        $('#OrgSol_Gestor').empty();
        $('#Org_Aderente').empty();
        $('#orgao01').empty()
        $('#orgao02').empty()
        $('#orgao01').append("Aderente");
        $('#orgao02').append("Orgão Gestor");
        $('#addOrg').hide();
        loadDataList("#OrgSol_Gestor", "#Org_Aderente", "data/orgaos.json","sigla","descricao");
    }

    function AtaExterna(){
        $('#OrgSol_Gestor').empty();
        $('#Org_Aderente').empty();
        $('#orgao01').empty()
        $('#orgao02').empty()
        $('#orgao01').append("Aderente");
        $('#orgao02').append("Orgão Gestor");
        $('#addOrg').show();
        loadDataList("#OrgSol_Gestor", "", "data/orgaos.json","sigla","descricao");

    }
   
    function calcula(){

       
              
    }

    
	    

                   
   

        
     

    
               


  



	
