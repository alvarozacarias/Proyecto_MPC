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
                <script src="<?= base_url('plugins/jquery/jquery-2.1.0.min.js')?>"></script>
<script src="<?= base_url('plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url('plugins/bootstrap/bootstrap.min.js')?>"></script>
<script src="<?= base_url('plugins/justified-gallery/jquery.justifiedgallery.min.js')?>"></script>
<script src="<?= base_url('plugins/tinymce/tinymce.min.js')?>"></script>
<script src="<?= base_url('plugins/tinymce/jquery.tinymce.min.js')?>"></script>
<!-- All functions for this theme + document.ready processing -->

<script src="../../validate/js/jquery.validate.min.js"></script>
<style>
    .error{
        color:#D60000;
    }
    
    
   
ul, li {
	margin:0;
	padding:0;
	list-style-type:none;
}
#container {
	width:400px;
	padding:0px;
	background:#fefefe;
	margin:0 auto;
	border:1px solid #c4cddb;
	border-top-color:#d3dbde;
	border-bottom-color:#bfc9dc;
	box-shadow:0 1px 1px #ccc;
	border-radius:5px;
	position:relative;
}
h1 {
	margin:0;
	padding:10px 0;
	font-size:24px;
	text-align:center;
	background:#eff4f7;
	border-bottom:1px solid #dde0e7;
	box-shadow:0 -1px 0 #fff inset;
	border-radius:5px 5px 0 0; /* otherwise we get some uncut corners with container div */
	text-shadow:1px 1px 0 #fff;
}
form ul li {
	margin:10px 20px;

}
form ul li:last-child {
	text-align:center;
	margin:20px 0 25px 0;
	}
input {
	padding:10px 10px;
	border:1px solid #d5d9da;
	border-radius:5px;
	box-shadow: 0 0 5px #e8e9eb inset;
	width:328px; /* 400 (#container) - 40 (li margins) -  10 (span paddings) - 20 (input paddings) - 2 (input borders) */
	font-size:1em;
	outline:0; /* remove webkit focus styles */
}
input:focus {
	border:1px solid #b9d4e9;
	border-top-color:#b6d5ea;
	border-bottom-color:#b8d4ea;
	box-shadow:0 0 5px #b9d4e9;
	}
label {
	color:#555;
}
#container span {
	background:#f6f6f6;
	padding:3px 5px;
	display:block;
	border-radius:5px;
	margin-top:5px;
}
button {
	background: #57a9eb; /* Old browsers */
	background: -moz-linear-gradient(top, #57a9eb 0%, #3a76c4 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#57a9eb), color-stop(100%,#3a76c4)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #57a9eb 0%,#3a76c4 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #57a9eb 0%,#3a76c4 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #57a9eb 0%,#3a76c4 100%); /* IE10+ */
	background: linear-gradient(top, #57a9eb 0%,#3a76c4 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#57a9eb', endColorstr='#3a76c4',GradientType=0 ); /* IE6-9 */
	border:1px solid #326fa9;
	border-top-color:#3e80b1;
	border-bottom-color:#1e549d;
	color:#fff;
	text-shadow:0 1px 0 #1e3c5e;
	font-size:.875em;
	padding:8px 15px;
	width:150px;
	border-radius:20px;
	box-shadow:0 1px 0 #bbb, 0 1px 0 #9cccf3 inset;
}
button:active {
	background: #3a76c4; /* Old browsers */
	background: -moz-linear-gradient(top, #3a76c4 0%, #57a9eb 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3a76c4), color-stop(100%,#57a9eb)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #3a76c4 0%,#57a9eb 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #3a76c4 0%,#57a9eb 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #3a76c4 0%,#57a9eb 100%); /* IE10+ */
	background: linear-gradient(top, #3a76c4 0%,#57a9eb 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3a76c4', endColorstr='#57a9eb',GradientType=0 ); /* IE6-9 */
	box-shadow:none;
	text-shadow:0 -1px 0 #1e3c5e;
}
#pswd_info {
	position:absolute;
	top:230px;
	right:55px;
	width:250px;
	padding:15px;
	background:#fefefe;
	font-size:.875em;
	border-radius:5px;
	box-shadow:0 1px 3px #ccc;
	border:1px solid #ddd;
}
#pswd_info h4 {
	margin:0 0 10px 0;
	padding:0;
	font-weight:normal;
}
#pswd_info::before {
	content: "\25B2";
	position:absolute;
	top:-12px;
	left:45%;
	font-size:14px;
	line-height:14px;
	color:#ddd;
	text-shadow:none;
	display:block;
}
.invalid {
	background:url(cancel.png) no-repeat 0 50%;
	padding-left:22px;
	line-height:24px;
	color:#ec3f41;
}
.valid {
	background:url(accept.png) no-repeat 0 50%;
	padding-left:22px;
	line-height:24px;
	color:#3a7d34;
}	
#pswd_info {
	display:none;
}	
</style>
	</head>
