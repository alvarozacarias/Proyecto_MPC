<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>M.P.C</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= base_url('plugins/bootstrap/bootstrap.css')?>" rel="stylesheet">
        <link href="<?= base_url('plugins/jquery-ui/jquery-ui.min.css')?>" rel="stylesheet">
        <link href="<?= base_url('plugins/bootstrap/bootstrap.css')?>" rel="stylesheet">
        <<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
        <link href="<?= base_url('plugins/fancybox/jquery.fancybox.css')?>" rel="stylesheet">
        <link href="<?= base_url('plugins/fullcalendar/fullcalendar.css')?>" rel="stylesheet">
        <link href="<?= base_url('plugins/xcharts/xcharts.min.css')?>" rel="stylesheet">
        <link href="<?= base_url('plugins/select2/select2.css')?>" rel="stylesheet">
		<!--<link href="<?= base_url('plugins/roberto/font-awesome.css')?>" rel="stylesheet">-->
        <link href="<?= base_url('css/style.css" rel="stylesheet')?>">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
		<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
<body>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
                            <img src="<?= base_url('img/datatel3.png')?>">
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-bars"></i>
						</a>

					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">

                            <li class="hidden-xs">
                                <a class="ajax-link" href="<?= base_url('ajax/calendar.html')?>">
                                    <i class="fa fa-calendar"></i>
                                    <span class="badge">7</span>
                                </a>
                            </li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">

									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Bienvenido,</span>
										<span>Administrador</span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="c_login/salir">
											<i class="fa fa-power-off"></i>
											<span>Salir</span>
										</a>
									</li>
								</ul>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
                <li>
                    <a class="ajax-link" href="<?= base_url('ajax/calendar.html')?>">
                        <i class="fa fa-home"></i>
                        <span class="hidden-xs">Inicio</span>
                    </a>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-group"></i>
                        <span class="hidden-xs">PERSONAL</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="c_personal/createPersonal">Crear Personal</a></li>
                        <li><a class="ajax-link" href="c_personal/listaPersonal">Buscar Personal</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-wrench"></i>
                        <span class="hidden-xs">MANTENIMIENTO</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="c_mantenimiento/crear">Crear Mantenimiento</a></li>
                        <li><a class="ajax-link" href="c_mantenimiento/listaMantenimiento">Buscar Mantenimiento</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa  fa-building-o"></i>
                        <span class="hidden-xs">ENTIDAD</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="c_entidad/createEntidad">Crear Entidad</a></li>
                        <li><a class="ajax-link" href="c_entidad/listaEntidad">Buscar Entidad</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa  fa-globe"></i>
                        <span class="hidden-xs">CIUDAD</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="c_ciudad/createCiudad">Crear Ciudad</a></li>
                        <li><a class="ajax-link" href="c_ciudad/listaCiudad">Buscar Ciudad</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-flash"></i>
                        <span class="hidden-xs">HILO DE F.O.</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="c_hiloFibraOptica/createHiloFibraOptica">Crear Hilo De F.O.</a></li>
                        <li><a class="ajax-link" href="c_hiloFibraOptica/listaHiloFibraOptica">Buscar Hilo De F.O.</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa  fa-qrcode"></i>
                        <span class="hidden-xs">CODIGO QR</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="c_codigoQR/createCodigoQR">Crear Codigo QR</a></li>
                        <li><a class="ajax-link" href="c_codigoQR/listaCodigoQR">Buscar Codigo QR</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa  fa-puzzle-piece"></i>
                        <span class="hidden-xs">ENCRIPTADO</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="c_encriptado/createEncriptado">Crear Encriptado</a></li>
                        <li><a class="ajax-link" href="c_encriptado/listaEncriptado">Buscar Encriptado</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-tasks"></i>
                        <span class="hidden-xs">ITEM LEYENDA</L></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="c_itemLeyenda/createItemLeyenda">Crear Item Leyenda</a></li>
                        <li><a class="ajax-link" href="c_itemLeyenda/listaItemLeyenda">Buscar Item Leyenda</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-map-marker"></i>
                        <span class="hidden-xs">MAPA</L></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="c_mapa/verMapa">Mapa de tendido</a></li>
                    </ul>
                </li>




                                <!-- Asta a qui le mnu Admi!-->


			</ul>
		</div>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div class="preloader">
				<img src="../img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
			</div>
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->





<script src="<?= base_url('plugins/jquery/jquery-2.1.0.min.js')?>"></script>
<script src="<?= base_url('plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url('plugins/bootstrap/bootstrap.min.js')?>"></script>
<script src="<?= base_url('plugins/justified-gallery/jquery.justifiedgallery.min.js')?>"></script>
<script src="<?= base_url('plugins/tinymce/tinymce.min.js')?>"></script>
<script src="<?= base_url('plugins/tinymce/jquery.tinymce.min.js')?>"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="<?= base_url('js/devoops.js')?>"></script>





</body>
</html>

<!--  Esta actualizado el 02-07-2016 -->

