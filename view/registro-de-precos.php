<!DOCTYPE html>
<html>
<head>
<!-- validate -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bem Vindo ao SIMORP</title>
<link rel="icon" type="image/x-icon" href="img/ico/pencil.ico">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">
<link href="./css/bootstrap-table.css" rel="stylesheet">

<script src="../js/lumino.glyphs.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>


<script>

		$(document).ready(function(){
  			$("#add").click(function(){
				alert($("#tipoObjeto").val());
			})
		})


		//MASK DATE
		$(function() {
			$(".mskdate").mask("99/99/9999");
		});

		//MASK CURRENCY REAL-BR
		$(function() {
			$('.dinheiro').mask('#.##9,99', {reverse: true});
		});


		
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



	$(document).ready(function (){
			var orgao;
			var url = 'data/orgaos.json';
			$.getJSON(url, function(data) {
		$(data.registros).each(function(obj) {
		orgao = "<option value=\"" + data.registros[obj]['sigla'] + " - " + data.registros[obj]['uniGestora'].toUpperCase() + "\"></option>";
		$('#orgaos').append(orgao);
   
		})	
	  })
    })


	
function changeObjeto(tpObj) {
	$(document).ready(function (){
		var itenList;
		var url = 'data/itens.json';
	$.getJSON(url, function(data) {
		$(data.itens).each(function(obj) {
		if(data.itens[obj]['tipo'] == tpObj) {
			itenList = "<option value=\"" + data.itens[obj]['id'] + " - " + data.itens[obj]['artigo'].toUpperCase() + " (" + data.itens[obj]['tipo'].toUpperCase() + ")\">\"" + data.itens[obj]['descricao'].toUpperCase() + "\"</option>";
	}		

	$('#itens').append(itenList);

	})	
  })
})

	}		
		
  

	$(document).ready(function (){
			var itenList;
			var url = 'data/unidades.json';
			$.getJSON(url, function(data) {
		$(data.unidades).each(function(obj) {
		unidadesList = "<option value=" + data.unidades[obj]['sigla'] + ">" + data.unidades[obj]['sigla'].toUpperCase() + "</option>";
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
				
				"<td> <input list='unidades' class='form-control' placeholder='' name='solRegPrec[]'>" +
				"<datalist id='unidades'></datalist>"+
				"</td>" +
				"<td> <input class='form-control dinheiro' type='text' id='valorUni' placeholder='R$' value='' name='solRegPrec[]'  required/> </td>" +
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

</head>

<body><?php  ?>

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
						<label>Registro de preço Nº:</label> <?php  ?> </div>
					   <div class="panel-body" style='height:500;'>
								<form id='frm' method='POST' action=''>
								<?php  ?> 
										<div class="form-group col-md-13">
											
												<div class="col-lg-2">
													
														<label>Nº do Processo</label>
														<?php ?>
														<input class="form-control" placeholder="LOCALIZADO NO SEI" name='solRegPrec[]' value="" required>
												</div>

												<div class="col-lg-3">
													<label>Tipo de Objeto</label>
													<select id='tipoObjeto' class="form-control" placeholder="INFORME O TIPO DE OBJETO" onChange="changeObjeto($(this).val());"  name='solRegPrec[]'>
															<option value="material">MATERIAL</option>
															<option value="serviço">SERVIÇOS</option>
															<option value="material">MATERIAL/SERVIÇO</option>
													</select>
												</div>

												<div class="col-lg-2">
													<label>Data Recebimento</label>
													<input class="form-control mskdate" placeholder="      /      /" type="" id='' name='solRegPrec[]' maxlength="10" required>
												</div>

												<div class="col-lg-2">
													<label>Data Encaminhamento</label>
													<input class="form-control mskdate" placeholder="      /      /" type="" id='' name='solRegPrec[]' maxlength="10" required>
												</div>
										</div>
												

								  <br><br><br><br>
								  
								 <div class="form-group col-lg-12">
									    <label>Orgão Solicitante</label> <!-- Componente alimentado pela Api com id e descrião dos orgãos -->
									    <input type='text' class="form-control" list='orgaos' name='solRegPrec[]'>
								 <datalist id='orgaos'></datalist>
								 </div>
								
								 <div class="form-group col-lg-12">
									<label>Observação</label>
									<textarea class="form-control" id='obs' rows="2" name='solRegPrec[]' ><?php  ?></textarea>
								 </div><br>
								 <div>
								</label><input type='button' class='btn-primary pull-right' id='add' name='adduni' value='Add Unid.'  /><button type="submit" name='salvar' class="btn-primary pull-right" >Salvar</button></div>
				
					
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
							<th data-field="name">ID/Descricão</th>
						<!--<th data-field="name">Tipo Objeto</th> -->
							<th data-field="name">Uni</th>
							<th data-field="name">Valor Item</th>
							<th data-field="name">Qtd</th>
							<th data-field="name">Sub.Total</th>
							<th data-field="name"> + </th>
							<th data-field="name"> - </th>
						</tr>
						
						<tr> 
							<td data-field="text">
								<input class="form-control" placeholder="INFORME O ITEM..." list='itens' style='width: 760px;' name="solRegPrec[]" />
								<datalist id='itens'></datalist>
							</td>
							
							<!--<td data-field="text">
								<select id='tpObjeto' class="form-control" list='tpObjeto' name="solRegPrec[]">
									<option value=""></option>
									<option value="MATERIAL">MATERIAL</option>
									<option value="SERVIÇO">SERVIÇO</option>
								</select>
							</td>-->
							
							<td data-field="text">
								<input list='unidades' class="form-control" style='width:250px' name="solRegPrec[]" placeholder=''><datalist id="unidades"></datalist>

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
<!-- <script src="../js/jquery-1.11.1.min.js"></script>-->
	
	
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
