<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Bienvenidos</a></li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->

<!--Start Dashboard 2-->
<div class="row-fluid">
	<div id="dashboard_links" class="col-xs-12 col-sm-2 pull-right">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#" class="tab-link" id="overview">Historia</a></li>
                        <li><a href="#" class="tab-link" id="servers">Misión</a></li>
			<li><a href="#" class="tab-link" id="clients">Visión</a></li>
			<li><a href="#" class="tab-link" id="graph">Valores</a></li>
		</ul>
	</div>
	<div id="dashboard_tabs" class="col-xs-12 col-sm-10">
            
		<!--Start Dashboard Tab 1-->
		<div id="dashboard-overview" class="row" style="visibility: visible; position: relative;">	
			<div class="box-content">
                                <h4 class="page-header">Historia</h4><br>
				
                    <center><h4>Titulo de la historia</h4></center><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In risus sem, gravida in justo quis, sagittis vulputate nulla. Mauris sit amet massa enim. Maecenas eros odio, dapibus at sapien at, molestie malesuada augue. Fusce pulvinar finibus tortor non imperdiet. Praesent consequat lacus vel viverra rhoncus. Nunc ac lacinia nibh. Fusce dictum nibh a purus euismod, eu sodales dui dictum. Nulla vitae lectus pretium, auctor justo non, tincidunt diam. Proin neque nunc, fringilla et hendrerit sit amet, mollis sed lectus. Nunc gravida sollicitudin convallis. <br>
                    			</div>		
			
		</div>
		<!--End Dashboard Tab 1-->

		<!--Start Dashboard Tab 4-->
		<div id="dashboard-servers" class="row" style="visibility: hidden; position: absolute;">	
			<div class="box-content">
                <h4 class="page-header">Misión</h4><br>                        
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In risus sem, gravida in justo quis, sagittis vulputate nulla. Mauris sit amet massa enim. Maecenas eros odio, dapibus at sapien at, molestie malesuada augue. Fusce pulvinar finibus tortor non imperdiet. Praesent consequat lacus vel viverra rhoncus. Nunc ac lacinia nibh. Fusce dictum nibh a purus euismod, eu sodales dui dictum. Nulla vitae lectus pretium, auctor justo non, tincidunt diam. Proin neque nunc, fringilla et hendrerit sit amet, mollis sed lectus. Nunc gravida sollicitudin convallis. 
			</div>
        </div>
		<!--End Dashboard Tab 4-->
                
		<!--Start Dashboard Tab 2-->
		<div id="dashboard-clients" class="row" style="visibility: hidden; position: absolute;">			
			<div class="box-content">
			<h4 class="page-header">Visión</h4><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In risus sem, gravida in justo quis, sagittis vulputate nulla. Mauris sit amet massa enim. Maecenas eros odio, dapibus at sapien at, molestie malesuada augue. Fusce pulvinar finibus tortor non imperdiet. Praesent consequat lacus vel viverra rhoncus. Nunc ac lacinia nibh. Fusce dictum nibh a purus euismod, eu sodales dui dictum. Nulla vitae lectus pretium, auctor justo non, tincidunt diam. Proin neque nunc, fringilla et hendrerit sit amet, mollis sed lectus. Nunc gravida sollicitudin convallis. 
			</div>
		</div>
		<!--End Dashboard Tab 2-->
                
                
		<!--Start Dashboard Tab 3-->
		<div id="dashboard-graph" class="row" style="width:100%; visibility: hidden; position: absolute;" >
            <div class="box-content">     
				<h4 class="page-header">Valores</h4><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. In risus sem, gravida in justo quis, sagittis vulputate nulla. Mauris sit amet massa enim. Maecenas eros odio, dapibus at sapien at, molestie malesuada augue. Fusce pulvinar finibus tortor non imperdiet. Praesent consequat lacus vel viverra rhoncus. Nunc ac lacinia nibh. Fusce dictum nibh a purus euismod, eu sodales dui dictum. Nulla vitae lectus pretium, auctor justo non, tincidunt diam. Proin neque nunc, fringilla et hendrerit sit amet, mollis sed lectus. Nunc gravida sollicitudin convallis. 
                </div>
			</div>
		<!--End Dashboard Tab 3-->

            <div class="clearfix"></div>
        </div>
<!--End Dashboard 2 -->
<div style="height: 40px;"></div>
<script type="text/javascript">
// Array for random data for Sparkline
var sparkline_arr_1 = SparklineTestData();
var sparkline_arr_2 = SparklineTestData();
var sparkline_arr_3 = SparklineTestData();
$(document).ready(function() {
	// Make all JS-activity for dashboard
	DashboardTabChecker();
	// Load Knob plugin and run callback for draw Knob charts for dashboard(tab-servers)
	LoadKnobScripts(DrawKnobDashboard);
	// Load Sparkline plugin and run callback for draw Sparkline charts for dashboard(top of dashboard + plot in tables)
	LoadSparkLineScript(DrawSparklineDashboard);
	// Load Morris plugin and run callback for draw Morris charts for dashboard
	LoadMorrisScripts(MorrisDashboard);
	// Make beauty hover in table
	$("#ticker-table").beautyHover();
});
</script>