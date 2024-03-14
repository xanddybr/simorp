<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SIMORP</title>
<link rel="icon" type="image/x-icon" href="img/ico/pencil.ico">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">
<script src="./js/jquery-1.11.1.min.js"></script>

<!--chamada para API-->
<script src="./js/authAPI.js"></script>

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<script>



</script>

</head>



<body class="minhaclasse">
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><b>SIMORP</b>_beta</div>
				<div class="panel-body">
					<form id="form" method="POST">
						<div class="form-group" >
							
								<input class="form-control" placeholder="usuario" name="usuario" id="usuario" type="text" value="<?php  if(isset($_COOKIE['user'])) { echo $_COOKIE['user'];} ?>" required />
									</div>
										<div class="form-group">
										<input class="form-control" placeholder="senha" name="senha" id="senha" type="password" value="<?php if(isset($_COOKIE['senha'])) { echo $_COOKIE['senha'];} ?>" required />
										</div>
										<div class="checkbox" >
										<label>

								<input name="remember" type="checkbox" value="true"  <?php if(isset($_COOKIE['rmb'])) { echo $_COOKIE['rmb'];} ?> /> Lembrar-me <br>

								

										</label>
								
							</div>
							<input type="submit" name="acao" value="Entrar" class="form-control btn-default" />
								<div style=""><center><img src="img/logo_marca.png" style="width: 227.80px; height: 155.32px; margin: 10px 0px 10px" alt="Carregando" /></center></div>
								
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	 
	<script>
	/*	$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show');
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide');
		}) */
	</script>	

	<?php echo "<center><span style='text-aling: center'><h6>v1.0.0 build 0314.1925</h6></span></center>"; ?>
	

</html>
