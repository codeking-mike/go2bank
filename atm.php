<?php
require_once('auth.php');
include_once('header.php');

?>

    <div class="container px-4 py-8 min-h-10 bg-gray-100 flex flex-col">

                <div class="content p-4 flex flex-col mt-10 py-10">
                        <!--Profile -->
                        <div class="flex flex-col">
                                <h2 class="font-sans" style="font-size:1.4em !important">ATM withdrawal & cash deposit locations</h2>
                                
                        </div>
                </div>
                <div class="px-8 py-4 flex flex-col items-center">
                <div id="map-container">
                    <div id="loading">
                        <div class="spinner"></div>
                    </div>
                    <div id="map"></div>
                </div>
                </div>
                <!--info -->
                <div id="info" class="px-4 py-5 flex flex-col">

                

                <div>
                

    </div>
        

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"></script>
    <script>
        let map;
        function initMap() {
            const pasadena = { lat: 34.1478, lng: -118.1445 };
            map = new google.maps.Map(document.getElementById("map"), {
                center: pasadena,
                zoom: 13,
            });

            const request = {
                location: pasadena,
                radius: '5000', // Search within 5km radius
                type: ['shopping_mall']
            };

            const service = new google.maps.places.PlacesService(map);
            service.nearbySearch(request, (results, status) => {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    for (let i = 0; i < results.length; i++) {
                        createMarker(results[i]);
                    }
                }
            });
        }

        function createMarker(place) {
            if (!place.geometry || !place.geometry.location) return;

            const marker = new google.maps.Marker({
                map,
                position: place.geometry.location,
            });

            google.maps.event.addListener(marker, "click", () => {
                const infowindow = new google.maps.InfoWindow({
                    content: place.name,
                });
                infowindow.open(map, marker);
            });
        }
    </script>    





<?php

include_once('footer.php');

?>

