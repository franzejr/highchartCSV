<!DOCTYPE html>
<html>
<head>
	<title> Machine Learning Methods</title>
	<meta name='author' content='FranzeJr.' />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<!-- Page styles -->
	<link type='text/css' href='css/demo.css' rel='stylesheet' media='screen' />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />	

	<!-- Contact Form CSS files -->
	<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />

	<!-- JS files are loaded at the bottom of the page -->
</head>
<body>
<div id='container'>
	
	<div id='logo'>
		<h1>Machine<span>Learning</span> Algorithms</h1>
		<span class='title'>A small system to work with Machine Learning</span>
	</div>


	<div id="entradas_menu">
		<div id="methods_menu">
			<select>
				<option id="linear_regression" value="linear_regression">Linear Regression</option>
				<option id="LOESS" value="LOESS">LOESS</option>
			</select>
		</div>

		<div id="examples_menu">
			<select>
				<option id="dados_ru" value="dados_ru">Dados do RU</option>
			</select>
		</div>
		<div> 
			<button id="runButton">Run</button>
			Type of graphic: 
			<select id="typeGraphic">
				<option value="line">Line</option>
				<option value="scatter">Scatter</option>
				<option value="pie">Pie</option>
				<option value="bar">Bar</option>
			</select>
			<button id="plotGraphic">Plot</button>
			<button id="clearGraphic">Clear Graphic</button>
		</div>
	</div>
		
		<div class="example">
			<h2>Load File</h2>
			<a href="#" onclick="openDialogUpload()">Load your file here</a>
			<hr />
				<output id="list"></output>
			<hr />
			<table id="contents" style="width:80%; height:400px;" border></table>
		</div>
		
		<div class="example">
			<h2>Graphic</h2>
			<div id="graphic_container" style="margin: 0 auto"></div>
		</div>

		<!-- modal content -->
		<div id="basic-modal-content">
			<h5>You can upload your file</h5>
				<label for="file">Filename:</label>
				<input type="file" id="files" name="files[]" multiple />
		</div>

		<!-- preload the images -->
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div>
	<div id='footer'>
		Universidade Federal do Ceará, Artificial Inteligence <br/>
		Advisor: Carlos Brito
	</div>


</div>

<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type='text/javascript' src="js/jquery.js"></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script src="http://jquery-csv.googlecode.com/git/src/jquery.csv.js"></script>
<script src="highcharts/js/highcharts.js"></script>
<script src="highcharts/js/modules/exporting.js"></script>

<script src="js/csv-functions.js"></script>
<script src="js/chart-functions.js"></script>

<script type='text/javascript'>

	function openDialogUpload(){
		$('#basic-modal-content').modal();
	}

	//Ready function
	jQuery(function ($) {
		
		$('#plotGraphic').click(function(){  createChart(); });
		$('#clearGraphic').click(function(){  clearChart(); });

		//Working with the csv
		if(isAPIAvailable()) {
      		$('#files').bind('change', handleFileSelect);
      		var generalFile = null;
      		var finalVector = null;
    	}
	});	
   
</script>
</body>
</html>