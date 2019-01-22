// variables globales...
var marker;
var markers = [];
var map;

$( document ).ready(function() {
  inicializarMapa();
  pintarTabla();
  
	// Manejadores de eventos
	//  Latitud / longitud
	$( "#Latitud" ).change(function() {
		centrar();
	});	
	$( "#Longitud" ).change(function() {
		centrar();
	});
	// Botón guardar
	$( "#Guardar" ).click(function() {
		guardar();
		
	});
});

function inicializarMapa() {
	var uem_coords = {lat: 40.373056, lng: -3.919213}; 
	
	// Actualizamos los campos de las coordenadas del fomulario
	$("#Latitud").val(uem_coords.lat);
	$("#Longitud").val(uem_coords.lng);
	
	map = L.map('map').setView(uem_coords, 13);
	
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(map);

	pintarMarcadores();

	marker = L.marker(uem_coords);
	marker.addTo(map);
	marker.setZIndexOffset(1000);
	marker.dragging.enable();
	
	marker.on('dragend', function(ev) {
		// Actualizamos los campos de las coordenadas del fomulario
		$("#Latitud").val(marker.getLatLng().lat);
		$("#Longitud").val(marker.getLatLng().lng);
	});
	
	
}
	function pintarTabla() {
		$.get(	'tabla_marcadores.php',
			function(data, status) {
				if (status === 'success') {
					$('#tabla').html(data);
					
					// Enlace borrar
					// Usando manejador de eventos asociado a la clase borrar.
					$( ".borrar" ).click(function() {
						id = $(this).closest('tr').attr("id");
						borrar(id);
					});
				}
			})
	}


	// Función para pintar marcadores
	function pintarMarcadores() {
		// Vamos a borrar los marcadores existentes
		for(i=0;i<markers.length;i++){
			map.removeLayer(markers[i]);
		}
		
		// Solitar los marcadores al servidor
		$.get( "json_marcadores.php", function( data ) {
			console.log( "datos descargados: " + data );
			
			// pasar de String a un array json
			var json = JSON.parse(data);		

			 json.forEach(function(obj) { 
				//console.log(obj.latitud);
				m = L.marker({lat: obj.latitud, lng: obj.longitud});
				
				markers.push(m);
				
				m.addTo(map);
			 });
			 
			});
		
		//console.log(marcadores);
		
		// pintarlos
		
	}


	function ver(latitud, longitud) {
		pos= new L.LatLng(latitud, longitud);
		// centramos el mapa		
		map.panTo(pos);
	}

  // Función para centrar el mapa en unas coordenadas
  function centrar() {
	// Recogemos la posición actual
	latitud = $("#Latitud").val();
	longitud = $("#Longitud").val();
	
	// verificamos que son válidos
		if (isNaN(latitud)) {
			alert("Latitud incorrecta!");
		}
		else if (isNaN(longitud)) {
			alert("Longitud incorrecta!");
		}
		else {	// Todo OK!	
			pos= new L.LatLng(latitud, longitud);
			// centramos el mapa		
			map.panTo(pos);
			
			// Movemos el marcador
			marker.setLatLng(pos);
		}
	}
	
	function guardar() {
		// Extraer latitud y longitud
		latitud = $("#Latitud").val();
		longitud = $("#Longitud").val();
		
		// Pasarlas al servidor para que las guarde
		$.post(	'guardar.php', 
				{ 'Latitud' : latitud,
				  'Longitud' : longitud},
				function(data, status) {
					if (status === 'success') {
						//$('#ajax-response').html(data);
						console.log("Coordenadas guardadas!");
						
						pintarMarcadores();
						// Refrescar contenido tabla
						pintarTabla();
					}
				})
		

	}
	
	function borrar(id) {
		
		// Pasarl el ID al servidor para que las borre
		$.post(	'borrar.php', 
				{ 'Id' : id},
				function(data, status) {
					if (status === 'success') {
						//$('#ajax-response').html(data);
						console.log("Coordenadas borradas!");
						
						pintarMarcadores();
						// Refrescar contenido tabla
						pintarTabla();
					}
				})
		
		
	}
	  
	  
	  
	  
	  