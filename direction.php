<!DOCTYPE html><html><head>
	<title>direction map</title>
	<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
	<style>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
  </style>
  <style>
#inputs {
position: absolute;
top: 0;
left: 0;
margin-top: 50px;
padding: 10px;
}
#judul{
position: fixed;
    bottom: 0px;
    right: 0px;
    width: 100%;
    top: 94.2%;
    background: gray;
 
}

#haver{
position: absolute;
top: 480px;
left: 50px;
padding: 10px;
}
.distance-container {
position: absolute;
top: 10px;
left: 10px;
z-index: 1;} 
.distance-container > * {
background-color: rgba(0, 0, 0, 0.5);
color: #fff;
font-size: 11px;
line-height: 18px;
display: block;
margin: 0;
padding: 5px 10px;
border-radius: 3px; }
</style>

</head>
</head>
<body>
  <style type="text/css">
.tes{
  position: fixed;
  bottom: 0px;
  left: 100px;
  right: 0px;
}
.topnav {
    background-color: #333;
    overflow: hidden;

}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 1px 1px;
  text-decoration: none;
  font-size: 17px;

}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}
</style>

<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css">



<!-- Load the `mapbox-gl-geocoder` plugin. -->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">
 
<!-- Promise polyfill script is required -->
<!-- to use Mapbox GL Geocoder in IE 11. -->
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

<div id='map' ></div>

<div class="tes">

<div class="topnav">

<style>
.dropbtn {
  background-color: red;
  color: white;
  padding: 5px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: gray;
}

.dropdown {
  position: relative;
  display: inline-block;
  top: 50px;
  left: 5px;
  bottom: 0px;


}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 0px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>


  </div>
</div>

</div>



<div class="dropdown">
  <a href="index.php"><button class="dropbtn" style="margin-bottom: 5px;">Kembali</button></a><br>
  <button onclick="myFunction()" class="dropbtn">Daftar mata air</button>
  <div id="myDropdown" class="dropdown-content">
    
<a><button id="SSN_I" style="width: 150px;">sumur sonean I</button><br></a>
<a><button id="SSN_II" style="width: 150px;">sumur sonean II</button><br></a>
<a><button id="MAK" style="width: 150px;">mata air kayen</button><br></a>
<a><button id="STL"style="width: 150px;">sumur trangkil</button><br></a>
<a><button id="SSK"style="width: 150px;">sumur Swaduk </button><br></a>
<a><button id="SKN"style="width: 150px;">sumur Kecanen </button><br></a>
<a><button id="MAL"style="width: 150px;">mata air lumbungmas</button><br></a>
<a><button id="SWO"style="width: 150px;">sumur wonorejo</button><br></a>
<a><button id="SSO"style="width: 150px;">sumur sambi rejo</button><br></a>
<a><button id="SS_I"style="width: 150px;">sumur sani I</button><br></a>
<a><button id="SS_II"style="width: 150px;">sumur sani II</button><br></a>
<a><button id="STI"style="width: 150px;">sumur tamansari</button><br></a>
<a><button id="SRT"style="width: 150px;">sumur rendole timur</button><br></a>
<a><button id="SRB"style="width: 150px;">sumur rendole barat</button><br></a>
<a><button id="SSTO"style="width: 150px;">sumur sidokerto</button><br></a>
<a><button id="SSO_I"style="width: 150px;">sumur sugiharjo I</button><br></a>
<a><button id="SSO_II"style="width: 150px;">sumur sugiharjo II</button><br></a>
<a><button id="SSO_III"style="width: 150px;">sumur sugiharjo III</button><br></a>
<a><button id="SSO_IV"style="width: 150px;">sumur sugiharjo IV</button><br></a>
<a><button id="WTP"style="width: 150px;">wtp</button></a>
<a><button id="home" style="width: 150px;" >zoom out</button><br></a>
  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<div id="distance" class="distance-container"></div>
 
<script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>

<script>

function beranda(){
  //do something
window.open('manual_book1.php', '_blank');

}



mapboxgl.accessToken = 'pk.eyJ1IjoiZGVuaTEyOTciLCJhIjoiY2txbTVtYzZ1MGJxdTJucTQ3ano1ZW1vZyJ9.G0zTXGqTaWn3VQDfkpRkQQ';
var map = new mapboxgl.Map({
  container: 'map',style: 'mapbox://styles/mapbox/streets-v11',
  center:[111.0140718,-6.752206],zoom:10});

map.addControl(new mapboxgl.NavigationControl(),
'bottom-right');

map.addControl(
new mapboxgl.GeolocateControl({positionOptions: {
  enableHighAccuracy: true
},trackUserLocation: true}),'bottom-right');


