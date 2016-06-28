<script src="../validate/js/jquery.validate.min.js"></script>
<?php
$atributos = "class='form-horizontal' index.php/c_tipo/updatetipo'";
?>


<form class='form-horizontal' id='form-editar-tipo'>
    <input type="hidden" name="id_mantenimiento" id="mantenimiento" value="<?php echo $mantenimiento->idMantenimiento?>">
    <fieldset>
        <legend>Actualice cada uno de los campos</legend>
        <div id="mensaje">&nbsp;</div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Mantenimiento</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Ingrese mantenimiento" data-toggle="tooltip" data-placement="bottom" name="mantenimiento" id="mantenimiento" title="Ingresar mantenimiento" value="<?php echo $mantenimiento->idTipoMantenimiento?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Item</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Ingrese Descripcion" data-toggle="tooltip" data-placement="bottom" name="contrasena" id="contrasena" title="Ingresar Descripcion" value="<?php echo $mantenimiento->idItem ?>">
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Ciudad</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Ingrese Descripcion" data-toggle="tooltip" data-placement="bottom" name="contrasena" id="contrasena" title="Ingresar Descripcion" value="<?php echo $mantenimiento->idCiudad ?>">
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Personal</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Ingrese Descripcion" data-toggle="tooltip" data-placement="bottom" name="contrasena" id="contrasena" title="Ingresar Descripcion" value="<?php echo $mantenimiento->idPersonal ?>">
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Fecha de mantenimiento</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Ingrese Descripcion" data-toggle="tooltip" data-placement="bottom" name="contrasena" id="contrasena" title="Ingresar Descripcion" value="<?php echo $mantenimiento->fechaMantenimiento ?>">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Frecuencia de mantenimiento</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Ingrese Descripcion" data-toggle="tooltip" data-placement="bottom" name="contrasena" id="contrasena" title="Ingresar Descripcion" value="<?php echo $mantenimiento->frecuenciaMantenimiento ?>">
            </div>
            <div class="clearfix"></div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Descripción</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Ingrese Descripcion" data-toggle="tooltip" data-placement="bottom" name="contrasena" id="contrasena" title="Ingresar Descripcion" value="<?php echo $mantenimiento->descripcion ?>">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Estado</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Ingrese Descripcion" data-toggle="tooltip" data-placement="bottom" name="contrasena" id="contrasena" title="Ingresar Descripcion" value="<?php echo $mantenimiento->estadoMantenimiento ?>">
            </div>
            <div class="clearfix"></div>
        </div>

        <?php

        ?>

    </fieldset>
    <div class="form-group">
        <div class="col-sm-9 col-sm-offset-3">
            <button type="submit" class="btn btn-primary btn-large">Guardar</button>
        </div>
    </div>
</form>


<script type="text/javascript">
    $(document).ready(function (){
        $("#mensaje").hide();
        $('#form-editar-tipo').validate({
            event:"blur",
            rules:{
                'nombre': "required",
                'descripcion': "required"
            },
            messages: {'nombre': "Por favor ingrese nombre TIPO"},
            debug: true,errorElement: "label",
            submitHandler: function(form){
                $("#mensaje").show();
                $("#mensaje").html("<p class='well'><strong>Guardando TIPO.......</strong></p>");

                $.ajax({
                    type: "POST",
                    url:"c_tecnico/updateTecnico",
                    contentType: "application/x-www-form-urlencoded",
                    processData: true,
                    //data: "id_tipo="+escape($('#id_tipo').val())+"&nombre="+escape($('#nombre').val())+"&descripcion="+escape($('#descripcion').val()),
                    data:$("#form-editar-tipo").serialize(),
                    success: function(msg){
                        $("#mensaje").html("<p class='well'><strong>Guardato correctamente. Gracias!</strong></p>");
                        document.getElementById("usuario").value="";
                        document.getElementById("contrasena").value="";
                        setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000);
                        $('#editatipo').modal('hide');
                        location.reload();
                    }
                });
            }


        });
    });
</script>

<script src="<?= base_url('plugins/dupluicar/jquery.addfield.js')?>"></script>