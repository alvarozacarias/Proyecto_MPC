<style>
    .loader{
        background-image: url(../img/ajax-loader.gif);
        background-repeat: no-repeat;
        background-position: center;
        height: 100px;
    }
</style>


<div class="row">
    <div id="breadcrumb" class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="#"> Mantenimiento</a></li>
            <li><a href="#">Buscar mantenimiento</a></li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">

                    <span>Analisis</span>
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
            <div class="box-content no-padding">
                <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>MANTENIMIENTO</th>
                        <th>ITEM</th>
                        <th>CIUDAD</th>
                        <th>PERSONAL</th>
                        <th>FECHA</th>
                        <th>FRECUENCIA</th>
                        <th>DESCRIPCION</th>
                        <th>ESTADO</th>
                        <th>EDITAR</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($mantenimientos as $value) {
                        ?>
                        <tr>
                            <td><?=$value->idMantenimiento?></td>
                            <td><?=$value->nombreTipoMantenimiento?></td>
                            <td><?=$value->idItem?> <?=$value->nombreItem?></td>
                            <td><?=$value->nombreCiudad?></td>
                            <td><?=$value->nombre1?></td>
                            <td><?=$value->fechaMantenimiento?></td>
                            <td><?=$value->frecuenciaMantenimiento?> días</td>
                            <td>
                                <textarea style="width: 100%; height: 100%; border: none"><?=$value->descripcion?></textarea>
                            </td>
                            <td><?=$value->estadoMantenimiento?></td>
                            <td><a href="#" class="edit-record btn btn-primary" data-id="<?php echo $value->idMantenimiento;?>">EDITAR</a></td></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
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


            $.post('c_mantenimiento/edidMantenimiento/',
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
