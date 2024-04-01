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

<script src="./js/lumino.glyphs.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>


<script>
	
		

		$(function() {
			$(".mskdate").mask("99/99/9999");
		});

		$(function() {
			$('.dinheiro').mask('#.##0,00', {reverse: true});
		});

			$(document).ready(function (){
			$('#valorTotal').focus(function (){
				
				let vUnit = document.getElementById('valorUni').value;	
				let qTd = 	document.getElementById('qtdItem').value;
				let mult =  qTd * parseInt(vUnit);
				document.getElementById('valorTotal').value = parseFloat(mult);
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
								<?php if(isset($_POST['salvar'])) {  $SolReg = $_POST['solRegPrec']; ControllerSolicitacao::solRegPrec($SolReg); }  ?> 
										<div class="form-group col-md-13">
											
												<div class="col-lg-2">
													
														<label>Nº do Processo</label>
														<?php ?>

														<input class="form-control" placeholder="LOCALIZADO NO SEI" name='solRegPrec[]' value="" required>
												</div>

												<div class="col-lg-3">
													<label>Tipo de Objeto</label>
														<select class="form-control" name='solRegPrec[]'>
															<option>< SELECIONE UM TIPO ></option>
															<option value="MATERIAL"> MATERIAL </option>
															<option value="SERVIÇOS"> SERVIÇOS </option>
															<option value="MATERIAL/SERVIÇOS"> MATERIAL/SERVIÇOS </option>
														</select>
												</div>

												<div class="col-lg-3">
													<label>Artigo</label>
														<select class="form-control" name='artigo'>
															<option value=''>< FILTAR POR ARTIGO ></option>
															<option value=""> VENDA DE MATERIAS DE CONSTRUÇÃO</option>
															<option value=""> SERVIÇOS DE LOCAÇAO DE VEICULOS</option>
														</select>
												</div>

   											   <div class="col-lg-2">
													<label>Data Recebimento</label>
													<input class="form-control mskdate" type="" id='' name='solRegPrec[]' maxlength="10" required>
												</div>

												<div class="col-lg-2">
													<label>Data Encaminhamento</label>
													<input class="form-control mskdate" type="" id='' name='solRegPrec[]' maxlength="10" required>
												</div>
										</div>
												
								    

								  <br><br><br><br>
								  
								 <div class="form-group col-lg-12">
									    <label>Orgão Solicitante</label> <!-- Componente alimentado pela Api com id e descrião dos orgãos -->
									    <input class="form-control" name='solRegPrec[]' list='orgaos'>
									<datalist id='orgaos'>
										
										<option value="IEEA - INST ESTADUAL DE ENGENHARIA E ARQUITETURA"> IEEA</option>
										<option value="DER-RJ - FUND DEP ESTRADAS DE RODAGEM DO ESTADO DO RJ"> DER-RJ - FUND DEP ESTRADAS DE RODAGEM DO ESTADO DO RJ</option>
										<option value="EMOP - EMPRESA DE OBRAS PÚBLICAS DO ESTADO DO RJ"> EMOP - EMPRESA DE OBRAS PÚBLICAS DO ESTADO DO RJ</option>
										<option value="VICE - GOV VICE-GOVERNADORIA"> VICE - GOV VICE-GOVERNADORIA</option>
										<option value="PGE - PROCURADORIA GERAL DO ESTADO"> PGE - PROCURADORIA GERAL DO ESTADO</option>
										<option value="FUNPERJ - FUNDO ESPECIAL DA PROCURADORIA GERAL DO ERJ"> FUNPERJ - FUNDO ESPECIAL DA PROCURADORIA GERAL DO ERJ</option>
										<option value="DPGE - DEFENSORIA PÚBLICA GERAL DO ESTADO"> DPGE - DEFENSORIA PÚBLICA GERAL DO ESTADO</option>
									</datalist>
								 </div>
								
								 <div class="form-group col-lg-12">
									<label>Observação</label>
									<textarea class="form-control" rows="2" name='solRegPrec[]' ><?php  ?></textarea>
								 </div><br>
								 <div>
								</label><input type='submit' class='btn-primary pull-right' name='adduni' value='Add Unid.'  /><button type="submit" name='salvar' class="btn-primary pull-right" >Salvar</button></div>
				
					
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
							<th data-field="name">ID/Descricão</th>
							<th data-field="name">ID/Descricão</th>
							<th data-field="name">Uni</th>
							<th data-field="name">Valor</th>
							<th data-field="name">Qtd</th>
							<th data-field="name">Sub.Total</th>
							<th data-field="name"> + </th>
							<th data-field="name"> - </th>
						</tr>
						
						<tr> 
							<td data-field="text">
								<select class="form-control" name="solRegPrec[]">
									<option selected>< SELECIONE UM OBJETO ></option>
									<option value="184169 - CARRO 1.0 GASOLINA MOTOR 4 CV BLINDADO">184169 - CARRO 1.0 GASOLINA MOTOR 4 CV BLINDADO</option>
									<option value="158468 - MOTOCILCETA">158468 - MOTOCILCETA </option>
									<option value="123459 - TRATOR AGRICOLA">123459 - TRATOR AGRICOLA </option>
									<option value="145258 - AVIÃO COMERCIAL">145258 - AVIÃO COMERCIAL </option>
									<option value="145856 - COMPOSIÇÃO FERROVIÁRIA">145856 - COMPOSIÇÃO FERROVIÁRIA</option>
									<option value="152589 - NAVIO DE CARGA">152589 - NAVIO DE CARGA</option>
								</select>
							</td>
							
							<td data-field="text" style="width: 130px">
								<select class="form-control" name="solRegPrec[]">
									<option selected>< TIPO ></option>
									<option value="MATERIAL">MATERIAL</option>
									<option value="SERVIÇO">SERVIÇO</option>
								</select>

							</td>
							
							<td data-field="text" style="width: 130px" >
								<select class="form-control" name="solRegPrec[]">
									<option selected>< UNI ></option>
									<option value="unidade">UN</option>
									<option value="kilo">KG</option>
									<option value="metro">MT</option>
									<option value="pacote">PC</option>
									<option value="pote">PT</option>
									<option value="fardo">FD</option>
									<option value="litro">LT</option>
							</select>

							</td>
							
							<td data-field="text" style="width: 120px"><input class="form-control dinheiro" type="text" id="valorUni" name="solRegPrec[]" placeholder="R$" value=""  style="display:inline-block" required/></td>
							<td data-field="text" style="width: 100px"><input class="form-control" type="text" id="qtdItem" placeholder="" name="solRegPrec[]" value="" required /></td>
							<td data-field="text" style="width: 120px"><input class="form-control dinheiro" id="valorTotal" placeholder="R$" name="solRegPrec[]" value="" required /></td>
							<td data-field="text" style="width: 70px">&nbsp;&nbsp;<button class="btn-primary" id="btn-todo" name="">Add</button></td>
							<td data-field="text" style="width: 70px"><button class="btn-default" id="btn-todo" name="">Del</button></td>
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
