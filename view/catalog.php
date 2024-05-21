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
<script src="./js/catalog_set.js"></script>
<script src="../js/lumino.glyphs.js"></script>

<style>

	tr:nth-child(even) {
	background-color: #f2f2f2;
	}


</style>

<script>


	// LOAD FAMILY FIELD
	$(document).ready(function(){

	$('#tipoObjeto').change(function(){
			if($('#tipoObjeto').val()=='selecione'){
				$('#familia').empty();
				$('#familiaList').val("");
				exit();
			}

			if($('#tipoObjeto').val()=='MATERIAL'){
				$('#familia').empty();
					$('#descricao').val("");
						$('#familiaList').val("");
						LodaDataList(null, "#familia","data/familiaMaterial.json","familia","id","tipo");
						
				exit();
			}

			if($('#tipoObjeto').val()=='SERVICO'){
				$('#familia').empty();
					$('#descricao').val("");
						$('#familiaList').val("");
						LodaDataList(null, "#familia","data/familiaServicos.json","familia","id","tipo");
				exit();
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


	
	//EVENT KEY TRIGGER ENTER 
	$(document).ready(function(){	
		
		$("#descricao").on( "keypress", function( event ){
			if (event.which == 13) {
				event.preventDefault();
				loadTable();
	     	}

		}) 
	}) 


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
												<div class="col-lg-3">
													<label>Tipo de Objeto</label>
													<select id='tipoObjeto' class="form-control col-lg-3" placeholder="INFORME O TIPO DE OBJETO" onChange="";  name='solRegPrec[]'>
														<option value="selecione"><< SELECIONE UM TIPO >></option>
														<option value="MATERIAL">1 - MATERIAL</option>
														<option value="SERVICO">2 - SERVICOS</option>
													</select>
												</div>
												<br><br><br><br>
												<div class="col-lg-6">
														<label>Familia</label>
														<input class="form-control col-lg-6" placeholder="Informe uma família" name='solRegPrec[]' id='familiaList' list='familia' required>
														<datalist id='familia'></datalist>
												</div>
												<br><br><br><br>
												<div class="col-lg-12">
														<label>ID/ Descrição</label>
														<input class='form-control col-lg-12 telcas' placeholder='' list='descItem' type='text' id='descricao' name='solRegPrec[]'><datalist id='descItem'></datalist>
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
						<table data-toggle="table" id='table01' class="col-lg-10">
							<tr>
								<th class="col-lg-1">ID</th>
								<th class="col-lg-4">DESCRIÇÃO</th>
								<th class="col-lg-4">FAMILIA</th>
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
