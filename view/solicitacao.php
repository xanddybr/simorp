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
	background-color: #F7F7F8;
	}


</style>
	

<script>

	//LOAD PAGE EVENTS TYPE REQUEST
	$(document).ready(function(){
		HideFieldsAdesaoAta();
		
		LodaDataList("#OrgSol_Gestor","","data/orgaos.json","sigla","descricao");
		LodaDataList(null,"#unidades","data/unidades.json","sigla","descricao");
		DefaultMultInsert();
	})
	
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
				
			if($('#familiaList').val() != ""){
				
				let tpObjKey = $('#tipoObjeto').val();
				let familyKey = $('#familiaList').val();
				LodaDataListKey(familyKey,tpObjKey,"#descItem","data/itens.json","descricao");
				
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
						LodaDataList(null, "#familia","data/familiaMaterial.json","familia","id");
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

	//EVENT KEY TRIGGER ENTER 
	$(document).ready(function(){
		
		$(".telcas").on( "keypress", function( event ){
			if ( event.which == 13 ) {
				event.preventDefault();

			if($("#insMult").prop("checked")){
				InsertMultipleItens();
				
			} 

			if($("#insCat").prop("checked")){
				InsertItemSingle();
				
			}
			
		}
		
		}) 
	}) 

	//INSERT LINE IN LIST
	$(document).ready(function(){
		$("#btn-add").click(function(){

			if($("#insMult").prop("checked")){
				InsertMultipleItens();
					
				} 

			if($("#insCat").prop("checked")){
				InsertItemSingle();
					
			} 
			
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
		CountItens();
		})
	})

	//SAVE REQUEST
	$(document).ready(function(){
		$("#salvar").click(function (){
			alert($("#unidade").val());
		})						
	})
	
	//MASK CURRENCY FORMAT
	$(document).ready(function(){
        $(".dinheiro").mask('#.##9,99',{reverse: true});
    })

	//ENABLE MULTI-INSERCTION MODE
	$(document).ready(function(){
		$("#insMult").click(function(){
			DefaultMultInsert();
		})

	})

	//ENABLE SINGLE-INSERCTION MODE
	$(document).ready(function(){
		$("#insCat").click(function(){
			DefaultItemtoItem();
		})
		
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
												
						<label>Nº: do Processo</label>
					
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
													
										<input class="form-control col-lg-3" placeholder="Informe uma família" name='solRegPrec[]' id='familiaList' list='familia' required>
								<datalist id='familia'></datalist>
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
										<label>Descrição do objeto:</label>
										<textarea class="form-control" id='obs' rows="2" name='solRegPrec[]' ></textarea>
										<label>Itens na lista: </label><label id='qtdItensTotal'>&nbsp;0</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="btn-primary " id='insMult' name='inserction' for='contatact' checked/>&nbsp;&nbsp;<label>Multipla Inserção de ID's </label>&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' class="btn-primary" id='insCat' value='' name='inserction'>&nbsp;&nbsp;<label>Item á item pelo catalogo</label>
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
							<th></th>
							<th></th>
						</tr>
							<tr id='item'>
							<td style='width:30px;'><input type='checkbox' class='' id='checkAll'></td>
							<td><input class='form-control col-lg-1 telcas' placeholder='ID' type='text' id='idItem' name='solRegPrec[]' onkeypress="return false;"></td>
							<td><input class='form-control col-lg-5 telcas' placeholder='' list='descItem' type='text' id='descricao' name='solRegPrec[]'><datalist id='descItem'></datalist></td>
							<td><input class='form-control col-lg-4 telcas' type='text'  id='qtdItens' placeholder='' name='solRegPrec[]'></td>
							<td><input class='form-control col-lg-1 telcas' list='unidades'  id='unidade' placeholder='UNIDADE' name='solRegPrec[]'><datalist id='unidades'></datalist></td>
							<td><input class='form-control col-lg-1 telcas' id='' placeholder='' name='solRegPrec[]' value='' onkeypress="return false;"/></td>
							<td><input type="button" id="btn-add" value=' + ' name="" /></td>
							<td><input type="button" id="btn-rmv" value=' - ' name="" /></td>
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
