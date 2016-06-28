<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>M.P.C.</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?= base_url('plugins/bootstrap/bootstrap.css')?>" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?= base_url('css/style.css" rel="stylesheet')?>">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
    <?php
    $usuario = array('name' => 'usuario', 'placeholder' => 'Ingrese Usuario' , 'class'=>'form-control');
    $contrasena = array('name' => 'contrasena', 'placeholder' => 'Introduce tu Contraseña', 'class'=>'form-control', 'type'=>'password');
    $submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión', 'class'=> 'btn btn-primary');    
    
    ?>
<div class="container-fluid">
    <div id="page-login" class="row">
	<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">            
	<div class="box">
            <div class="box-content">
		<div class="text-center">
                    <h3 class="page-header">Mantenimiento Preventivo Correctivo (MPC)</h3>
		</div>
                <?=form_open(base_url().'index.php/c_login/validausuario')?>
                    <div class="form-group">
                        <label class="control-label">Usuario</label>
                        <?=  form_input($usuario)?> <?=form_error('usuario')?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Contraseña</label>
                         <?=  form_input($contrasena)?> <?=form_error('contrasena')?>
                        
                    </div>
                    <div class="text-center">    
                        <?=form_hidden('token',$token)?>
                        <?=form_submit($submit)?>
                    </div>
                <?=form_close()?>
                
                <?php 
		if($this->session->flashdata('usuario_incorrecto')){
		?>
		<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
		<?php
		}
                ?>
            </div>
            
	</div>
	</div>
    </div>
</div>
</body>
</html>
