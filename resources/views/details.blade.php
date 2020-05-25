<!DOCTYPE html>
<html>
  <head>
    <title>details of ip</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>

      #map {
        height:60%;
        margin-left: 250px;
        margin-right:250px; 
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 20px;
      }
      .card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  max-width: 65%;
		  margin: auto;
		  text-align: center;
		  font-family: arial;
		}

		.title {
		  color: grey;
		  font-size: 18px;
		}

		button {
		  border: none;
		  outline: 0;
		  display: inline-block;
		  padding: 8px;
		  color: white;
		  background-color: #000;
		  text-align: center;
		  cursor: pointer;
		  width: 100%;
		  font-size: 18px;
		}

		a {
		  text-decoration: none;
		  font-size: 22px;
		  color: black;
		}

		button:hover, a:hover {
		  opacity: 0.7;
		}
    </style>
  </head>
  <body>

  	<h2 style="text-align:center">IP DETAILS</h2>
    <div id="map"></div>
	<div class="card"><br>
	  <h1>{{ $data->countryName }}</h1>
	  <p class="title">{{ $data->regionName }},{{ $data->cityName }}</p>
	  <p>your ip :{{ $data->ip }}</p>
	  
	  <p><button>Contact</button></p>
	</div>
    <script>
    	var lat="{{$data->latitude}}";
    	var lang="{{$data->longitude}}";
    	console.log(lat);
     
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: parseInt(lat), lng: parseInt(lang)}
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3_nchoqV696350i6DaDNW2WgQ42F2dRw&callback=initMap"
    async defer>
    </script>
  </body>
</html>