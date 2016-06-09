var map;
var markers = [];



function initMap() {
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: { lat: 20, lng: -360 },
    zoom: 0.5
  });

  map.setOptions({ 
    minZoom: 3,
    maxZoom: 10 
  });

  // Get the earthquake data (JSONP format)
  // This feed is a copy from the USGS feed, you can find the originals here:
  //   http://earthquake.usgs.gov/earthquakes/feed/v1.0/geojson.php
  var script = document.createElement('script');
  script.setAttribute('src','https://storage.googleapis.com/maps-devrel/quakes.geo.json');
  document.getElementsByTagName('head')[0].appendChild(script);


  // Add a basic style.
  map.data.setStyle(function(feature) {
    var mag = Math.exp(parseFloat(feature.getProperty('mag'))) * 0.1;
    return /** @type {google.maps.Data.StyleOptions} */({
      icon: {
        path: google.maps.SymbolPath.CIRCLE,
        scale: mag,
        fillColor: '#f00',
        fillOpacity: 0.35,
        strokeWeight: 0
      }
    });
  });
}

// Defines the callback function referenced in the jsonp file.
function eqfeed_callback(data) {
  map.data.addGeoJson(data);
}

// Delete all Markers

function clearMap(){
	map.data.forEach(function (feature) {
    	map.data.remove(feature);
	});
}
    
function addMarkers(data){
	var myLatLng;
	foreach(earthquake in data){
		myLatLng = {lat: data[earthquake]['lat'], lng: data[earthquake]['lng']};
		var marker = new google.maps.Marker({
	    position: myLatLng,
	    map: map,
		}
  });
}