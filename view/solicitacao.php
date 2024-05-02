<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bem Vindo ao SIMORP</title>
<link rel="icon" type="image/x-icon" href="img/ico/pencil.ico">

<!-- libraires  -->
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">


<!-- libraires -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="./js/jquery.mask.min.js"></script>
<script src="./js/solicitacao_set.js"></script>

<script>

	//LOAD PAGE EVENTS TYPE REQUEST
	$(document).ready(function(){

	HideFieldsAdesaoAta();

	alert(loadDataList());
		

	})

	//CHECK ALL CHECKBOXES
	$(document).ready(function(){
		$("#checkAll").click(function(){
			$("input[type=checkbox]").prop('checked', $(this).prop('checked'));
		})
	})

	//CHANGE TYPE REQUEST
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

	//INSERT ITEM IN LIST
	$(document).ready(function(){
		$("#btn-add").click(function(){
			Insert(rowItem());
						
		}) 
	})

	 //INSERT MASK SEI NUMBER PROCESS
	$(document).ready(function(){
            $('#seiprocess').focus(function (){
              $('#seiprocess').val("SEI-");
              	$('#seiprocess').mask('SEI-999999/999999/9999');
        })
    })

    //CLEAR MASK SEI
    $(document).ready(function(){
        $('#seiprocess').focusout(function (){
            $('#seiprocess').val("");
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
			removeItens();
		})
	})

	//SAVE REQUEST
	$(document).ready(function(){
		$("#salvar").ready(function(){
			
		})
	})
	
	//MASK CURRENCY FORMAT
	$(document).ready(function(){
        $(".dinheiro").mask('#.##9,99',{reverse: true});
    })

	



</script>


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
								   <option value="regPreco">REGISTRO DE PREÇO</option>
								   <option value="adesaoAta">ADESÃO A ATA</option>
								</select>
								</div>



												<div class="col-lg-3">
													<label>Tipo de Objeto</label>
													<select id='tipoObjeto' class="form-control" placeholder="INFORME O TIPO DE OBJETO" onChange="";  name='solRegPrec[]'>
														    <option value="selecione"><< SELECIONE UM TIPO >></option>
															<option value="material">MATERIAL</option>
															<option value="serviço">SERVIÇOS</option>
															<option value="ambos">MATERIAL/SERVIÇO</option>
													</select>
												</div>
											
												<div class="col-lg-2">
													<label>Data Recebimento</label>
													<input class="form-control" type="date" placeholder="" type="" id='' name='solRegPrec[]' maxlength="10" required>
												</div>

												<div class="col-lg-2">
													<label>Data Encaminhamento</label>
													<input class="form-control" type="date" placeholder="" type="" id='' name='solRegPrec[]' maxlength="10" required>
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

								<div class="col-lg-2">
											
								<label id='l_nata'>Nº DA ATA</label>
													
								<input class="form-control col-lg-6" placeholder="Nº DA ATA" name='solRegPrec[]' id='nata' value="" required>
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
							<th data-field="name" style='width: 20px'><input type='checkbox' id='checkAll'  class=""></th>
							<th data-field="name" style='width: 680px;'>Descricão</th>
    						<th data-field="name" style='width: 110px'>Tipo</th>
							<th data-field="name" style='width: 120px'>Uni</th>
							<th data-field="name" style='width: 120px'>Valor Item</th>
							<th data-field="name" style='width: 100px'>Qtd</th>
							<th data-field="name" style='width: 140px'>Sub.Total</th>
							<th data-field="name" style='width: 0px;'><input type="button" id="btn-add" value=' + ' name="" /></th>
							<th data-field="name" style='width: 10px;'><input type="button" id="btn-rmv" value=' - ' name="" /></th>
						</tr>

						<!-- <tr id='item_N1'>
							<td data-field='text' style='width:50px'><input type='checkbox' id='chekItem1'  class='chbox'></td>
							<td data-field='text'><input class='form-control' id='listItens' placeholder='INFORME O ITEM...' list='itens'  style='width: 738px;' name='solRegPrec[]' /><datalist id='itens'></datalist></td>
							<td data-field='text'><input type='text' id='tpObjeto' value='' class='form-control' style='width:143px' name='solRegPrec[]' placeholder='' disabled></td>
							<td data-field='text'><input id='uni' list='unidades' class='form-control' style='width:148px' name='solRegPrec[]' placeholder='';><datalist id='unidades'></datalist></td>
							<td data-field='text'><input class='form-control dinheiro' style='width:148px' id='valorItem1' name='solRegPrec[]' placeholder='R$' value=''/></td>
							<td data-field='text'><input class='form-control' style='width:100px;' id='qtdItem1' placeholder='' name='solRegPrec[]' value='' required /></td>
							<td data-field='text'><input class='form-control dinheiro' style='width:148px' id='subTotal1' placeholder='R$' name='solRegPrec[]' value='' disabled/></td>
							<td data-field='text' style='width: 10px;'></td>
							<td data-field='text' style='width: 10px;'></td>
						</tr>row-->	
				</table>

				</form>
					<script>

					/*	$(function () {
							$('#hover, #striped, #condensed').click(function () {
								var classes = 'table';
					
								if ($('#hover').prop('checked')) {
									classes += ' table-hover';
								}
								if ($('#condensed').prop('checked')) {
									classes += ' table-condensed';
								}
								$('#table-style').bootstrapTable('destroy')
									.bootstrapTable({
										classes: classes,
										striped: $('#striped').prop('checked')
									});
							});
						});
					
						function rowStyle(row, index) {
							var classes = ['active', 'success', 'info', 'warning', 'danger'];
					
							if (index % 2 === 0 && index / 2 < classes.length) {
								return {
									classes: classes[index / 2]
								};
							}
							return {};
						}*/

					</script>
				</div>
			</div>
		</div>
	</div><!--/.row-->	
		
</div><!--/.main-->

	
</body>

</html>
