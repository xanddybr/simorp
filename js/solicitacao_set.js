    
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
        $("#l_aderente").show();
        $("#addOrg").show();
        $("#desfOptions").show();
        $("#l_OrgSol_Gestor").empty();
        $("#l_OrgSol_Gestor").append("Orgão Gestor");
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
        $("#l_aderente").hide();
        $("#addOrg").hide();
        $("#desfOptions").hide();
        $("#l_OrgSol_Gestor").empty();
        $("#l_OrgSol_Gestor").append("Orgão Solicitante");
    }

    function MaskField(){

    }

    function UperCaseFields(){

    }

    function Multiplicador(){

    }

    var i = 1;
    function insertItem(){

        var row = "<tr id=item_N"+ i +">"+
                    "<td data-field='text' style='width:50px'><input type='checkbox' id='chekIten'  class='chbox'></td>"+
                    "<td data-field='text'><input class='form-control' id='listItens' placeholder='INFORME O ITEM...' list='itens'  style='width: 738px;' name='solRegPrec[]' /><datalist id='itens'></datalist></td>"+
                    "<td data-field='text'><input type='text' id='tpObjeto' value='' class='form-control' style='width:143px' name='solRegPrec[]' placeholder='' disabled></td>"+
                    "<td data-field='text'><input id='uni' list='unidades' class='form-control' style='width:148px' name='solRegPrec[]' placeholder='';><datalist id='unidades'></datalist></td>"+
                    "<td data-field='text'><input class='form-control dinheiro' style='width:148px' id=valorItem"+ i +" name='solRegPrec[]' placeholder='R$' value=''/></td>"+
                    "<td data-field='text'><input class='form-control' style='width:100px;' id=qtdItem"+ i +" placeholder='' name='solRegPrec[]' value='' required /></td>"+
                    "<td data-field='text'><input class='form-control dinheiro' style='width:148px' id=subTotal"+ i +" placeholder='R$' name='solRegPrec[]' value='' disabled/></td>"+
                    "<td data-field='text' style='width: 10px;'></td>"+
                    "<td data-field='text' style='width: 10px;'></td>"+
                  "</tr>";

                  $("#table01:last").append(row);
                  $(".dinheiro").mask('#.##9,99',{reverse: true});
                
                  i++;
     
    }

   
    function teste(){

       $("#subTotal"+2).val(parseInt($("#qtdItem"+2).val()) * parseInt($("#valorItem"+2).val()));
              
    }

    
	$(document).ready(function(){
		$("#valorItem2").click(function(){
			alert("vc clicou em qtd 2");
		})
	})

    
        //MASK PROCESS NUMBER SEI
    $(function() {
            $('#seiprocess').mask('SEI-999999/999999/9999');
    });





                 
 
    $(document).ready(function (){
            $('#seiprocess').focus(function (){
                $('#seiprocess').val("SEI-");
        })
    })

    $(document).ready(function (){
        $('#seiprocess').focusout(function (){
            $('#seiprocess').val("");
        })
    })

        
/*
        $(document).ready(function (){
            $('#tipoObjeto').change(function (){
            var itenList, url, option;
            option = $("#tipoObjeto").val();
            url  = 'data/itens.json';	
            $('#itens').empty();
            
            $.getJSON(url, function(data) {
            $(data.itens).each(function(obj) {
            if(data.itens[obj]['tipo'] == option) {
            itenList = "<option value=\"" + data.itens[obj]['id'] + " - " + data.itens[obj]['artigo'].toUpperCase() + "\">\"" + data.itens[obj]['descricao'].toUpperCase() + "\"</option>";
            
            $('#itens').append(itenList);
                $('#tipoObjeto').prop('disabled', true);
                    $("#tipoSolici").prop('disabled', true);
                        $("#listItens").focusout(function(){
                            $("#tpObjeto").val(data.itens[obj]['tipo'].toUpperCase());
                    
                })
            }

            if(option == 'ambos') {
            itenList = "<option value=\"" + data.itens[obj]['id'] + " - " + data.itens[obj]['artigo'].toUpperCase() + "\">\"" + data.itens[obj]['descricao'].toUpperCase() + "\"</option>";
                        
            $('#itens').append(itenList);
                $('#tipoObjeto').prop('disabled', true);
                $("#tipoSolici").prop('disabled', true);
                    $("#listItens").focusout(function(){
                        $("#tpObjeto").val(data.itens[obj]['tipo'].toUpperCase());
                    

                        })
                        }
                    })
                })	
            })
        })
       

  

            
*/
      
      
/*
        $(document).ready(function (){
            var itenList, url;
            url = 'data/unidades.json';
            $.getJSON(url, function(data) {
            $(data.unidades).each(function(obj) {
            unidadesList = "<option value=" + data.unidades[obj]['sigla'] + ">" + data.unidades[obj]['descricao'] + "</option>";
            $('#unidades').append(unidadesList);
            

                })	
            })
        })
*/
        
     

    
               


  



	
