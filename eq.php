<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$my_db = "visualizacion";
	
	$con=mysqli_connect($servername,$username,$password,$my_db);
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	
	// Perform queries 
	$query = mysqli_query($con,"SELECT * FROM terremotos WHERE mag >= $min and mag <= $max");
	$terremotos = array();
	$count = 0;
	while($results = mysqli_fetch_object($query)){
		$terremotos[$count]['id'] = $results->id;
		$terremotos[$count]['direccion'] = $results->direccion." ".$results->numero;
		$terremotos[$count]['nombre'] = $results->nombre;
		$terremotos[$count]['telefono'] = $results->telefono;
		$terremotos[$count]['rubro'] = $results->rubro;
		$terremotos[$count]['categoria'] = $results->categoria;
		$terremotos[$count]['url'] = $results->url;
		$count++;
	}
	echo json_encode($negocios);
	
	mysqli_close($con);
?>