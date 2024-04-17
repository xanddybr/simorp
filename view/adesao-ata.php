<!DOCTYPE html>
<html>
<head>
<!-- validate -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bem Vindo ao SIMORP</title>
<link rel="icon" type="image/x-icon" href="img/ico/pencil.ico">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<link href="../css/bootstrap-table.css" rel="stylesheet">

<script src="../js/lumino.glyphs.js"></script>

<script>
	
</script>

</head>

<body>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<!--<ol class="breadcrumb">
				<li></li>
				<li class="active">Navegação</li>
			</ol>/.row-->
		</div>
		
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading" class="form-group"><label> Adesão à ATA Nº: </label> 000001 </div>
					  <div class="panel-body">
						
							<form role="form">
										<div class="form-group col-md-13">
												<div class="col-lg-2">
														<label>Nº do Processo</label>
														<input class="form-control" placeholder="Encontrado no SEI">
												</div>

												<div class="col-lg-3">
													<label>Tipo de Solicitação</label>
														<select class="form-control" name="tipoSolicitacao">
															<option value=''>< selecione um tipo ></option>
															<option value=""> MATERIAL </option>
															<option value=""> SERVIÇOS </option>
															<option value=""> MATERIAL/SERVIÇOS</option>
														</select>
												</div>

												<div class="col-lg-3">
													<label>Tipo da Ata</label>
														<select class="form-control" name="tipoAta">
															<option value=''><< SELECIONE O TIPO >></option>
															<option value="INTERNA"> INTERNA </option>
															<option value="EXTERNA"> EXTERNA </option>
															
														</select>
												</div>

												<div class="col-lg-2">
													<label>Data Recebimento</label>
													<input class="form-control" type="date" name="dataRecebimento">
												</div>

												<div class="col-lg-2">
													<label>Data Encaminhamento</label>
													<input class="form-control" type="date" name="dataEncaminhamento">
												</div>
										</div>
												
								    

								  <br><br><br><br>
								  
								 <div class="form-group col-lg-12">
									    <label>Orgão aderente</label>
										<select class="form-control" name="unidadeAdrente"> <!-- Componente alimentado pela Api com id e descrião dos orgãos -->
									   	<option value="">< selecione um orgão ></option>
										<option value=""> IEEA - INST ESTADUAL DE ENGENHARIA E ARQUITETURA</option>
										<option value=""> DER-RJ - FUND DEP ESTRADAS DE RODAGEM DO ESTADO DO RJ</option>
										<option value=""> EMOP - EMPRESA DE OBRAS PÚBLICAS DO ESTADO DO RJ</option>
										<option value=""> VICE - GOV VICE-GOVERNADORIA</option>
										<option value=""> PGE - PROCURADORIA GERAL DO ESTADO</option>
										<option value=""> FUNPERJ - FUNDO ESPECIAL DA PROCURADORIA GERAL DO ERJ</option>
										<option value=""> DPGE - DEFENSORIA PÚBLICA GERAL DO ESTADO</option>
   									 </select>
								 </div>
								
								 <div class="form-group col-lg-12">
									<label>Orgão Gerenciador da ATA</label> <!-- Componente alimentado pela Api com id e descrião dos orgãos -->
									<input class="form-control" placeholder="Auto Preenchimento"/>
									
							 </div>
								
							 <div class="form-group col-lg-12">
								<label>Observação</label>
								<textarea class="form-control" rows="2" name="observacao"></textarea>
							 </div>

								 

								<div><label class="form-group col-lg-8">Valor Total: <label>R$</label> -  </label>  <label class="form-group col-lg-2"> Total dos Ítens: (  ) - </label></label><button class="btn-primary pull-right" >Salvar Solicitação</button><button class="btn-default" id="btn-todo">Unidade Fornec.</button>
							</div>
								

						
							

							
						</form>
					
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->
	
	<!--/.row-->	

			
	<div class="col-lg-13">
		
		<div class="panel panel-default">
					<div class="panel-body">
				 		<table data-toggle="table" class="col-lg-12" >
						
						<tr>
							<th data-field="input">ID/Descricão</th>
							<th data-field="input">Uni</th>
							<th data-field="input">Valor</th>
							<th data-field="input">Qtd</th>
							<th data-field="input">Sub.Total</th>
							<th data-field="input"> + </th>
							<th data-field="input"> - </th>
							
						</tr>							
						
						<tr> 
							<td data-field="text"><select class="form-control" name="objeto">
								<option selected>< selecione um objeto ></option>
								<option value="">184169 - CARRO 1.0 GASOLINA MOTOR 4 CV BLINDADO </option>
								<option value="">158468 - MOTOCILCETA </option>
								<option value="">123459 - TRATOR AGRICOLA </option>
								<option value="">145258 - AVIÃO COMERCIAL </option>
								<option value="">145856 - COMPOSIÇÃO FERROVIÁRIA</option>
								<option>152589 - NAVIO DE CARGA</option>
							</select></td>

							
							
							<td data-field="text" style="width: 130px">
								<select class="form-control">
									<option selected>< Unid ></option>
									<option value="unidade">UN</option>
									<option value="kilo">KG</option>
									<option value="metro">MT</option>
									<option value="pacote">PC</option>
									<option value="pote">PT</option>
									<option value="fardo">FD</option>
									<option value="litro">LT</option>
									<option value="litro">ML</option>
								
							</select>
								
							</td>
							

							<td data-field="text" style="width: 120px"><input class="form-control" placeholder="Valor item"></td>
							<td data-field="text" style="width: 100px"><input class="form-control" placeholder="Qtd item"></td>
							<td data-field="text" style="width: 120px"><input class="form-control" placeholder=""></td>
							<td data-field="text" style="width: 70px">&nbsp;&nbsp;<button class="btn-primary" id="btn-todo">Add</button></td>
							<td data-field="text" style="width: 70px"><button class="btn-default" id="btn-todo">Del</button></td>
							
						</tr>
				</table>
				

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

	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- <script src="../js/chart.min.js"></script> -->
	<!-- <script src="../js/chart-data.js"></script> -->
	<!-- <script src="../js/easypiechart.js"></script> -->
	<!-- <script src="../js/easypiechart-data.js"></script> -->
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/bootstrap-table.js"></script>
	
	<script>
	/*	!function ($) {
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
		})*/

	</script>	

	<script>
	/*	!function ($) {
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
		})*/
	</script>
</body>

</html>
