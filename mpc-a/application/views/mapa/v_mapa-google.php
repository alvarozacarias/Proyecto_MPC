<div class="row">
    <div id="breadcrumb" class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="#">MAPA</a></li>
            <li><a href="#">Buscar Item</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <span>Mapa de Items</span>
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
            <button type="button" class="btn btn-default btn-sm" onclick="cargarItems()">
                <span class="fa fa-download"></span>
                Cargar Items
            </button>
            <button type="button" class="btn btn-default btn-sm" onclick=guardarCambiosMapa()">
                <span class="fa fa-save"></span>
                Guardar Cambios
            </button>
            <button type="button" class="btn btn-default btn-sm" onclick="cambioDeAccion('crear_linea')">
                <span class="fa fa-arrows-h"></span>
                Enlace
            </button>
            <button type="button" class="btn btn-default btn-sm" onclick="cambioDeAccion('eliminar_item')">
                <span class="fa fa-minus-square"></span>
                Eliminar Item
            </button>

            <button type="button" class="btn btn-default btn-sm" onclick="geolocalizacion()">
                <span class="fa fa-map-marker"></span>
                Hubicarse en el mapa
            </button>
                <!---Aqui se llama al mapa y se le da el tamaño-->
            <div id="map" style="width:1030px;height:500px"></div>
            <!--Aqui empieza la leyenda-->
            <div class="table-responsive box-content no-padding">
                <table class="table table-bordered table-striped table-hover table-datatable table-heading ">
                    <thead>
                    <tr>
                        <th><button type="button" class="btn btn-default btn-sm" onclick="crearMarcador('http://localhost:8888/github/Proyecto_MPC/Proyecto_MPC/mpc-a/resources/images/postes2.png','vacio')">
                                <span class="fa fa-circle-o"></span>
                                Poste de Madera
                            </button></th>
                        <th><button type="button" class="btn btn-default btn-sm" onclick="crearMarcador('http://localhost:8888/github/Proyecto_MPC/Proyecto_MPC/mpc-a/resources/images/mapPosteConcreto.png','vacio')">
                                <span class="fa fa-circle"></span>
                                Poste de Concreto
                            </button></th>
                        <th><button type="button" class="btn btn-default btn-sm" onclick="crearMarcador('http://localhost:8888/github/Proyecto_MPC/Proyecto_MPC/mpc-a/resources/images/mapNodo.png','vacio')">
                                <span class="fa fa-tasks"></span>
                                Nodo
                            </button></th>
                        <th><button type="button" class="btn btn-default btn-sm" onclick="crearMarcador('http://localhost:8888/github/Proyecto_MPC/Proyecto_MPC/mpc-a/resources/images/mapAtm.png','vacio')">
                                <span class="fa fa-credit-card"></span>
                                A.T.M.
                            </button></th>
                        <th><button type="button" class="btn btn-default btn-sm" onclick="crearMarcador('http://localhost:8888/github/Proyecto_MPC/Proyecto_MPC/mpc-a/resources/images/mapEnlace.png','vacio')">
                                <span class="fa fa-users"></span>
                                Enlace Cliente
                            </button></th>
                        <th><button type="button" class="btn btn-default btn-sm" onclick="crearMarcador('http://localhost:8888/github/Proyecto_MPC/Proyecto_MPC/mpc-a/resources/images/mapCajaEmpalme.png','vacio')">
                                <span class="fa fa-sitemap"></span>
                                Caja de Empalme
                            </button></th>
                        <th><button type="button" class="btn btn-default btn-sm" onclick="crearMarcador('http://localhost:8888/github/Proyecto_MPC/Proyecto_MPC/mpc-a/resources/images/mapReserva.png','vacio')">
                            <span class="fa fa-exchange"></span>
                            Reserva de Fibra Optica
                        </button></th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<script>
    //Aqui empieza
    //variables globales
    var marcadores = [];
    var posicion;
    var cordenadas=[];
    //var varEliminarItem=false;
    var accion='sin_accion';
    //////////
    var latlng = new google.maps.LatLng(-17.390852, -66.158300);//aqui podria ir la latitud y longitud de la ciudad del empleado
    var mapCanvas = new google.maps.Map(document.getElementById('map'), {
        center: latlng,
        zoom: 17
    });

    //aqui empieza la programacion par la generacion de marcadores
    //aqui empieza la creacion de marcadores
    function crearMarcador(direccionImg,posicionLocal)
    {
        var posicionMet='';
        var estadoDrag;
        if(posicionLocal=='vacio')
        {
            posicionMet=latlng;
            estadoDrag=true;
        }
        else
        {
            posicionMet=posicionLocal;
            estadoDrag=false;
        }
        var vmarker=new google.maps.Marker
        ({
            map:mapCanvas,
            position: posicionMet,//para que se cree el nodo en la posicion actual del usuario
            animation:google.maps.Animation.DROP,
            icon:direccionImg,
            draggable:estadoDrag
            //id:varContId//aqui poner el id de la base de datos
        });
        marcadores.push(vmarker);
        tapMarcador(vmarker);//para hacer tap en cualquier marcador
        accion='sin_accion';
        //para obtener la direccion del marcador


    }


    function eliminarItem(posItemEliminado)
    {
        marcadores[posItemEliminado].setMap(null);
        marcadores.splice(posItemEliminado, 1);//para que elimine el item del vector marcadores
        accion='sin_accion';
        console.log('Item eliminado');
        //aqui si tiene id se elimina de la base de datos esa seria la unica diferencia para los marcadores
    }
    function tapMarcador(marker)
    {
        google.maps.event.addListener(marker, 'mousedown', function(event)
        {
            console.log('las cordenadas son'+event.latLng);//para sacar las cordenadas solo se añadio (event) en la line a de arriba
            switch(accion)
            {
                case 'eliminar_item':
                    var itemEliminado=marcadores.indexOf(marker);
                    eliminarItem(itemEliminado);
                    break;
                case 'crear_linea':
                    //mientras se crea la linea deberia bloquearse los demas botones para no ocacionar conflictos
                   
                    crearLinea(/* aqui las posiciones*/);
                    break;
                case 'sin_accion':
                    break;
                default:
            }
        });
    }
    function cambioDeAccion(nombreAccion)
    {
        switch(nombreAccion) {
            case 'eliminar_item':
                accion='eliminar_item';
                console.log('Seleccione un item para eliminar');
                break;
            case 'crear_linea':
                accion='crear_linea';
                console.log('Seleccione los items');
                break;
            default:
        }
    }
    function crearLinea(punto)
    {
        if(cordenadas.length<=1)
        {
            if(cordenadas.length==1)
            {
                var vcordenadas=[
                    cordenadas[0],
                    cordenadas[1]
                ];
                var poly = new google.maps.Polyline({
                    path:vcordenadas,
                    strokeWeight: -1,
                    strokeColor: "#000000",
                    //strokeOpacity:0.5,
                    map: mapCanvas
                    //draggable:true
                });
                accion='sin_accion';
            }
            cordenadas.push(punto);
            console.log(punto);
        }
    }
    function geolocalizacion()
    {
        //Desde aqui comienza la geolocalizacion de la persona/////////////
        var infoWindow = new google.maps.InfoWindow({map: mapCanvas});
        // Try HTML5 geolocation.
        if (navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(function(position)
            {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                //posicion=pos;//para enviar la posicion a nivel global
                infoWindow.setPosition(pos);
                infoWindow.setContent('Aqui me encuentro.');
                mapCanvas.setCenter(pos);
            }, function()
            {
                handleLocationError(true, infoWindow, mapCanvas.getCenter());
            });
        }
        else
        {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, mapCanvas.getCenter());
        }
        //Aqui termina la geolocalizacion de la persona///////////////////
    }
</script>