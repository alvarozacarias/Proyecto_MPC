<script src="../validate/js/jquery.validate.min.js"></script>
<?php 
    $atributos = "class='form-horizontal' id='form-create-paciente'";
    
    $usuario = array('name' => 'usuario', 'id' => 'usuario', 'placeholder' => 'Ingrese usuario' , 'class'=>'form-control');    
    $pass = array('name' => 'pass', 'id' => 'pass', 'placeholder' => 'Ingrese pass' , 'class'=>'form-control');
    $perfil = array('name' => 'perfil', 'id' => 'perfil', 'placeholder' => 'Ingrese perfil' , 'class'=>'form-control');
    
?>

<style>
    .error{
        color:#D60000;
    }
</style>

<div class="row">
  <div id="breadcrumb" class="col-md-12">
    <ol class="breadcrumb">     
      <li><a href="#">Administrar Usuario</a></li>
      <li><a href="#">Crear Usuario</a></li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12">
    <div class="box">
      <div class="box-header">
        <div class="box-name">
          <i class="fa fa-search"></i>
          <span>Crear Usuario</span>
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
                    <form class='form-horizontal' id='form-create-usuario'>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Usuario</label>
                            <div class="col-sm-4">
                                <input id="usuario" class="form-control" type="text" placeholder="Ingrese usuario" value="" name="usuario">                          
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-4">
                            <?= form_input($pass)?> <?= form_error('pass')?>                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Perfil</label>
                            <div class="col-sm-4">
                            <?= form_input($perfil)?> <?= form_error('perfil')?>                                
                            </div>
                        </div>
                        
                        
                        <div class="form-group">      
                            <div class="col-sm-offset-2 col-sm-2">                                                   
                                <button type="submit" class="btn btn-primary btn-large">Guardar</button>
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
        
        $('#form-create-usuario').validate({
            event:"blur",
            rules:{                
                usuario:{
                    required: true,
                    minlength: 7,
                    maxlength: 15,
                    number: true
                    }    
                   },
            messages: {
                usuario: {
                    required: "Por favor, ingresa Número de carnet",
                    minlength: "Este campo debe ser de al menos 7 números.",
                    maxlength: "Este campo tienes como maximo 10 números",
                    number: "Solamente números. GRACIAS"
                    }},
                
                
            debug: true,errorElement: "label",
            submitHandler: function(form){
    $("#mensaje").show();
    $("#mensaje").html("<p class='well'><strong>Guardando Usuario.......</strong></p>");
                
                $.ajax({
                    type: "POST",
                    url:"c_tecnico/createpacienteAhora",
                    contentType: "application/x-www-form-urlencoded",
                    processData: true,
                    data: $("#form-create-usuario").serialize(),
                    success: function(msg){
                        $("#mensaje").html(msg);
                    }
                });
            }
        });
    });
</script>