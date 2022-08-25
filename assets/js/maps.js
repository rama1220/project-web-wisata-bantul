var map = L.map('map').setView([-7.840243, 110.408333], 13);
        L.tileLayer('https://mt1.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.Routing.control({
            routeWhileDragging: true,
            geocoder: L.Control.Geocoder.nominatim()
        }).addTo(map);
        
       L.control.locate().addTo(map);

        //get coordinat location

        var lokasiInput = document.querySelector("[name= Lokasi]");

         var curLocation = [-7.840243, 110.408333];
  
         map.attributionControl.setPrefix(false);

        var marker = new L.marker(curLocation, {
            draggable : 'true',

        });

        marker.on('dragend',function(event) {
            var position = marker.getLatlng();
            marker.setLatLng(position, {
                draggable : 'true',
            }).bindPopup(position).update();
            
             $("#Lokasi").val(position.lat+","+lng);

        });

        map.addLayer(marker); 
        
        map.on("click",function(e){
          var lat = e.latlng.lat;
          var lng = e.latlng.lng; 
            if (!marker) {

                marker = L.marker(e.latlng).addTo(map); 
            }else{
                marker.setLatLng(e.latlng);
            }
           
            lokasiInput.value = lat+","+lng;

        });