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
            <li><a href="#">Administrar Personal</a></li>
            <li><a href="#">Crear Personal</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Crear Personal</span>
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
                        <label class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-4">
                            <input id="usuario" class="form-control" type="text" placeholder="Ingrese nombre" value="" name="usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Otros nombres:</label>
                        <div class="col-sm-4">
                            <input id="usuario" class="form-control" type="text" placeholder="Ingrese otros nombres" value="" name="usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Apellido paterno:</label>
                        <div class="col-sm-4">
                            <input id="usuario" class="form-control" type="text" placeholder="Ingrese apellido paterno" value="" name="usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Apellido materno:</label>
                        <div class="col-sm-4">
                            <input id="usuario" class="form-control" type="text" placeholder="Ingrese apellido materno" value="" name="usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Carnet de identidad:</label>
                        <div class="col-sm-4">
                            <input id="usuario" class="form-control" type="text" placeholder="Ingrese carnet de identidad" value="" name="usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Correo electronico:</label>
                        <div class="col-sm-4">
                            <input id="usuario" class="form-control" type="text" placeholder="Ingrese correo electronico" value="" name="usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Celular:</label>
                        <div class="col-sm-4">
                            <input id="usuario" class="form-control" type="text" placeholder="Ingrese el numero de celular" value="" name="usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ciudad: </label>
                        <div class="col-sm-4">
                            <select class="populate placeholder" id="ciudad" name="ciudad">
                                <?php
                                foreach($ciudad as $ciudades):
                                    ?>
                                    <option value="<?=$ciudades->id; ?>"><?=$ciudades->nombreCiudad?></option>
                                <?php  endforeach;
                                ?>
                            </select>
                        </div>
                    </div>


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
                        <label class="col-sm-2 control-label">Perfil: </label>
                        <div class="col-sm-4">
                            <select class="populate placeholder" name="estado" id="estado">
                                <option value="Administrador">Administrador</option>
                                <option value="Tecnico">Tecnico</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Estado: </label>
                        <div class="col-sm-4">
                            <select class="populate placeholder" name="estado" id="estado">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
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
                    url:"c_personal/createPersonalAhora",
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