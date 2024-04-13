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
<script src="../js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>


<script>

		$(document).ready(function(){
		
			
		})
			
	

		//MASK DATE
		$(function() {
			$(".mskdate").mask("99/99/9999");
		});


		//MASK CURRENCY REAL-BR
		$(function() {
			$('.dinheiro').mask('#.##9,99', {reverse: true});
		});


		/*
			$(document).ready(function (){
				$('.valorTotal').focus(function (){
				var v1 = $(".valorUni").val();
				var v2 = $(".qtdItem").val();
				var vlitem = parseFloat(v1) * v2;
				$(".valorTotal").val(parseFloat(vlitem));

			})

				//REMOVE LINE OF ITEM IN TABLE
				$(".btn-rmv").click(function(){
				$("#table01 tr:last").remove();
			})

		})
	
        */

		$(document).ready(function (){
			$('#tipoSolici').change(function (){

				if ($('#tipoSolici').val() == 'regPreco') {
					alert($('#tipoSolici').val());
				}
				if ($('#tipoSolici').val() == 'adesaoAta') {
					alert($('#tipoSolici').val());
				}
				
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
					$("#listItens").focusout(function(){
				   		$("#tpObjeto").val(data.itens[obj]['tipo'].toUpperCase());
					   
				})
			}

			if(option == 'ambos') {
			itenList = "<option value=\"" + data.itens[obj]['id'] + " - " + data.itens[obj]['artigo'].toUpperCase() + "\">\"" + data.itens[obj]['descricao'].toUpperCase() + "\"</option>";
			
			
			$('#itens').append(itenList);
				$('#tipoObjeto').prop('disabled', true);
					$("#listItens").focusout(function(){
						$("#tpObjeto").val(data.itens[obj]['tipo'].toUpperCase());
					
				});
				
					}

					})
				})	
			})
		})

		$(document).ready(function (){
			var orgao, url;
				url = 'data/orgaos.json';
				$.getJSON(url, function(data) {
			$(data.registros).each(function(obj) {
			orgao = "<option value=\"" + data.registros[obj]['sigla'] + " - " + data.registros[obj]['uniGestora'].toUpperCase() + "\"></option>";
			$('#orgaos').append(orgao);
	
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
												
						<label>Registro de preço Nº:</label>
					
					</div>

								
					   <div class="panel-body" style='height:500;'>
								<form id='frm' method='POST' action=''>
								 
										<div class="form-group col-md-13">

								<div class="col-lg-3">
									<label>Tipo de Solicitação</label>
								<select id='tipoSolici' class="form-control" name='solRegPrec[]'>
								   <option value=""></option>
								   <option value="regPreco">REGISTRO DE PREÇO</option>
								   <option value="adesaoAta">ADESÃO A ATA</option>
								</select>
								</div>

											
												<div class="col-lg-2">
													
														<label>Nº do Processo</label>
														
														<input class="form-control" placeholder="LOCALIZADO NO SEI" name='solRegPrec[]' id='processo' value="" required>
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
								  
								 <div class="form-group col-lg-12" id='Org01'>
									    <label>Orgão Solicitante</label> 
									    <input type='text' class="form-control" list='orgaos' name='solRegPrec[]'>
								 <datalist id='orgaos'></datalist>
								 </div>

								 <div class="form-group col-lg-6" id='Org02'>
									    <label>Orgão Aderente</label> 
									    <input type='text' class="form-control" list='orgaos' name='solRegPrec[]'>
								 <datalist id='orgaos'></datalist>
								 </div>

								 <div class="col-lg-3">
									<label>Tipo da Ata</label>
									 <select class="form-control" name="tipoAta">
									 <option value=''><< SELECIONE O TIPO >></option>
									 <option value="INTERNA"> INTERNA </option>
					                 <option value="EXTERNA"> EXTERNA </option>					
								  </select> 
							    </div>
								 
								
								 <div class="form-group col-lg-12">
									<label>Observação</label>
									<textarea class="form-control" id='obs' rows="2" name='solRegPrec[]' ></textarea>
								 </div><br>
								 <div>
								</label>
								
								<input type='button' class='btn-primary' name='' id='adicionar' value='Add Unid.'/>
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

								<input list='unidades' class="form-control" style='width:150px' name="solRegPrec[]" placeholder=''>
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
