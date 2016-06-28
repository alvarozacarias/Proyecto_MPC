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
            <li><a href="#">Administrar Encriptado</a></li>
            <li><a href="#">Crear Encriptado</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Crear Encriptado</span>

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
                <h4 class="page-header">Formulario de Registro de Encriptado</h4>
                <div id="mensaje">&nbsp;</div>
                <form class='form-horizontal' id='form-create-mantenimiento'>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hilo de fibra optica: </label>
                        <div class="col-sm-4">
                            <select class="populate placeholder" id="tipoMantenimiento" name="tipoMantenimiento">
                                <?php
                                    foreach($tipoMantenimiento as $matenimiento):
                                ?>
                                <option value="<?=$matenimiento->idTipoMantenimiento; ?>"><?=$matenimiento->nombreTipoMantenimiento?></option>
                               <?php  endforeach;
                               ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Datos : </label>
                        <div class="col-sm-4">
                            <textarea id="descripcion" class="form-control" placeholder="Ingrese datos" name="descripcion" rows="3"></textarea>
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


 




<script type="text/javascript">
    $(document).ready(function (){
        $(document).on('click','.abrirMapa',function (e){
                    e.preventDefault();                    
                    
                    $('#mapa').modal('show');            
                    //$(".modal-body").html('');
                    //$(".modal-body").addClass('loader');
                    
                    //$(".modal-body").removeClass('loader');
                    /*$.post('c_mantenimiento/mapa/',
                            {id: $(this).attr('data-id')},
                            function(html){
                                $(".modal-body").removeClass('loader');
                                $(".modal-body").html(html);                               
                            }
                    );*/ 
        load( -17.385146111713336 , -66.31636664271355  );
                });
                
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
		$("#mensaje").html("<p class='well'><strong>Guardando TIPO.......</strong></p>");
                
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

    });

</script>


<script type="text/javascript">
    $(document).ready(function() {
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
        WinMove();
    });
</script>

<script type="text/javascript">
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
    $(document).ready(function() {
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
        WinMove();
    });
</script>



<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">

function load( s_latitud_0 , s_longitud_0  ) 
{
	//alert(s_latitud_0 +"--"+ s_longitud_0);
	// cajero de la puerta de la UAB
	var s_latitud_uab = "-17.3872194406596"; 
	var s_longitud_uab =  "-66.3173967898274";

	if(s_latitud_0 != "no_encontro" && s_longitud_0 != "no_encontro" )
	{
		s_latitud_uab = s_latitud_0;
		s_longitud_uab = s_longitud_0; 
	}

   function mapReadyFn() {
   
      var map = new GMap2(document.getElementById("map"));   
      //map.setCenter(new GLatLng( -17.38707674006827   , -66.31737649440765 ), 18);   
      map.setCenter(new GLatLng( s_latitud_uab , s_longitud_uab  ), 15);   
      map.addControl(new GLargeMapControl()); 
      
      map.setMapType(G_HYBRID_MAP);   // Satelital con calles
   

      // insertar marcador
	  //var point = new GPoint (  -66.31737649440765 , -17.38707674006827  );
	  var point = new GPoint (  s_longitud_uab , s_latitud_uab  );
      var marker = new GMarker(point);
      map.addOverlay(marker); 

     GEvent.addListener(map, "click", function (overlay,point)
	 {	 

         if (point)
		 {	        
			document.mapa.f_latitud.value = point.lat();
			document.mapa.f_longitud.value = point.lng();
                        marker.setPoint(point); 
		 }
      });

   }

}

function valida_coordenadas()
{

	if( document.mapa.f_latitud.value == '' || document.mapa.f_longitud.value ==  '' )
	{
		alert("DEBE INGRESAR LATITUD Y LONGITUD.. ");
	}
	else
	{
		document.mapa.submit();	
	}
}
	
        
</script>