    
    

        function loadDataList(id, url, value, desc){
            $.getJSON(url[0], function(data) {
                $(data.registros).each(function(obj) {
                  option = "<option value=\"" + data.registros[obj][value].toUpperCase() + " - " + data.registros[obj][desc] + "\">" + data.registros[obj][value] + "</option>";
                           $("#"+id).append(option);
            })
        })
    }

        function showFields() {

        }


        function hideFields() {

        }



        //MASK PROCESS NUMBER SEI
     $(function() {
            $('#seiprocess').mask('SEI-999999/999999/9999');
        });


        //INSERT LINE ITEM IN TABLE
        $(document).ready(function(){
            var i = 0;
            $("#btn-add").click(function(){
                   
                var row = "<tr id=listN"+ i +">"+
                "<td data-field='text' style='width:20px'><input type='checkbox' id='chekIten'  class=''></td>"+
                "<td data-field='text'><input class='form-control' id='listItens' placeholder='INFORME O ITEM...' list='itens'  style='width: 738px;' name='solRegPrec[]' /><datalist id='itens'></datalist></td>"+
                "<td data-field='text'><input type='text' id='tpObjeto' value='' class='form-control' style='width:143px' name='solRegPrec[]' placeholder='' disabled></td>"+
                "<td data-field='text'><input id='unid' list='unidades' class='form-control' style='width:148px' name='solRegPrec[]' placeholder='';><datalist id='unidades'></datalist></td>"+
                "<td data-field='text'><input class='form-control dinheiro' style='width:148px' type='text' id=''  name='solRegPrec[]' placeholder='R$' value=''/></td>"+
                "<td data-field='text'><input class='form-control' type='text' style='width:48px;' id='qtdItem' placeholder='' name='solRegPrec[]' value='' required /></td>"+
                "<td data-field='text'><input class='form-control dinheiro' style='width:148px'  placeholder='R$' name='solRegPrec[]' value='' disabled/></td>"+
                "<td data-field='text' style='width: 70px;'>&nbsp&nbsp</td>"+
                "<td data-field='text' style='width: 70px;'>&nbsp&nbsp</td>"+
                "</tr>";
                
                $("#table01:last").append(row);
                $(".dinheiro").mask('#.##9,99',{reverse: true});
                
                i++;
                                
                }) 
                       $("#btn-rmv"+i).click(function(){
                            $("#table01").hide();
                
           })                       
     })      

     $(document).ready(function(){
        $(".dinheiro").mask('#.##9,99',{reverse: true});
    })
               
    $(document).ready(function (){

            $("#tipoAta").hide();
            $("#l_tipoAta").hide();
            $("#nata").hide();
            $("#l_nata").hide();
            $("#aderente").hide();
            $("#l_aderente").hide();
            $("#addOrg").hide();
            $("#desfOptions").hide();
        
        $('#tipoSolici').change(function (){

            if ($('#tipoSolici').val() == 'regPreco') {
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

            if ($('#tipoSolici').val() == 'adesaoAta') {
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
            
            })
       })

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

        

            /*
                    $("#tipoAta").change(function() {      

                        if($("#tipoAta").val() == "INTERNA") {
                        option = "<option value=\"" + data.registros[obj]['sigla'].toUpperCase() + " - " + data.registros[obj]['descricao'] + "\">" + data.registros[obj]['sigla'] + "</option>";
                            $("#Org_aderente").append(option);	
                        }

                        if($("#tipoAta").val() == "EXTERNA") {
                            $("#Org_aderente").empty();
                        }

                        if($("#tipoAta").val() == "") {
                            $("#Org_aderente").empty();
                        }
            
                        }) 
                    })
                })
           

            
*/
       
      

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

        
     

    
               


  



	
