<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<title>Bem Vindo ao SIMORP</title>
<link rel="icon" type="image/x-icon" href="img/ico/pencil.ico">

<!-- libraires  -->

<link href="./css/styles.css" rel="stylesheet">
<link href="./css/bootstrap.min.css" rel="stylesheet">

<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>

<script src="./js/jquery.mask.min.js"></script>
<script src="./js/solicitacao_set.js"></script>

<style>

	tr:nth-child(even) {
	background-color: #f2f2f2;
	}


</style>
	

<script>
	
	//CHECK ALL CHECKBOXES
	$(document).ready(function(){
		$("#checkAll").click(function(){
			$("input:checkbox").prop('checked', $(this).prop('checked'));
		})
	})

	//TYPE REQUESTING
	$(document).ready(function(){
		$('#tipoSolici').change(function(){
			if($('#tipoSolici').val()=='adesaoAta'){
				ShowFieldsAdesaoAta();
			}
			if($('#tipoSolici').val()=='regPreco'){
				HideFieldsAdesaoAta();
			}
		})
	})
	
	//CHANGE TYPE ATA
	$(document).ready(function(){
		$('#tipoAta').change(function(){
			if($('#tipoAta').val()=='interna'){
				AtaInterna();
			}
			if($('#tipoAta').val()=='externa'){
				AtaExterna();
			}
		})
	})

	//CHANGE FAMILY
	$(document).ready(function(){
		$('#familiaList').change(function(){

			if($('#familiaList').val() !=""){
				let tpObjKey = $('#tipoObjeto').val();
				let familyKey = $('#familiaList').val();
				$("#descItem").empty();
					$("#descricao").val("");
				LodaDataListKey(familyKey,tpObjKey,"#descItem","data/itens.json","descricao","tipo");	
			} else {
				$("#descItem").empty();
			}
			
		})
	})

	//CHANGE TYPE OBJECT
	$(document).ready(function(){

		$('#tipoObjeto').change(function(){
			if($('#tipoObjeto').val()=='selecione'){
				$('#familia').empty();
				exit();
			}

			if($('#tipoObjeto').val()=='MATERIAL'){
				$('#familia').empty();
				  	$('#descricao').val("");
					  	$('#familiaList').val("");
				LodaDataList(null, "#familia","data/familiaMaterial.json","familia","tipo");
				exit();
			}

			if($('#tipoObjeto').val()=='SERVICO'){
				$('#familia').empty();
					$('#descricao').val("");
						$('#familiaList').val("");
				LodaDataList(null, "#familia","data/familiaServicos.json","familia","tipo");
				exit();
			}
		})
	})

	//INSERT LINE IN LIST
	$(document).ready(function(){
		$("#btn-add").click(function(){
		Insert();
			
		}) 
	})
		
	//INSERT MASK SEI NUMBER PROCESS
	$(document).ready(function(){
            $('#seiprocess').focus(function (){
              	$('#seiprocess').mask('SEI-000000/000000/0000');
        })
    })

 	//RESET FIELDS
	$(document).ready(function(){
		$("#reset").click(function(){
			HideFieldsAdesaoAta();
		})
	})
	
	//REMOVE ITEM IN LIST
	$(document).ready(function (){
		$("#btn-rmv").click(function(){
		RemoveItens();
		})
	})

	//SAVE REQUEST
	$(document).ready(function(){
		$("#salvar").click(function (){
			
		})						
	})
	
	//MASK CURRENCY FORMAT
	$(document).ready(function(){
        $(".dinheiro").mask('#.##9,99',{reverse: true});
    })

	//LOAD PAGE EVENTS TYPE REQUEST
	$(document).ready(function(){
		
		HideFieldsAdesaoAta();
		$('#familia').empty();
		LodaDataList("#OrgSol_Gestor","","data/orgaos.json","sigla","descricao");
		LodaDataList(null,"#unidades","data/unidades.json","sigla","descricao");
		

	})

	//APPEND CONTENT ITEN
/*	$(document).ready(function(){
		$("#idItens").focusout(function(){
			$("#descricao").val($("#idItens").val());
		})
	})*/

		
</script>

<!-- Modal -->
<div id="mydiv"><div>
			
