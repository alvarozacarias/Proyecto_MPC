<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyAzTSPubqjjMWiB8udg-9b5DdHt8iroWss" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
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

   if (GBrowserIsCompatible()) 
   {
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


<script>
	
        load( -17.385146111713336 , -66.31636664271355  );
</script>




