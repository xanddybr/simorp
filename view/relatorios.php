<!DOCTYPE html>
<html>
<head>
<!-- validate -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SIMORP-BETA</title>
<link rel="icon" type="image/x-icon" href="img/ico/pencil.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/lumino.glyphs.js"></script>
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">

<!--<link href="./css/datepicker3.css" rel="stylesheet"> -->


<!--Icons

<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>

-->
<script>
	const userNow1 = sessionStorage.getItem("userNow")
	$(document).ready(function(){
	$("#demo").append(userNow1)
})
</script>

</head>

<body>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<!--<ol class="breadcrumb">
				<li><a href=""><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"></li>
			</ol>/.row-->
		</div>
		
		
		
		<div class="col-lg-13">
			<div class="panel panel-default">
				<div class="panel-heading" class="form-group"><label> Relatórios</label> <!----> </div>
				  <div class="panel-body">
					
						<form role="form">
									<div class="form-group col-md-13">

                                    <!--	<div class="col-lg-3">
												<select class="form-control" name="tipoRelatorio">
														<option value=''>< selecione um tipo de relatorio ></option>
														<option value=""> Solicitação de Registro </option>
														<option value=""> Adesão à ATA </option>
													</select>
											</div>


											<div class="col-lg-2">
												
												<select class="form-control" name="tipoAta">
													<option value=''>< Selecione um campo ></option>
													<option value=""> Orgão Gerenciador </option>
													<option value=""> Orgão Aderente </option>
													<option value=""> Nº do processo </option>
													<option value=""> Tipo de Objeto </option>
													
												</select>
										</div>

											<div class="col-lg-3">
																	<input class="form-control" placeholder="Parametro da busca">
											</div>

											

											

											<div class="col-lg-2">
												
												<input class="form-control" type="date" name="dataInicio">
											</div>
											
											<div class="col-lg-2">
												
												<input class="form-control" type="date" name="dataFim">
											</div>
									</div>-->

								</form>
				
								
			<div class="col-lg-13">
			
				<div class="panel panel-default">
				
					<div class="panel-body">
					
						<table data-toggle="table" data-url="data/registros.json" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="usuario" data-sortable="true"><b>Usuário</b></b></th>
						        <th data-field="tipoSol" data-sortable="true"><b>Tipo de Solicitação</b></th>
						        <th data-field="orgaoGestor" data-sortable="true"><b>Orgão Gestor</b></th>
								<th data-field="orgaoAderente" data-sortable="true"><b>Orgão Aderente</b></th>
								<th data-field="tipoObjeto" data-sortable="true"><b>Tipo de Objeto</b></th>
								<th data-field="dataReceb" data-sortable="true"><b>Recebimento</b></th>
								<th data-field="dataEncam" data-sortable="true"><b>Encaminhamento</b></th>
								<th data-field="valorTotal" data- data-sortable="true"><b>Total</b></th>
							</tr>
						    </thead>
							<div class="col-lg-3">
								<select id='tipoObjeto' class="form-control" placeholder="INFORME O TIPO DE OBJETO" onChange="";  name='solRegPrec[]'>
										<option value="selecione"><< SELECIONE UM TIPO DE RELATÓRIO >></option>
										<option value="material">REGISTRO DE PREÇO</option>
										<option value="serviço">ADESÃO A ATA</option>
								</select>
													
							</div>
							<div class="col-lg-2"><input type='button' value='Gerar Relatório' class="form-control" /></div>
						
						
						</table>
						
					</div>
				</div>
			</div>
		



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
	
	
</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<!--<script src="./js/chart.min.js"></script> -->
	<!--<script src="./js/chart-data.js"></script> -->
	<!--<script src="./js/easypiechart.js"></script> -->
	<!--<script src="./js/easypiechart-data.js"></script> -->
	<!--<script src="./js/bootstrap-datepicker.js"></script> -->
	
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
