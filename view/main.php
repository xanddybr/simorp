<!-- Start the session -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<title>SIMORP</title>

<!-- load dependency libraries css -->
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">
<link href="./img/ico/pencil.ico" rel="icon" type="image/x-icon" >

<!-- load dependency libraries js -->
<script src="./js/lumino.glyphs.js" type="text/javascript"></script>
<script src="./js/jquery.min.js" type="text/javascript"></script>
<script src="./js/main_set.js" type="text/javascript"></script>
<script src="./js/bootstrap.min.js" type="text/javascript"></script>


</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: url('img/top_bar.jpg'); background-size: 44%; background-repeat: no-repeat; background-color: #192845;" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo ('home'); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><?php echo $_SESSION['login'][0]; ?></a>
						<ul class="dropdown-menu" role="menu">
							<!-- <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Perfil</a></li> -->
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Configurações</a></li>
							<li><a href="<?php echo ('logout'); ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Sair</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div>
	</nav>
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<!-- 
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div> -->

		</form>
		
		<ul class="nav menu">
			<li ><a href="<?php echo ('home'); ?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Home</a></li>

			<li class="parent">
			<!--/	<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Registrar Solicitação  
				</a> -->
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?php echo ('solicitacao'); ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-pencil"></use></svg> Registro de preço
						</a>
					</li>
					<li>
						<a class="" href="<?php echo ('catalog'); ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-pencil"></use></svg> Adesão a Ata
						</a>
					</li>
				</ul>
			</li>

			<li><a href="<?php echo ('solicitacao'); ?>" ><svg class="glyph stroked line-graph"><use xlink:href="#stroked-pencil"></use></svg> Solicitações</a></li>
		    <li><a href="<?php echo ('catalog'); ?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Catálogo</a></li>
			<li><a href="<?php echo ('relatorios'); ?>"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Relatórios</a></li>
			<!-- <li><a href="forms.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li> -->
			<!-- <li><a href="panels.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li> -->
			<!-- <li><a href="icons.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li> -->
			
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo ('logout'); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Sair</a></li>
		</ul>


	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			

		<!--Area no icons no content-->


		</div>
		
		<div class="row"><!--/.row-->
			<div class="col-lg-12">
				

				<!--/ LOAD CONTENT OF PAGE / LOAD CONTENT OF PAGE / LOAD CONTENT OF PAGE / LOAD CONTENT OF PAGE / LOAD CONTENT OF PAGE / LOAD CONTENT OF PAGE /-->
						
		
		<div class="row">

			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						
						<!--/.row-->
                        
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						
                     <!--/.row-->

					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						
                    <!--/.row-->

					</div>
				</div>
			</div>


			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						
                    <!--/.row-->

						</div>
					</div>
				</div>
			</div>
</div>



		</div>
		<!--/
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Trafego Anual de Solicitações</div>
					<div class="panel-body">

						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="1200"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
		.row-->


		
		
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
				
				</div>
			</div>
		</div>

		<br><br>

	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- <script src="./js/chart.min.js"></script> -->
	<!-- <script src="./js/easypiechart-data.js"></script> -->
	<!-- <script src="./js/easypiechart.js"></script> -->
	<!-- <script src="./js/easypiechart-data.js"></script> -->


	<script>
	
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus")    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");  
		              }(window.jQuery)

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		});
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		});

	</script>	




</body>

</html>
