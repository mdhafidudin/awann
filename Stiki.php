<html>
    <head>
        <title>Google Maps API - harviacode.com</title>
        <!--1. Memanggil google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdEqu7Fworb5KwmQtReKeghN-NO1SJgbs&libraries=places&callback=initMap" async defer></script>
        <script>
            // 2. menambahkan properti peta
            function initialize() {
                var properti_peta = {
                    center: new google.maps.LatLng(-7.9639785,112.5989729),
                    zoom: 8,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                // 4. membuat object peta
                var peta = new google.maps.Map(document.getElementById("tempat_peta"), properti_peta);
                
                // 6. menambahkan marker
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-7.9639785,112.5989729),
                });
                marker.setMap(peta);
				var informasi = new google.maps.InfoWindow({
                    content: "Stiki Malang"
                });
 
                informasi.open(peta, marker);
            }
            // 5. menampilkan peta
            google.maps.event.addDomListener(window, 'load', initialize);
 
        </script>
    </head>
    <body>
        <!--3. membuat div untuk menampilkan peta-->
        <div id="tempat_peta" style="width:900px;height:800px;"></div>
    </body>
</html>