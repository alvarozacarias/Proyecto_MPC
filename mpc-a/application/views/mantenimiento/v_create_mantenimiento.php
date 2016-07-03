<script src="../validate/js/jquery.validate.min.js"></script>
<?php
$atributos = "class='form-horizontal' id='form-create-paciente'";

$mantenimiento = array('name' => 'mantenimiento', 'id' => 'mantenimiento', 'placeholder' => 'Ingrese mantenimiento' , 'class'=>'form-control');
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
            <li><a href="#">Administrar Mantenimiento</a></li>
            <li><a href="#">Crear Mantenimiento</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Crear Mantenimiento</span>

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
                <h4 class="page-header">Formulario de Registro de Mantenimientos</h4>
                <div id="mensaje">&nbsp;</div>
                <form class='form-horizontal' id='form-create-mantenimiento'>

                    <div class="row form-group">
                        <label class="col-sm-2 control-label">Mantenimiento: </label>
                        <div class="col-sm-4">
                            <select class="populate placeholder" name="tipoMantenimiento" id="tipoMantenimiento">
                                <option value="CORRECTIVO">CORRECTIVO</option>
                                <option value="PREVENTIVO">PREVENTIVO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Item: </label>
                        
                        <button class="btn btn-info abrirMapa" data-target="#myModalMap" data-toggle="modal" type="button">Abrir Mapa</button>
                        <div class="col-sm-4">
                            <input id="item" class="form-control" type="text" placeholder="Ingrese item" value="" name="item">
                        </div>

                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ciudades: </label>
                        <div class="col-sm-4">
                            <select class="populate placeholder" id="ciudad" name="ciudad" >
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
                        <label class="col-sm-2 control-label">Personal: </label>
                        <div class="col-sm-4">
                            <select class="populate placeholder" id="personal" name="personal" onblur="upperCase()">
                                <?php
                                foreach($personal as $persona):

                                    ?>
                                    <option value="<?=$persona->ID; ?>"><?=$persona->nombre1?> <?=$persona->apellidoP?> <?=$persona->apellidoM?></option>

                                <?php  endforeach;
                                echo 'hi';
                                ?>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date_example" class="col-sm-2 control-label">Inicio de Mantenimiento:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="fecha" name="inicioMantenimiento" placeholder="Fecha y Hora">
                        </div>
                    </div>
                    
                    <div class="form-group">
			            <label for="datetime_example" class="col-sm-2 control-label">Fin de Mantenimiento:</label>
			            <div class="col-sm-4">
				        <input type="text" class="form-control" id="fecha2" name="finMantenimiento" placeholder="Fecha y Hora">
			            </div>
                    </div>
    

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Frecuencia de Mantenimiento: </label>
                        <div class="col-sm-4">
                            <input id="frecuenciaMantenimiento" class="form-control" type="text" placeholder="Ingrese frecuencia del mantenimiento" value="" name="frecuenciaMantenimiento">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descripción: </label>
                        <div class="col-sm-4">
                            <textarea id="descripcion" class="form-control" placeholder="Ingrese descripción"  value="" name="descripcion" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Estado: </label>
                        <div class="col-sm-4">
                            <select class="populate placeholder" name="estadoMantenimiento" id="estadoMantenimiento">
                                <option value="ACTIVO">ACTIVO</option>
                                <option value="DESACTIVO">DESACTIVO</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-2">
                            <button type="submit" class="btn btn-primary btn-large" id="guardarMatenimiento">Guardar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mapa" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Mapa</h4>
          </div>
            <div class="modal-body">
         

<div align="center">
	<form action="latitud_longitud_update.jsp" name="mapa" method="post">
		Latitud  : <input name="f_latitud" value="-17.38504884385255" readonly="readonly" type="text">  &nbsp;&nbsp;
		Lontitud : <input name="f_longitud" value="-66.31811562184339" readonly="readonly" type="text">		
		<input name="Guardar" value="Guardar Datos.." onclick="valida_coordenadas()" type="button">
		<input name="f_codigo_personal" value="enc_p_1439388899766" type="hidden">
	</form> <br>
	
	<div id="map" style="width: 915px; height: 630px; position: relative; background-color: rgb(229, 227, 223); overflow: hidden;">
	
	</div>
</div>


            </div>
         
        </div>
      </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        ////////////////////////////////////////
        // Run Select2 plugin on elements
        function DemoSelect2(){
            $("#tipoMantenimiento").select2();
            $("#ciudad").select2();
            $("#personal").select2();
            $("#estado").select2();
        }
        // Run timepicker
        function DemoTimePicker(){
            $('#input_time').timepicker({setDate: new Date()});
        }
        ////////////////////////////////////////
        $("#mensaje").hide();
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z]+$/i.test(value);
        }, "Solo letras");

        $('#form-create-mantenimiento').validate({
            event:"blur",
            rules:{
                personal:{
                    required: true,
                    minlength: 1,
                    maxlength: 100
                }
            },
            messages: {
                personal: {
                    required: "Por favor, ingresa Nombre Elemento.",
                    minlength: "Este campo debe ser de al menos 1 caracteres.",
                    maxlength: "Este campo tienes como maximo 100 caracteres",
                    lettersonly: "Solamente letras. GRACIAS"
                }
            },
            submitHandler: function(form){
                $("#mensaje").show();
                $("#mensaje").html("<p class='well'><strong>Guardando Mant.......</strong></p>");

                $.ajax({
                    type: "POST",
                    url:"c_mantenimiento/createMantenimiento",
                    contentType: "application/x-www-form-urlencoded",
                    processData: true,
                    data: $("#form-create-mantenimiento").serialize(),
                    success: function(msg){
                        $("#mensaje").html(msg);

                    }
                });
            }
        });
        ///////////////////////////////////////
        // Create Wysiwig editor for textare
        TinyMCEStart('#wysiwig_simple', null);
        TinyMCEStart('#wysiwig_full', 'extreme');
        // Add slider for change test input length
        FormLayoutExampleInputLength($( ".slider-style" ));
        // Initialize datepicker
        $('#input_date').datepicker({setDate: new Date()});
        // Load Timepicker plugin
        LoadTimePickerScript(DemoTimePicker);
        // Add tooltip to form-controls
        $('.form-control').tooltip();
        LoadSelect2Script(DemoSelect2);
        // Load example of form validation
        LoadBootstrapValidatorScript(DemoFormValidator);
        // Add drag-n-drop feature to boxes

        // cambio de idioma de datetimepicker
        // Load TimePicker plugin and callback all time and date pickers
        LoadTimePickerScript(AllTimePickers);

        $('#fecha').datepicker({
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            weekHeader: 'Sm',
            dateFormat: 'yy/mm/dd'
        });
        $('#fecha2').datepicker({
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            weekHeader: 'Sm',
            dateFormat: 'yy/mm/dd'
        });
        WinMove();
    });
</script>



