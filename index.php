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
			
			/* MAP */
			

		</style>
		<title>Canchas | ProLeague</title>
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
								<label for="inputRange" class="col-sm-4 control-label" id="rangeLabel">Magnitud</label>
								<div class="col-sm-6 text-right">
									<input type="range" min="1000" max="100000" step="1000" value="50000" id="inputRange">
									<sub id="range-value">$50000</sub>
								</div>
							</div>
							
							<div class="more-filters">
								
								<hr class="separator">
								
								<div class="form-group">
									
									<label class="col-sm-4 control-label" id="sizeLabel">Tamaño de Canchas</label>
									<div class="col-sm-8 checkbox-filter">
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="sizeCheckbox1" value="option1"> Fútbol
											</label>
										</div>
										
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="sizeCheckbox2" value="option1"> Fútbolito
											</label>
										</div>
										
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="sizeCheckbox3" value="option1"> Baby Fútbol
											</label>
										</div>
									</div>
									
								</div>
								
								<hr class="separator">
								
								<div class="form-group">
									
									<label class="col-sm-4 control-label" id="typeLabel">Tipos de Cancha</label>
									<div class="col-sm-8 checkbox-filter">
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="typeCheckbox1" value=""> Pasto Natural
											</label>
										</div>
										
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="typeCheckbox2" value=""> Pasto Sintetico
											</label>
										</div>
										
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="typeCheckbox3" value=""> Carpeta
											</label>
										</div>
									</div>
								</div>
								
								<hr class="separator">
								
								<div class="form-group">
									
									<label class="col-sm-4 control-label" id="servicesLabel">Servicios</label>
									<div class="col-sm-8 checkbox-filter">
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="serviceCheckbox1" value=""> Estacionamiento
											</label>
										</div>
										
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="serviceCheckbox2" value=""> Camarines
											</label>
										</div>
										
										<div class="col-sm-3">
											<label class="checkbox-inline">
												<input type="checkbox" id="serviceCheckbox3" value=""> Luces
											</label>
										</div>
									</div>
									
								</div>
								
								<button class="btn btn-danger btn-block less-filters-btn" type="button">Menos Filtros</button>
									
							</div>
							
							
						</form>
					</div>
					
					<hr class="full-separator">
					
					<div class="announce-counter">
							<button class="btn btn-primary more-filters-btn btn-block">Más Filtros</button>
					</div>
					
					<hr class="separator">
					<div id="apply-filter-div">
						<button class="btn btn-success btn-block" type="button">Aplicar Filtros</button>
					</div>
					

				</div>
			</div>
			
		</div>
	
	
	
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="bootstrap-3.3.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
		<script type="text/javascript" src="datetimepicker/jquery.datetimepicker.js"></script>
		<script type="text/javascript" src="js/geolocation.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6pMpJjSW_OVXreXlA0vJ3pNfzH3lvpYs&signed_in=true&callback=initMap"></script>
		<script>
			//Iniciar Timepickers
			$('#inputTimeT1').datetimepicker({
				format: 'H:i',
				datepicker: false,
				allowTimes:[
					'01:00', '08:00', '09:00', '10:00', '11:00', '12:00', 
					'13:00', '14:00', '15:00', '16:00', '17:00', '18:00',
					'19:00', '20:00', '21:00', '22:00', '23:00', '24:00'
				]
			});
			
			$('#inputTimeT2').datetimepicker({
				format: 'H:i',
				datepicker: false,
				allowTimes:[
					'01:00', '08:00', '09:00', '10:00', '11:00', '12:00', 
					'13:00', '14:00', '15:00', '16:00', '17:00', '18:00',
					'19:00', '20:00', '21:00', '22:00', '23:00', '24:00'
				]
			});
			
			//Cambiar value del Range
			$("#inputRange").on('input', function(){
				var val = $(this).val()
				var finalValue;
				
				if(val < 100000){
					finalValue = "$"+val;
				} else{
					finalValue = "+$100000";
				}
				//$("#range-value").html(finalValue);
				$("#range-value").text(finalValue);
			});
			
			//Slide de Filtros
			$(".more-filters-btn, .less-filters-btn").click(function(){
				$(".announce-counter").slideToggle();
				$(".more-filters").slideToggle()
			});
			
		</script>
	</body>
</html>