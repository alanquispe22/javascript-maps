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
      var centromap={lat: 40.4525881, lng: -3.6985061};
      }
    else{
          var centromap={lat: 40.475757, lng: -3.693528};
    }
    var uluru ={lat: 40.4625881, lng: -3.6935061};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: centromap,
          mapTypeId: 'terrain'
        });

        var contentString = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón (Oficinas Centrales)</h2>'+
            '<p>C/ Rosario Pino 18,1º-3.<br>'+
            '28020 Madrid <br>'+     
            '+34 648 888 888 </p>'+
            '<a target="_blank" href="https://goo.gl/maps/VkG8yvn7YL32">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
    var marcadorimg2 = {
      url:"https://malvon.es/wp-content/themes/malvon-v2/imagenes/malvon_marker_soon.png",
      /*size: new google.maps.Size(50, 50),
      origin: new google.maps.Point(10, 10),
      anchor: new google.maps.Point(25, 50)*/
    }
        var marcadorimg = "https://malvon.es/wp-content/themes/malvon-v2/imagenes/malvon_marker_on.png"
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Malvón (Oficinas Centrales)',
          icon:marcadorimg
        });
        marker.addListener('click', function() {
          closeAll();
      infowindow.open(map, marker);
      
        });
    
    // 2da dirección
    var uluru2 = {lat: 40.436156, lng: -3.716484};
        var contentString2 = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón Moncloa</h2>'+
            '<p>Calle Hilarión Eslava, 38.<br>'+
            '28015 Moncloa.<br>'+     
            '919 51 94 05</p>'+
            '<a target="_blank" href="https://www.google.com/maps/place/Malv%C3%B3n+Empanadas+Argentinas/@40.436156,-3.718678,17z/data=!3m1!4b1!4m5!3m4!1s0xd422843bbcc6757:0x9ce1368d70df4698!8m2!3d40.436156!4d-3.716484">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow2 = new google.maps.InfoWindow({
          content: contentString2
        });
       // var marcadorimg2 = "http://malvon.es/wp-content/themes/malvon-v2/imagenes/icon_marker_soon.png";
        var marker2 = new google.maps.Marker({
          position: uluru2,
          map: map,
          title: 'Moncloa',
          icon:marcadorimg
        });
        marker2.addListener('click', function() {
          closeAll();
      infowindow2.open(map, marker2);
      
        });
    
    // 3ra dirección
    var uluru3 = {lat: 40.5032855, lng: -3.8927629};
        var contentString3 = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón Las Rozas</h2>'+
            '<p>Calle Monaco 40<br>'+
            '28230 Las Rozas.<br>'+     
            '915 65 48 03</p>'+
            '<a target="_blank" href="https://www.google.com/maps/place/Malv%C3%B3n+Empanadas+Argentinas/@40.5032855,-3.8949569,17z/data=!3m1!4b1!4m5!3m4!1s0xd4183469d7dc1a9:0x9da5a060a77f6903!8m2!3d40.5032855!4d-3.8927629">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow3 = new google.maps.InfoWindow({
          content: contentString3
        });
        var marker3 = new google.maps.Marker({
          position: uluru3,
          map: map,
          title: 'Malvón Las Rozas',
          icon:marcadorimg
        });
        marker3.addListener('click', function() {
      closeAll();
          infowindow3.open(map, marker3);
      
        });
    // 4ta dirección
    var uluru4 = {lat:40.4507832, lng: -3.6867071};
        var contentString4 = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón Bernabéu</h2>'+
            '<p>Paseo de la Habana 52<br>'+
            '28003 Madrid<br>'+     
            '911 995 409</p>'+
            '<a target="_blank" href="https://www.google.com/maps/place/Malv%C3%B3n+Empanadas+Argentinas/@40.4507832,-3.6889011,17z/data=!3m1!4b1!4m5!3m4!1s0xd422917cde1d8ad:0xeab5d764ac026e8!8m2!3d40.4507832!4d-3.6867071">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow4 = new google.maps.InfoWindow({
          content: contentString4
        });
        var marker4 = new google.maps.Marker({
          position: uluru4,
          map: map,
          title: 'Malvón Bernabéu',
          icon:marcadorimg
        });
        marker4.addListener('click', function() {
          closeAll();
      infowindow4.open(map, marker4);   
        });
    
    // 5ta dirección
    var uluru5 = {lat:40.4586188, lng: -3.6583235};
        var contentString5 = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón Arturo Soria</h2>'+
      '<p>Calle Santo Ángel 3<br>'+
            '28003 Madrid<br>'+     
            '918 780 650</p>'+
            '<a target="_blank" href="https://goo.gl/maps/KktWpyP3Vdx">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow5 = new google.maps.InfoWindow({
          content: contentString5
        });
        var marker5 = new google.maps.Marker({
          position: uluru5,
          map: map,
          title: 'Malvón Arturo Soria',
          icon:marcadorimg
        });
        marker5.addListener('click', function() {
          closeAll();
      infowindow5.open(map, marker5);
            
        });
    
    // 6ta dirección
    var uluru6 = {lat:40.4385894, lng: -3.6995325};
        var contentString6 = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón Chamberí</h2>'+
           '<p>Calle José Abascal 23<br>'+
            '28003 Madrid<br>'+     
            '910 571 319</p>'+
            '<a target="_blank" href="https://goo.gl/maps/PDtrKicKMkv">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow6 = new google.maps.InfoWindow({
          content: contentString6
        });
        var marker6 = new google.maps.Marker({
          position: uluru6,
          map: map,
          title: 'Malvón Chamberí',
          icon:marcadorimg
        });
        marker6.addListener('click', function() {
          closeAll();
      infowindow6.open(map, marker6);   
        });

    // 7ma dirección40.4187647,-3.6785917
    var uluru7 = {lat:40.4187647, lng: -3.6785917};
        var contentString7 = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón Retiro</h2>'+
           '<p>Calle Narvaez 60<br>'+
            '28009 Madrid<br>'+     
            '915 044 089</p>'+
            //'<p>(Próxima apertura)<br></p>'+
            '<a target="_blank" href="https://goo.gl/maps/eipXZ8DHUbhd5hR2A">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow7 = new google.maps.InfoWindow({
          content: contentString7
        });
        var marker7 = new google.maps.Marker({
          position: uluru7,
          map: map,
          title: 'Malvón Retiro',
          icon:marcadorimg
        });
        marker7.addListener('click', function() {
          closeAll();
      infowindow7.open(map, marker7);   
        });

    // 8va dirección
    var uluru8 = {lat:40.4344663, lng: -3.6789338};
        var contentString8 = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón Salamanca</h2>'+
           '<p>Calle Diego de León 60<br>'+
            '28006 Madrid<br>'+     
            '635 335 335</p>'+
            '<p>(Próxima apertura)<br></p>'+
            '<a target="_blank" href="https://goo.gl/maps/xbXKy5vpa8z4aJ477">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow8 = new google.maps.InfoWindow({
          content: contentString8
        });
        var marker8 = new google.maps.Marker({
          position: uluru8,
          map: map,
          title: 'Malvón Salamanca',
          icon:marcadorimg2
        });
        marker8.addListener('click', function() {
          closeAll();
      infowindow8.open(map, marker8);   
        }); 
    // 9na dirección
    var uluru9 = {lat:40.4344663, lng: -3.6767451};
        var contentString9 = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón Lista</h2>'+
           '<p>Calle Ortega y Gasset 94<br>'+
            '28006 Madrid<br>'+     
            '635 335 335</p>'+
            '<a target="_blank" href="https://goo.gl/maps/m8TNfNbmE9RjrnRE8">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow9 = new google.maps.InfoWindow({
          content: contentString9
        });
        var marker9 = new google.maps.Marker({
          position: uluru9,
          map: map,
          title: 'Malvón Lista',
          icon:marcadorimg
        });
        marker9.addListener('click', function() {
          closeAll();
      infowindow9.open(map, marker9);   
        }); 
    // 10ma dirección
    var uluru10 = {lat:39.469324, lng: -0.3763117};
        var contentString10 = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón Valencia</h2>'+
           '<p>'+//'Calle Diego de León 60<br>'+
            '46002 Valencia<br>'+     
            '635 335 335</p>'+
            '<p>(Próxima apertura)<br></p>'+
            '<a target="_blank" href="https://goo.gl/maps/NArsvENHhFHAV2xB9">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow10 = new google.maps.InfoWindow({
          content: contentString10
        });
        var marker10 = new google.maps.Marker({
          position: uluru10,
          map: map,
          title: 'Malvón Valencia',
          icon:marcadorimg2
        });
        marker10.addListener('click', function() {
          closeAll();
      infowindow10.open(map, marker10);   
        }); 
    // 11va dirección 41.633789,-4.7258492
    var uluru11 = {lat:41.633789, lng: -4.7258492};
        var contentString11 = 
        '<div id=infomaps>'+
          '<div>'+
            '<h2>Malvón Valladolid</h2>'+
           '<p>'+//'Calle Diego de León 60<br>'+
            '47013 Valladolid<br>'+     
            '635 335 335</p>'+
            '<p>(Próxima apertura)<br></p>'+
            '<a target="_blank" href="https://goo.gl/maps/3sQYVrBcKC8h9ycEA">ver en GoogleMaps ></a>'+      
          '</div>'+
        '</div>';

        var infowindow11 = new google.maps.InfoWindow({
          content: contentString11
        });
        var marker11 = new google.maps.Marker({
          position: uluru11,
          map: map,
          title: 'Malvón Valladolid',
          icon:marcadorimg2
        });
        marker11.addListener('click', function() {
          closeAll();
      infowindow11.open(map, marker11);   
        }); 


    
    
       //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
     //infowindow.open(map, marker); //Ventana de informacion abierta desde el principio
    var list = [
              infowindow,
              infowindow2,
              infowindow3,
              infowindow4,
              infowindow5,
              infowindow6,
              infowindow7,
              infowindow8,
              infowindow9,
              infowindow10,
              infowindow11
            ];
    function closeAll(){
       for(var i = 0; i<list.length ; i++){
          list[i].close();
      }
         
    }

      }