        //MASK DATE
        $(function() {
            $(".mskdate").mask("99/99/9999");
        });

        //MASK CURRENCY REAL-BR
        $(function() {
            $('.dinheiro').mask('#.##9,99', {reverse: true});
        });

        //MASK PROCESS NUMBER SEI
        $(function() {
            $('#seiprocess').mask('SEI-999999/999999/9999');
        });


        $(document).ready(function (){

            $("#tipoAta").hide();
            $("#l_tipoAta").hide();
            $("#nata").hide();
            $("#l_nata").hide();
            $("#aderente").hide();
            $("#l_aderente").hide();
            $("#addOrg").hide();
        
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
                var orgao, url;
                url = 'data/orgaos.json';
                $.getJSON(url, function(data) {
                $(data.registros).each(function(obj) {

                        orgao = "<option value=\"" + data.registros[obj]['sigla'] + " - " + data.registros[obj]['uniGestora'].toUpperCase() + "\"></option>";
                        $("#OrgSol_Gestor").append(orgao);
                    
                })
                  
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


        $(document).ready(function (){
            $("#tipoAta").change(function() { 
                var orgao, url;
                url = 'data/orgaos.json';
                $.getJSON(url, function(data) {
                $(data.registros).each(function(obj) {


                    if($("#tipoAta").val() == "INTERNA") {
                        orgao = "<option value=\"" + data.registros[obj]['sigla'] + " - " + data.registros[obj]['uniGestora'].toUpperCase() + "\"></option>";
                        $("#OrgSol_Gestor").append(orgao);
                        $("#Org_aderente").append(orgao);	
                    }

                    if($("#tipoAta").val() == "EXTERNA") {
                        orgao = "<option value=\"" + data.registros[obj]['sigla'] + " - " + data.registros[obj]['uniGestora'].toUpperCase() + "\"></option>";
                        $("#OrgSol_Gestor").append(orgao);
                        $("#Org_aderente").empty();
                    }

                    if($("#tipoAta").val() == "selecione") {
                        orgao = "<option value=\"" + data.registros[obj]['sigla'] + " - " + data.registros[obj]['uniGestora'].toUpperCase() + "\"></option>";
                        $("#Org_aderente").empty();
                    }


                })
            })
        })
        })

    

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


        //INSERT LINE ITEM IN TABLE
        $(document).ready(function(){
            $("#btn-add").click(function(){

                let i = 0;
                do { 

                var row = "<tr>" +
                "<td> <input class='form-control' name='solRegPrec[]' list='itens' placeholder='INFORME O ITEM...' />" +
                "<datalist id='itens'></datalist> </td>" + 
                "<td><input type='text' id='tpObjeto' value='' class='form-control' style='width:150px' name='solRegPrec[]' placeholder='' disabled></td>" +
                "<td> <input list='unidades' class='form-control' placeholder='' name='solRegPrec[]'>" +
                "<datalist id='unidades'></datalist>"+
                "</td>" +
                "<td> <input class='form-control dinheiro' type='text' id='valorUni' placeholder='R$' value='' name='solRegPrec[]' required/> </td>" +
                "<td> <input class='form-control' type='text' id='qtdItem' placeholder='' name='solRegPrec[]' value='' required /> </td>" +
                "<td> <input class='form-control dinheiro' id='valorTotal' placeholder='R$' name='solRegPrec[]' value='' required /> </td>" +
                "<td>&nbsp;&nbsp;</td>" +
                "<td><input class='btn-rmv' type='button' id='' name='' value='Rmv'></td></tr>";

                //BIND NEW LINE	AT TABLE
                $("#table01:last").append(row);	
                i+=1;
                } while (i < 1);
            })		
            
        })


  



	
