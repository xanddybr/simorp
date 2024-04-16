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
<link href="./css/bootstrap-table.css" rel="stylesheet">

<!-- libraires -->
<script src="../js/lumino.glyphs.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-1.8.3.min.js" charset="utf-8"></script>
<script src="./js/fieldsettings.js"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>


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
												
						<label>Registro de preço Nº:</label>
					
					</div>

								
					   <div class="panel-body" style='height:500;'>
								<form id='frm' method='POST' action=''>
								 
								<div class="form-group col-md-13">

								<div class="col-lg-2">
											
								<label>Nº do Processo</label>
													
								<input class="form-control" placeholder="SEI-" name='solRegPrec[]' id='seiprocess' value="" required></div>


								<div class="col-lg-3">
									<label>Tipo de Solicitação</label>
								<select id='tipoSolici' class="form-control" name='solRegPrec[]'>
									<option value=""><< SELECIONE O TIPO DE SOLICITAÇÃO >></option>
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
									 	<option value="selecione"><< SELECIONE O TIPO >></option>
									 	<option value="INTERNA"> INTERNA - ORGÃO ADERERINDO A ATA DE OUTRO ORGÃO DO MESMO ESTADO </option>
					                 	<option value="EXTERNA"> EXTERNA - ORGÃO ADERERINDO A ATA DE OUTRO ORGÃO DE OUTRO ESTADO </option>					
								  </select> 
							    </div>

								<div class="col-lg-2">
											
								<label id='l_nata'>Nº DA ATA</label>
													
								<input class="form-control col-lg-6" placeholder="Nº DA ATA" name='solRegPrec[]' id='nata' value="" required>
							    </div>

								<br><br><br><br>
								<div class="form-group col-lg-5" id='Org01'>
									    <label id='l_OrgSol_Gestor'>Orgão Solicitante</label> 
									    <input type='text' class="form-control" list='OrgSol_Gestor' name='solRegPrec[]' order='asc'>
								 <datalist id='OrgSol_Gestor'></datalist>
								 </div>
				 	 

								 <div class="form-group col-lg-5" id='Org02'>
									    <label id='l_aderente'>Orgão Aderente</label> 
									    <input id='aderente' type='text' class="form-control" list='Org_aderente' name='solRegPrec[]'>
								 <datalist id='Org_aderente'></datalist>

								 </div>

								 <br>
								 <input id='addOrg' type="button" class="btn" value='add'>
						 
								
								 <div class="form-group col-lg-12">
										<label>Observação</label>
										<textarea class="form-control" id='obs' rows="2" name='solRegPrec[]' ></textarea>
								 </div><br>
								 <div>
								</label>
																
								<input type="button" class="btn-primary pull-right" name='salvar' value='Salvar'></div>
									
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
							<th data-field="name">Descricão</th>
						<!--<th data-field="name">Tipo Objeto</th> -->
							<th data-field="name">Tipo</th>
							<th data-field="name">Uni</th>
							<th data-field="name">Valor Item</th>
							<th data-field="name">Qtd</th>
							<th data-field="name">Sub.Total</th>
							<th data-field="name"> + </th>
							<th data-field="name"> - </th>
						</tr>
					<tr> 
							<td data-field="text">
								<input class="form-control" id='listItens' placeholder="INFORME O ITEM..." list='itens'  style='width: 700px;' name="solRegPrec[]" autocomplete="off" enable='false' />
								<datalist id='itens'></datalist>
							</td>
									
							<td data-field="text">

								<input type='text' id='tpObjeto' value='' class="form-control" style='width:150px' name="solRegPrec[]" placeholder='' disabled>
								 
    						</td>
							<td data-field="text">

								<input id='unid' list='unidades' class="form-control" style='width:150px' name="solRegPrec[]" placeholder='';>
								<datalist id="unidades" ></datalist>
 
    						</td>
							
							<td data-field="text" style="width: 120px"><input class="form-control dinheiro" style='width:150px' type="text" id="valorUni"  name="solRegPrec[]" placeholder="R$" value="" required/></td>
							<td data-field="text" style="width: 100px"><input class="form-control"  type="text" id="qtdItem" placeholder="" name="solRegPrec[]" value="" required /></td>
							<td data-field="text" style="width: 120px"><input class="form-control dinheiro" style='width:150px' id="valorTotal" placeholder="R$" name="solRegPrec[]" value="" required /></td>
							<td data-field="text" style="width: 70px">&nbsp;&nbsp;<input type="button" id="btn-add" value='add' name="" /></td>
							<td data-field="text" style="width: 70px"><input class="btn-rmv" type="button" id="" name="" value='Rmv'></button></td>
						</tr>
				</table>
				</form>
					<script>
						$(function () {
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
						}
					</script>
				</div>
			</div>
		</div>
	</div><!--/.row-->	
		
</div><!--/.main-->

	<script src="../lib/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../js/jquery-1.11.1.min.js"></script>
	
	
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus")
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show');
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide');
		})

	</script>	

	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus")
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show');
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide');
		})
	</script>
</body>

</html>
