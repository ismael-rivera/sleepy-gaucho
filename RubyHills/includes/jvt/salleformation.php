<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>jQuery virtual tour</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/jquery.panorama.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.1.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.panorama.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("img.advancedpanorama").panorama({
	                auto_start: 0,
			start_position: 1527
	         });
	});
</script>
<script type="text/javascript" src="js/cvi_text_lib.js"></script>
<script type="text/javascript" src="js/jquery.advanced-panorama.js"></script>
<script type="text/javascript" src="js/jquery.flipv.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.thickbox').fancybox();
	});
</script>

<style  type="text/css">
	body {
		background: #595959;
		text-align: center;
	}
	h1 {
		color: white;
		margin-bottom: 2em;
		font-family: Verdana;
		font-weight: normal;
		font-size: 25px;
	}
	#page {
		text-align: center;
		color: white;
	}
	#page a {
		color: white;
	}
	#page .panorama-viewport {
		border: 20px solid #414141;
		margin-left: auto;
		margin-right: auto;
	}
	#page p {
		margin-bottom: 1em;
	}
</style>
</head>
<body>
<h1>jQuery virtual tour</h1>

<div id="page">
	<p>
		<a href="http://openstudio.fr/jQuery-virtual-tour.html?lang=en">download and online documentation</a>
	</p>
	
	<img src="img/atelier.jpg" class="advancedpanorama" width="2642" height="375" usemap="testmap" alt="Salle de formation" />
	<map id="testmap" name="testmap"> 
		<area shape="rect" coords="543,105,699,225" href="sculpteur.html" alt="vers l'atelier du sculpteur" /> 
	</map>
	
	
</div>
</body>
</html>