<!-- Modal -->
<body>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<!--<ol class="breadcrumb">
				<li><a href=""><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"></li>
			</ol>row-->
		</div>
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
						
					<div class="panel-heading" class="form-group">
												
						<label>Solicitação Nº:</label>
					
					</div>

								
					   <div class="panel-body" style=''>
								<form id='frm' method='POST' action=''>
								 
								<div class="form-group col-md-13">

								<div class="col-lg-2">
											
								<label>Nº do Processo</label>
													
								<input class="form-control" placeholder="SEI-999999/999999/9999" name='solRegPrec[]' id='seiprocess' value="" required></div>


								<div class="col-lg-3">
									<label>Tipo de Solicitação</label>
								<select id='tipoSolici' class="form-control" name='solRegPrec[]'>
								   <option value="regPreco">1 - REGISTRO DE PREÇO</option>
								   <option value="adesaoAta">2 - ADESÃO A ATA</option>
								</select>
								</div>
										

												<div class="col-lg-3">
													<label>Tipo de Objeto</label>
													<select id='tipoObjeto' class="form-control" placeholder="INFORME O TIPO DE OBJETO" onChange="";  name='solRegPrec[]'>
														    <option value="selecione"><< SELECIONE UM TIPO >></option>
															<option value="MATERIAL">1 - MATERIAL</option>
															<option value="SERVICO">2 - SERVICOS</option>
															<option value="selecione">3 - MATERIAL/SERVICO</option>
													</select>
												</div>
											
												<div class="col-lg-2">
													<label>Data Recebimento</label>
													<input class="form-control" type="date" placeholder="" type="" id='dtRec' name='solRegPrec[]' maxlength="10" required>
												</div>

												<div class="col-lg-2">
													<label>Data Encaminhamento</label>
													<input class="form-control" type="date" placeholder="" type="" id='idEnc' name='solRegPrec[]' maxlength="10" required>
												</div>
										</div>
										
								  <br><br><br><br>

								  <div class="col-lg-5">
									<label id='l_tipoAta'>Tipo da Ata</label>
									 <select id='tipoAta' class="form-control">
									 	<option value="interna" selected> INTERNA - ÓRGÃOS OU ENTIDADES DA ADMINISTRAÇÃO PÚBLICA ESTADUAL DIRETA, AUTÁRQUICA E FUNDACIONAL </option>
										<option value="externa"> EXTERNA - ÓRGÃOS OU ENTIDADES MUNICIPAIS, DISTRITAIS, DE OUTROS ESTADOS E FEDERAIS. </option>	
								  </select> 
							    </div>

								<div class="col-lg-1">
											
								<label id='l_nata'>Nº da ATA</label>
													
								<input class="form-control col-lg-6" placeholder="Nº DA ATA" name='solRegPrec[]' id='nata' value="" required>
							    </div>

								<div class="col-lg-4">
											
								<label id='l_familia'>Familia</label>
													
								<input class="form-control col-lg-3" placeholder="Informe uma família" name='solRegPrec[]' id='familiaList' list='familia' required><datalist id='familia'></datalist>
							    </div>

								<div class="col-md-2">
											
								<label id='l_vTotal'>Valor Total:</label>
													
								<input class="form-control col-lg-3 dinheiro" placeholder="R$" name='solRegPrec[]' id='vTotal' value="" required>
							    </div>

								<br><br><br><br>
								<div class="form-group col-lg-5" id='Org01'>
									    <label id='orgao01'></label> 
									    <input type='text' class="form-control" list='OrgSol_Gestor' name='solRegPrec[]' order='asc'>
								 <datalist id='OrgSol_Gestor'></datalist>
								 </div>

								 <div class="form-group col-lg-5" id='Org02'>
									    <label id='orgao02'></label> 
									    <input id='aderente' type='text' class="form-control" list='Org_Aderente' name='solRegPrec[]'>
								 <datalist id='Org_Aderente'></datalist>
								 </div>

								 <br>
								 <input id='addOrg' type="button" class="btn" value='add'>
								 <div class="form-group col-lg-12">
										<label>Observação</label>
										<textarea class="form-control" id='obs' rows="2" name='solRegPrec[]' ></textarea>
										<label>Itens na lista: 0</label><label id='qtdItensTotal' ></label><br>
								</div><br>
								 
								 <div>
								 

								</label>
								
								<input type="button" class="btn-primary pull-right" id='salvar' name='salvar' value='Salvar'></div>
									
				</div>
				
			</div><!-- /.col-->
			
		</div><!-- /.row-->
		
	</div><!--main-->
	
	<!--/.row-->	

			
	<div class="col-lg-13">
		  <div class="panel panel-default">
				<div class="panel-body">
					<table data-toggle="table" id='table01' class="col-lg-12">
						<tr>
							<th style='width: 30px;'></th>
							<th class="col-lg-1"></th>
							<th class="col-lg-5"></th>
    						<th class="col-lg-4"></th>
							<th class="col-lg-1"></th>
							<th class="col-lg-1"></th>
							<th><input type="button" id="btn-add" value=' + ' name="" /></th>
							<th><input type="button" id="btn-rmv" value=' - ' name="" /></th>
						</tr>
							<tr id='item' >
							<td style='width:30px;'><input type='checkbox' class='' id='checkAll'></td>
							<td><input class='form-control col-lg-1' placeholder='ID' type='text' id='idItem' name='solRegPrec[]' onkeypress="return false;"></td>
							<td><input class='form-control col-lg-5' placeholder='DESCRIÇÃO' list='descItem' type='text' id='descricao' name='solRegPrec[]'><datalist id='descItem'></datalist></td>
							<td><input class='form-control col-lg-4' type='text'  id='familiaItem' placeholder='FAMILIA' name='solRegPrec[]' onkeypress="return false;"></td>
							<td><input class='form-control col-lg-1' list='unidades'  id='unidade' placeholder='UNIDADE' name='solRegPrec[]'><datalist id='unidades'></datalist></td>
							<td><input class='form-control col-lg-1' id='qtdItens' placeholder='QUANTIDADE' name='solRegPrec[]' value='' required /></td>
							<td></td>
							<td></td>
						</tr>
						
					</table>
			    </form>

					<script>
					</script>
				</div>
			</div>
		</div>
	</div><!--/.row-->	
		
</div><!--/.main-->


	
</body>



</html>
