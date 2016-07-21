<script src="../validate/js/jquery.validate.min.js"></script>
<?php
$atributos = "class='form-horizontal' index.php/c_tipo/updatetipo'";
?>


<form class='form-horizontal' id='form-editar-tipo'>
    <input type="hidden" name="id_codigoqr" id="codigoQR" value="<?php echo $codigosqr->id?>">
    <fieldset>
        <legend>Datos codigo QR</legend>
        <div id="mensaje">&nbsp;</div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Id Item</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" data-placement="bottom" name="" id="" title="" value="<?php echo $codigosqr->id ?>" disabled>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Item</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" data-placement="bottom" name="" id="" title="" value="<?php echo $codigosqr->nombreItem ?>" disabled>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Nombre entidad</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" data-placement="bottom" name="" id="" title="" value="<?php echo $codigosqr->nombreEntidad?>" disabled>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Direccion de Item</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" data-placement="bottom" name="" id="" title="" value="<?php echo $codigosqr->direccion ?>" disabled>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Color F.O.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" data-placement="bottom" name="contrasena" id="contrasena" title="Ingresar Descripcion" value="<?php echo $codigosqr->colorFO?>" disabled>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Codigo QR</label>
            <div class="col-sm-4">
                <div id='muestra'>
                    <?php
                        echo '<img src="'.base_url().'tes1.png" height="200" width="200" />';
                    ?>
                </div>
                <h4>Codigo QR encriptado</h4>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <!--<button type="button" class="btn btn-default" onclick="window.print();">IMPRIMIR</button>-->
                <button type="button" class="btn btn-default" onclick="javascript:imprSelec('muestra')">IMPRIMIR</button>
            </div>
        </div>
    </fieldset>
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

<script type="text/javascript">
    function imprSelec(muestra)
    {var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}
</script>