// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.


//

      function initMap() {
        var styledMapType = new google.maps.StyledMapType(
             [
              {
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#f5f5f5"
                  }
                ]
              },
              {
                "elementType": "labels.icon",
                "stylers": [
                  {
                   "color": "#f5f5f5"
                  }
                ]
              },
              {
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#616161"
                  }
                ]
              },
              {
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#f5f5f5"
                  }
                ]
              },
              {
                "featureType": "administrative.land_parcel",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#bdbdbd"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#eeeeee"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#757575"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#e5e5e5"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#ffffff"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#757575"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#dadada"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#616161"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              },
              {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#e5e5e5"
                  }
                ]
              },
              {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#eeeeee"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#C9D8D5"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              }
            ],
            {name: 'Styled Map'});
    if(window.innerWidth<=767){
      var centromap={lat: 40.4622074, lng: -3.690494};
      }
    else{
          var centromap={lat: 40.4622074, lng: -3.690494};
    }
    var uluru ={lat: 40.462313, lng: -3.693926};
    var map = new google.maps.Map(document.getElementById('mapa'), {
      zoom: 16,
      center: centromap,
      mapTypeId: 'terrain',
    });
    //  marcador 40.462313, -3.693926
    // centro   40.4622074, -3.690494
        var contentString = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Kara (Oficinas Centrales)</h2>'+
            '<p>C/ Rosario Pino 18,1º-3.<br>'+
            '28020 Madrid <br>'+     
            // '<a target="_blank" href="https://goo.gl/maps/VkG8yvn7YL32">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        
        var marcadorimg = "http://karaolavarrieta.com/wp-content/themes/kara_ph/imagenes/marcadorKara.png";
        
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Kara',
          icon:marcadorimg
        });
        marker.addListener('click', function() {
          closeAll();
      infowindow.open(map, marker);
      
        });
    
       //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
     //infowindow.open(map, marker); //Ventana de informacion abierta desde el principio
    var list = [
              infowindow,
              
            ];
    function closeAll(){
       for(var i = 0; i<list.length ; i++){
          list[i].close();
      }
         
    }

      }