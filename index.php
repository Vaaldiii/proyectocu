<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pompiere" type="text/css">
		<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" media="screen">
		<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="datetimepicker/jquery.datetimepicker.css">
		<link rel="stylesheet" href="css/navbar.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<style>
			.container-fluid{
				padding-left: 0px;
				padding-right: 0px;
			}
			.container-fluid .row {
				margin-left: 0px;
				margin-right: 0px;
			}
			
			.separator{
				width: 80%;
				border-top: 1px solid #e6e6e6;
				margin-top: 15px;
			}
			
			.small-separator{
				width: 15%;
				border: 1px solid #1db6fd;
				margin-top: 15px;
			}
			
			.full-separator{
				width: 100%;
				border-top: 1px solid #d9d9d9;
				margin-top: 15px;
			}
			
			/* BODY */
			
			.fixed-page{
				height: calc(100vh);
			}
			
			.full-page{
				height: 100%;
			}
			
			#search-results{
				padding-left: 0px;
				padding-right: 0px;
				height: 100%;
				overflow-y: scroll;
			}
			
			#search-options{
				margin-top: 15px;
				margin-bottom: 15px;
				padding-left: 15px;
				padding-right: 15px;
			}
			
			#search-options label{
				font-weight: 200;
			}
			
			#search-options .form-horizontal .checkbox-inline{
				padding-top: 0px;
			}
			
			#search-options .checkbox-filter div{
				padding-left: 0px;
			}
			
			#search-options .checkbox-inline{
				overflow: hidden;
				white-space: nowrap;
				text-overflow: ellipsis;
			} 
			
			
			#inputRange::-ms-fill-lower{
				background-color: #fd6868;
			}
			
			#rangeLabel{
				padding-top: 0px;
			}
			
			#range-value{
				font-size: 90%
			}
			
			.more-filters{
				display: none;
			}
			
			.announce-counter{
				height: 50px;

			}
			
			.announce-counter div{
				line-height: 50px;
			}
			
			.test{
				background-size: cover;
				height: 250px;
				padding: 0px;
				border: 10px solid white;
			}
			.t{
				background-color: rgba(0,0,0,0.7);
				padding-top: 15px;
				padding-bottom: 15px;
				padding-left: 25px;
				padding-right: 25px;
				position: absolute;
				bottom: 30px;
			}
			
			.test h4{
				color: #fff;
			}
			
			#apply-filter-div, .announce-counter{
				margin-left: 10px;
				margin-right: 10px;
			}
			/* BODY */
			
			/* MAP */
			
			#map-canvas{
				height: 100%;
			}

			.ui-slider{
				height: 4px;
			}

			.ui-slider-handle{
				width: 20px;
				height: 20px;
				background: #fff;
				-moz-border-radius: 50px;
				-webkit-border-radius: 50px;
				border-radius: 50px;
				border: 1px solid #aaa;
				box-shadow: 0 2px 4px rgba(0,0,0,0.1);
			}

			.ui-widget-header{
				background: none;
				background-color: #ff5a5f;

			}

			
			/* MAP */
			

		</style>
		<title>Terremotos</title>
	</head>
	<body>
		
			
		<div class="container-fluid fixed-page">
		
			<div class="row full-page">
				<div id="map-canvas" class="col-sm-8"></div>
				<div id="search-results" class="col-sm-4">

					<div id="search-options">
						<h4>Fechas</h4>
						<form class="form-horizontal">
							<div class="form-group">
								<label for="fromDate" class="col-sm-4 control-label">Desde</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="fromDate" placeholder="Entre las">
								</div>
							</div>
							<div class="form-group">
								<label for="toDate" class="col-sm-4 control-label">Hasta</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="toDate" placeholder="Entre las">
								</div>
							</div>
							
							<hr class="separator">
							
							<h4>Magnitud</h4>
							<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
 									<input type="text" id="amount" readonly style="border:0; font-weight:bold;">
 									<div id="slider-range"></div>
								</div>
							</div>
							<br>
							<div class="more-filters">
								
								<div class="form-group">
									
									<label class="col-sm-4 control-label">Provocó Tsunami</label>
									<div class="col-sm-8 checkbox-filter">
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="tsunamiYes" name="tsunamiCheckbox" value="option1"> Si
											</label>
										</div>
										
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="tsunamiNo" name="tsunamiCheckbox" value="option1"> No
											</label>
										</div>
									</div>
									
								</div>
								<br />
								
								<button class="btn btn-danger btn-block less-filters-btn" type="button">Menos Filtros</button>
									
							</div>
							
							
						</form>
						<br />
					</div>
					
					<hr class="full-separator">
					
					<div class="announce-counter">
							<button class="btn btn-primary more-filters-btn btn-block">Más Filtros</button>
					</div>
					
					<hr class="full-separator">
					<div id="apply-filter-div">
						<button class="btn btn-success btn-block" id="apply-filter-btn" type="button">Aplicar Filtros</button>
					</div>
					

				</div>
			</div>
			
		</div>
	
	
	
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script type="text/javascript" src="bootstrap-3.3.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
		<script type="text/javascript" src="datetimepicker/jquery.datetimepicker.js"></script>
		<script type="text/javascript" src="js/geolocation.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6pMpJjSW_OVXreXlA0vJ3pNfzH3lvpYs&signed_in=true&callback=initMap"></script>

		<script>
			$(function(){			
				//Iniciar Timepickers
				$('#fromDate').datetimepicker({
			      pickTime: false
			    });
	
			    $('#toDate').datetimepicker({
			      pickTime: false
			    });
				
				//Cambiar value del Range
				$(function() {
					$( "#slider-range" ).slider({
					range: true,
					min: 0,
					max: 10,
					values: [ 0, 10 ],
					step: 0.1,
					slide: function( event, ui ) {
						$( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
						}
					});
					$( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) +
					" - " + $( "#slider-range" ).slider( "values", 1 ) );
				});
				
				//Slide de Filtros
				$(".more-filters-btn, .less-filters-btn").click(function(){
				 	$(".announce-counter").slideToggle();
				 	$(".more-filters").slideToggle()
				});
				
				$("#apply-filter-btn").click(function(){
					var fromDate = $('#fromDate').val();
					var toDate = $('#toDate').val();
					var min = $( "#slider-range" ).slider( "values", 0 );
					var max = $( "#slider-range" ).slider( "values", 1 );
					
					var request = $.ajax({
					  url: "eq.php",
					  data: {
						  minmag: min,
						  maxmag: max
					  },
					  dataType: "json"
					});
					 
					request.done(function( data ) {
						
					});
				});
				
			});
			
		</script>
	</body>
</html>