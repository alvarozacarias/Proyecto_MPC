<script src="../validate/js/jquery.validate.min.js"></script>
<?php 
$cod_inicio_secion =$this->session->userdata('id_usuario');

$user_name=$this->session->userdata('username');
//$apellido_usuario = $this->session->userdata('actualizocontrasena');
$_cargo = $this->session->userdata('perfil');
?>
<style>
    .error{
        color:#D60000;
    }
</style>

<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">			
			<li><a href="#">Administrar Tipo</a></li>
			<li><a href="#">Crear Tipo</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Crear Tipo</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header">Formulario de Registro</h4>
                                <div id="mensaje">&nbsp;</div>
                    <form class='form-horizontal' id='actualizar-contrasenia'>
                        <input type="hidden" name="id_secion" id="id_secion" value="<?php echo $cod_inicio_secion ?>">
                        <input type="hidden" name="user_name" id="user_name" value="<?php echo $user_name ?>">
                        <fieldset>       
                        <legend>Rol</legend>
                            <div class="form-group">
				<label class="col-sm-3 control-label">Cargo</label>
				<div class="col-sm-5">
                                    <p class="form-control-static"><?php echo($_cargo)?></p>
                                </div>
                            </div>           
			</fieldset>
                        <fieldset>
                            <legend>Identical validator</legend>
                            <div class="form-group">
				<label class="col-sm-3 control-label">Contraseña</label>
				<div class="col-sm-5">
                                    <input type="password" class="form-control" name="password" id="password" />
                                </div>
                            </div>
                            <div class="form-group">
				<label class="col-sm-3 control-label">repetir contraseña</label>
				<div class="col-sm-5">
                                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" />
				</div>
                            </div>
			</fieldset>
                        
			<div class="form-group">			
                            <div class="col-sm-offset-2 col-sm-2">                         		                       
                                <button type="submit" class="btn btn-primary btn-large">Guargar</button>
                            </div>                                               
			</div>
                               
                      </form>
			</div>
		</div>
	</div>
</div>




<script type="text/javascript">
    $(document).ready(function (){
        $("#mensaje").hide();
           jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Solo letras");
        
        $('#actualizar-contrasenia').validate({
            event:"blur",
            rules:{                
                password:{
                    required: true,
                    minlength: 5,
                    maxlength: 15
                    },
            
                confirmPassword:{
                    required: true,
                    equalTo:'#password'
                    }
            },
            messages: {
                password: {
                    required: "Por favor, ingresa una contraseña; letras, números o símbolos",
                    minlength: "La contraseña debe ser de al menos 5 caracteres.",
                    maxlength: "La contraseña debe tenre como máximo 15 caracteres.",
                    },
                confirmPassword: {
                    required: "Por favor, confirme la contraseña.",
                    equalTo:"La contraseña no COINCIDE, por favor intente nuevamente"}
                },
            submitHandler: function(form){
		$("#mensaje").show();
		$("#mensaje").html("<p class='well'><strong>Guardando TIPO.......</strong></p>");
                
                $.ajax({
                    type: "POST",
                    url:"c_login/UpdateContasenia",
                    contentType: "application/x-www-form-urlencoded",
                    processData: true,
                    data: $("#actualizar-contrasenia").serialize(),
                    success: function(msg){
                        $("#mensaje").html("<p class='well'><strong>Guardato correctamente. Gracias!</strong></p>");
                        document.getElementById("password").value="";
			document.getElementById("confirmPassword").value="";                        
                        setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000);
                        location.reload(); 
                    }
                });
            }
                        
            
        });
    });
</script>

