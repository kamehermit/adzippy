<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Traffic layer</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        z-index: 0;
        position: absolute;
        left: 0;
        right:0;
        top:0;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .coordinates{
        position: relative;
        z-index: 100;
        height: 100vh;
        width: 100vw;
        font-size: 11px;
        font-weight: 500;
      }
      #tl{
        
        position: absolute;
        top:0;
        left: 50%;
      }
      #ll{
        
        position: absolute;
        top:50%;
        left: 0;
/*        transform: rotate(90deg);*/
        
      }
      #rl{

        position: absolute;
        top:50%;
        right: 0;
        /*transform: rotate(90deg);*/
      }
      #bl{

        position: absolute;
        bottom:0;
        left: 50%;
      }

    </style>
  </head>
  <body>
    <div class="coordinates">
      <div id="tl">
        
      </div>
      <div id="ll">
        
      </div>
      <div id="rl">
        
      </div>
      <div id="bl">
        
      </div>
    </div>
    <div id="map">
      
    </div>
    <script>
      function initMap() {
        var customMapType = new google.maps.StyledMapType([ { "elementType": "labels", "stylers": [ { "visibility": "off" } ] }, { "featureType": "administrative", "stylers": [ { "visibility": "off" } ] }, { "featureType": "administrative", "elementType": "geometry", "stylers": [ { "visibility": "off" } ] }, { "featureType": "administrative.land_parcel", "stylers": [ { "visibility": "off" } ] }, { "featureType": "administrative.neighborhood", "stylers": [ { "visibility": "off" } ] }, { "featureType": "landscape", "stylers": [ { "visibility": "off" } ] }, { "featureType": "landscape.natural.terrain", "stylers": [ { "visibility": "off" } ] }, { "featureType": "poi", "stylers": [ { "visibility": "off" } ] }, { "featureType": "road", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "featureType": "transit", "stylers": [ { "visibility": "off" } ] }, { "featureType": "water", "stylers": [ { "visibility": "off" } ] } ], {
      name: 'Custom Style'
  });

        var customMapTypeId = 'custom_style';

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          zoomControl: false,
          scaleControl: false,
          mapTypeControl: false,
          streetViewControl: false,
          fullscreenControl: false,
          center: {lat: {{$lat}}, lng: {{$long}} },
          mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
    }
        });
        


        google.maps.event.addListener(map, 'bounds_changed', function() {
          
        /*var y = document.getElementsByClassName('gm-style');*/


         var bounds = map.getBounds();
         /*console.log("=============");*/
         console.clear();
         console.log(bounds.b.b);
         console.log(bounds.b.f);
         console.log(bounds.f.f);
         console.log(bounds.f.b);
        

          map.mapTypes.set(customMapTypeId, customMapType);
        map.setMapTypeId(customMapTypeId);
        var trafficLayer = new google.maps.TrafficLayer();
        trafficLayer.setMap(map);


        /*var e_log = document.createElement('p');
        e_log.style.color = '#2d2d2d';
        e_log.innerHTML = "-"+String(bounds.b.b).substring(0,9)+"-";*/
        var E_log = document.getElementById('ll');
        E_log.innerHTML = String(bounds.b.b).substring(0,9);

        var W_log = document.getElementById('rl');
        W_log.innerHTML = String(bounds.b.f).substring(0,9);

        var N_log = document.getElementById('tl');
        N_log.innerHTML = String(bounds.f.f).substring(0,9);

        var S_log = document.getElementById('bl');
        S_log.innerHTML = String(bounds.f.b).substring(0,9);
        /*var E_log = document.createElement('div');
          E_log.setAttribute("class", "E_log"); 
          E_log.appendChild(e_log);*/


          /*var w_log = document.createElement('p');
        w_log.style.color = '#2d2d2d';
        w_log.innerHTML = "-"+String(bounds.b.f).substring(0,9)+"-";
        var W_log = document.createElement('div');
          W_log.appendChild(w_log);

          var n_log = document.createElement('p');
        n_log.style.color = '#2d2d2d';
        n_log.innerHTML = "-"+String(bounds.f.f).substring(0,9)+"-";
        var N_log = document.createElement('div');
          N_log.appendChild(n_log);

          var s_log = document.createElement('p');
        s_log.style.color = '#2d2d2d';
        s_log.innerHTML = "-"+String(bounds.f.b).substring(0,9)+"-";
        var S_log = document.createElement('div');
          S_log.appendChild(s_log);
*/

        /*map.controls[google.maps.ControlPosition.LEFT_CENTER].push(E_log);
        
        map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(W_log);
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(N_log);
        map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(S_log);*/


        /*if(document.getElementById("E_log").hasChildNodes() ){
          E_log.replaceChild(e_log,e_log);  
        }
        else{
          E_log.appendChild(e_log);  
        }*/
        

        

        
        });

        

        

      
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxdDA3ZApySCcz976msoMcD0nrQxGkk_A&callback=initMap">
    </script>
  </body>
</html>