<body>
    <?php
    $usuario = array('name' => 'usuario', 'placeholder' => 'Ingrese Usuario' , 'class'=>'form-control');
    $contrasena = array('name' => 'contrasena','id' => 'contrasena', 'placeholder' => 'Introduce tu Contraseña', 'class'=>'form-control', 'type'=>'password');
    $submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión', 'class'=> 'btn btn-primary');    
	
    ?>
<div class="container-fluid">
    <div id="page-login" class="row">
	<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">            
	<div class="box">
            <div class="box-content">
		<div class="text-center">
                    <h3 class="page-header">Laboratorio San Andres (LSA) Actualiza tu contraseña</h3>
		</div>
                <form id='form-create-password'>
                    <div id="mensaje"></div>
                    <div class="form-group">
                        <input type="hidden" id="id_actualiza" name="id_actualiza" value="<?=$id_actualiza?>">
                        <input type="hidden" id="usuario_actualiza" name="usuario_actualiza" value="<?=$usuario_actualiza?>">
                        <label class="control-label">Usuario</label>
                        <?=$usuario_actualiza?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Contraseña</label>
                         <?=  form_input($contrasena)?> <?=form_error('contrasena')?>
                    </div>
                    
                <div class="form-group">
                    <label class="control-label">Repite tu Contraseña</label>
                    <input class="form-control" type="password" placeholder="Repite tu Contraseña" value="" name="contrasena_2" id="contrasena_2">
                </div>
                <div class="form-group">			                                                   		                       
                                <button type="submit" class="btn btn-primary btn-large">Guargar</button>
		</div>
                </form>
                <?=base_url()?>
            <div id="pswd_info">
				<h4>La contraseña debe cumplir con los siguientes requisitos:</h4>
				<ul>
					<li id="letter" class="invalid">Al menos <strong>una letra</strong></li>
					<li id="capital" class="invalid">Al menos <strong>una letra mayuscula</strong></li>
					<li id="number" class="invalid">Al menos <strong>un número</strong></li>
					<li id="length" class="invalid">Por lo menos <strong>5 caracters</strong></li>
				</ul>
			</div>    
            </div>
            
	</div>
	</div>
    </div>
</div>
</body>

<script type="text/javascript">
    $(document).ready(function (){
        $("#mensaje").hide();
           jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Solo letras");
        
        $('#form-create-password').validate({
            event:"blur",
            rules:{                
                contrasena:{
                    required: true,
                    minlength: 5,
                    maxlength: 15
                    },
            
                contrasena_2:{
                    required: true,
                    equalTo:'#contrasena'
                    }
            },
            messages: {
                contrasena: {
                    required: "Por favor, ingresa una contraseña; letras, números o símbolos",
                    minlength: "La contraseña debe ser de al menos 5 caracteres.",
                    maxlength: "La contraseña debe tenre como máximo 15 caracteres.",                    
                    },
                contrasena_2: {
                    required: "Por favor, confirme la contraseña.",
                    equalTo:"La contraseña no COINCIDE, por favor intente nuevamente"}
                },
            submitHandler: function(form){
		$("#mensaje").show();
		$("#mensaje").html("<p class='well'><strong>Guardando.......</strong></p>");
                
                $.ajax({
                    type: "POST",
                    url:"ActualizandoContrasenaPriemraves",
                    contentType: "application/x-www-form-urlencoded",
                    processData: true,
                    data: $('#form-create-password').serialize() ,
                    success: function(msg){
                        $("#mensaje").html("<p class='well'><strong>Guardato correctamente. Gracias!</strong></p>");
                                             
                        setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000);
                         window.location = "<?=base_url()?>";
                    }
                });
            }
                        
            
        });
        
         // añadimos para la contraseñ
       $('input[type=password]').keyup(function() {
	// set password variable
	var pswd = $(this).val();
        
	//validate the length
if ( pswd.length < 5 ) {
	$('#length').removeClass('valid').addClass('invalid');
} else {
	$('#length').removeClass('invalid').addClass('valid');
}
//validate letter
if ( pswd.match(/[A-z]/) ) {
	$('#letter').removeClass('invalid').addClass('valid');
} else {
	$('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
	$('#capital').removeClass('invalid').addClass('valid');
} else {
	$('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
	$('#number').removeClass('invalid').addClass('valid');
} else {
	$('#number').removeClass('valid').addClass('invalid');
}

}).focus(function() {
	$('#pswd_info').show();
}).blur(function() {
	$('#pswd_info').hide();
});
    });
</script>
</html>
