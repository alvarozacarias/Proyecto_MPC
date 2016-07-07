<style>
    .loader{
        background-image: url(../img/ajax-loader.gif);
        background-repeat: no-repeat;
        background-position: center;
        height: 100px;
    }
</style>
<script src="../validate/js/jquery.validate.min.js"></script>


<?php
$atributos = "class='form-horizontal' id='form-create-paciente'";

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
            <li><a href="#">Administrar Codigo QR</a></li>
            <li><a href="#">Crear Codigo QR</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Crear Codigo QR</span>

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
                <h4 class="page-header">Formulario de Registro de Codigo QR</h4>
                <div id="mensaje">&nbsp;</div>

                <!-- Desde aqui empieza la tabla (lista de los items para encriptar)-->
                <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
                    <thead>
                    <tr>
                        <!--
                         PASOS PARA CREAR CODIGO QR
                         PRIMERO ELEGIR ITEM DE UNA LISTA
                         SEGUNDO EN OTRA VENTANA PONER LOS DATOS Y PRESIONAR CREAR

                         crear en la tabla de item un campo q diga estadoCodigoQR para saber si se creo el codigo
                         -->


                        <th>ID ITEM</th><!-- -->
                        <th>ITEM</th>
                        <th>NOMBRE ENTIDAD</th>
                        <th>DIRECCION DE ITEM</th>
                        <th>COLOR F.O.</th>
                        <th>CODIGO QR</th>



                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($items as $value) {
                        ?>
                        <tr>
                            <td><?=$value->id?></td>
                            <td><?=$value->nombreItem?></td>
                            <td><?=$value->nombreEntidad?></td>
                            <td><?=$value->direccion?></td>
                            <td><?=$value->colorFO?></td>
                            <td><a href="#" class="edit-record btn btn-primary" data-id="<?php echo $value->id;?>">CREAR QR</a></td></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
                <!-- Aqui termina la lista -->

                <!-- Esto es para imprimir el codigo QR
                <?php
            
                     echo '<img src="'.base_url().'tes.png" />';
                ?>
                -->


            </div>
        </div>
    </div>
</div>

<!-- inicio Modal para mostar resultados--->
<div class="modal fade" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Mostrar Resultado</h4>
            </div>
            <div class="modal-body"></div>

        </div>
    </div>
</div>

<script type="text/javascript">
    // Run Datables plugin and create 3 variants of settings
    function AllTables(){
        TestTable1();
        TestTable2();
        TestTable3();
        LoadSelect2Script(MakeSelect2);
    }
    function MakeSelect2(){
        $('select').select2();
        $('.dataTables_filter').each(function(){
            $(this).find('label input[type=text]').attr('placeholder', 'Buscar');
        });
    }
    $(document).ready(function() {
        // Load Datatables and run plugin on tables
        LoadDataTablesScripts(AllTables);
        // Add Drag-n-Drop feature
        WinMove();
    });
</script>

<script>
    $(document).ready(function() {
        $(document).on('click','.edit-record',function (e){
            e.preventDefault();

            $('#actualizar').modal('show');
            $(".modal-body").html('');
            $(".modal-body").addClass('loader');

            //Seria editItemCodigoQR
            $.post('c_codigoQR/editItemCodigoQR/',
                {id: $(this).attr('data-id')},
                function(html){
                    $(".modal-body").removeClass('loader');
                    $(".modal-body").html(html);
                }
            );
            return false;
        });
    });

</script>
