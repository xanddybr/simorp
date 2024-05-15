<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
<title>SIMORP</title>
<link rel="icon" type="image/x-icon" href="img/ico/pencil.ico">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

<script src="./js/login_settings.js"></script>


<!--chamada para API-->
<script src="./js/authAPI.js"></script>
<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<script>



</script>
</head>



<body>
	
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-3 col-md-4 col-md-offset-4">
		<div class="" >
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><b>SIMORP</b> beta</div>
				<div class="panel-body">
					<form id="form" method="POST">
						<div class="form-group" >
							
								<input class="form-control" placeholder="usuario" name="usuario" id="usuario" type="text" value="<?php  if(isset($_COOKIE['checkUser'])) { echo $_COOKIE['checkUser'];} ?>" required />
									</div>
										<div class="form-group">
										<input class="form-control" placeholder="senha" name="senha" id="senha" type="password" value="" required />
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
			<?php echo "<center><span style='text-aling: center'><h6>v1.0.0 build 0515.1759</h6></span></center>"; ?>
		</div><!-- /.col-->
		
	</div><!-- /.row -->	
	
		

</html>
