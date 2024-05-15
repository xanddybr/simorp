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
					<div class="panel-heading" class="form-group"><label> Catálago SIGA: Consulta de itens por tipo e familia </label> </div>
					  <div class="panel-body">
						
							<form role="form">
										<div class="form-group col-md-13">
												<div class="col-lg-2">
														<label>ID/ Descrição</label>
														<input class="form-control" placeholder="Encontrado no SEI">
												</div>

												<div class="col-lg-3">
													<label>Tipo de Objeto</label>
														<select class="form-control" name="tipoSolicitacao">
															
														</select>
												</div>

												<div class="col-lg-3">
													<label>Familia</label>
														<select class="form-control" name="tipoAta">
															
															
														</select>
												</div>

												
												


										</div>
												
								    

								  <br><br><br><br>
								  
								
								
								
								
					
								 

								
						
							

							
						</form>
					
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->
	
	<!--/.row-->	

			
	<div class="col-lg-13">
		
		<div class="panel panel-default">
					<div class="panel-body">
						<table data-toggle="table" id='table01' class="col-lg-12">
							<tr>
								<th class="col-lg-1"></th>
								<th class="col-lg-6"></th>
								<th class="col-lg-4"></th>
								<th class="col-lg-1"></th>
																
							</tr>
								<tr id='item' >
								<td><input class='form-control col-lg-1' placeholder='ID' type='text' id='idItem' name='solRegPrec[]' onkeypress="return false;"></td>
								<td><input class='form-control col-lg-6' placeholder='Informe OS IDs que deseja adicionar a lista' list='descItem' type='text' id='descricao' name='solRegPrec[]'><datalist id='descItem'></datalist></td>
								<td><input class='form-control col-lg-4' type='text'  id='familiaItem' placeholder='FAMILIA' name='solRegPrec[]' onkeypress="return false;"></td>
								<td><input class='form-control col-lg-1' list='unidades'  id='unidade' placeholder='UNIDADE' name='solRegPrec[]'><datalist id='unidades'></datalist></td>
														
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