var places = {
	'type': 'FeatureCollection','features': [{
		'type': 'Feature','properties': {
			'description': "Sumur Sonean I"
		},'geometry': {
			'type': 'Point','coordinates': [111.0131213,-6.6027528]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Sonean II"
		},'geometry': {
			'type': 'Point','coordinates': [111.0286309,-6.6024864]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Mata Air Kayen"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.036483,-6.925761]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Trangkil"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.0674809,-6.6673528]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Swaduk"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.057125,-6.664136]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Kecanen"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.062550,-6.656747]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Mata Air Lumbungmas"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.160592,-6.889153]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Wonorejo"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.041128,-6.708186]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Sambirejo"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.035614,-6.709661]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Sani I"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.020828,-6.728875]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Sani II"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.016669,-6.719444]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Tamansari"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.013681,-6.721200]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Rendole Timur"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.013908,-6.736058]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Rendole Barat"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.011836,-6.735503]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Sidokerto"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.039808,-6.730511]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Sugiharjo I"
		},'geometry': {
			'type': 'Point','coordinates': [  111.071256,-6.743033]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Sugiharjo II"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.070897,-6.742956]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Sugiharjo III"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.070886,-6.743581]
		}
	},{
		'type': 'Feature','properties': {
			'description': "Sumur Sugiharjo IV"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.071731,-6.742633]
		}
	},{
		'type': 'Feature','properties': {
			'description': "WTP"
		},'geometry': {
			'type': 'Point','coordinates': [ 111.071064,-6.743389]
		}
	}
	]
};


map.on('load', function () {
map.addSource('places', {
type: 'geojson',
// Use a URL for the value for the `data` property.
data: places
});
 
map.addLayer({
'id': 'earthquakes-layer',
'type': 'circle',
'source': 'places',
'paint': {
'circle-radius': 8,
'circle-stroke-width': 2,
'circle-color': 'red',
'circle-stroke-color': 'white'

}});

map.addLayer({
'id': 'poi-labels',
'type': 'symbol',
'source': 'places',
'layout': {
'text-field': ['get', 'description'],
'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
'text-radial-offset': 0.5,
'text-justify': 'auto',
'icon-image': ['get', 'icon']

}});

});



map.on('load', function () {
// Add a data source containing GeoJSON data.
map.addSource('maine', {
'type': 'geojson',
'data': {
'type': 'Feature',
'geometry': {
'type': 'Polygon',
// These coordinates outline Maine.
'coordinates': [[
[110.976915,-6.411354],[111.047124,-6.427389],[111.044034,-6.435918],[111.048326,-6.472762],
[111.071672,-6.539620],[111.115446,-6.620792],[111.144628,-6.652166],[111.191320,-6.665124],
[111.233205,-6.686607],[111.239728,-6.717636],[111.234922,-6.752413],[111.246595,-6.767414],
[111.250028,-6.806620],[111.269941,-6.830823],[111.255521,-6.836618],[111.262731,-6.853321],
[111.243505,-6.861843],[111.224279,-6.847526],[111.220502,-6.871046],[111.197843,-6.896610],
[111.153039,-6.907857],[111.140680,-6.901041],[111.142740,-6.910584],[111.135187,-6.920809],
[111.122140,-6.912629],[111.078538,-6.940576],[111.004381,-6.969203],[110.913743,-6.963750],
[110.865678,-6.974655],[110.850572,-6.996465],[110.809373,-6.997828],[110.810747,-6.941939],
[110.846452,-6.929670],[110.876665,-6.865592],[110.919237,-6.866956],[110.974168,-6.827414],
[110.961809,-6.753777],[110.924730,-6.729229],[110.932970,-6.700587],[110.894517,-6.637843],
[110.913743,-6.495958],[110.970048,-6.456387],[110.976915,-6.411354]]]}}});
 
// Add a new layer to visualize the polygon.
map.addLayer({
'id': 'maine',
'type': 'fill',
'source': 'maine', 
'layout': {},
'paint': {
'fill-color': '', 
'fill-opacity': 0.5
}
});
// Add a black outline around the polygon.
map.addLayer({
'id': 'outline',
'type': 'line',
'source': 'maine',
'layout': {},
'paint': {
'line-color': '#000',
'line-width': 3
}
});
});

document.getElementById('SSN_I').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.0131213,-6.6027528],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SSN_II').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.0286309,-6.6024864],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('MAK').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.036483,-6.925761],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('STL').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.0674809,-6.6673528],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SSK').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.057125,-6.664136],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SKN').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.062550,-6.656747],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('MAL').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.160592,-6.889153],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SWO').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.041128,-6.708186],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SSO').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.035614,-6.709661],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SS_I').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.020828,-6.728875],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SS_II').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.016669,-6.719444],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('STI').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.013681,-6.721200],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SRT').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.013908,-6.736058],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SRB').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.011836,-6.735503],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SSTO').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.039808,-6.730511],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SSO_I').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.071256,-6.743033],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SSO_II').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.070897,-6.742956],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SSO_III').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.070886,-6.743581],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('SSO_IV').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.071731,-6.742633],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('WTP').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.071064,-6.743389],
zoom:18,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});

document.getElementById('home').addEventListener('click', function () {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [111.0140718,-6.752206],
zoom:10,
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});


map.addControl(
new MapboxDirections({
accessToken: mapboxgl.accessToken
}),
'top-right'
);
	



</script>

</body>
</html>