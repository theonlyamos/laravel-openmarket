<div class="modal fade" id="storeMapModal" tabindex="-1" role="dialog" aria-labelledby="storeMapModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="storeMapModalTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <style>
                    /* Always set the map height explicitly to define the size of the div
                 * element that contains the map. */
                    #map {
                        height: 100%;
                    }

                    /* Optional: Makes the sample page fill the window. */
                    html,
                    body {
                        height: 100%;
                        margin: 0;
                        padding: 0;
                    }

                    #floating-panel {
                        position: absolute;
                        top: 10px;
                        left: 25%;
                        z-index: 5;
                        background-color: #fff;
                        padding: 5px;
                        border: 1px solid #999;
                        text-align: center;
                        font-family: 'Roboto', 'sans-serif';
                        line-height: 30px;
                        padding-left: 10px;
                    }

                </style>
                <div id="map"></div>
                <script>
                    function initMap() {
                        let longitude;
                        let latitude;
                        let location = new google.maps.LatLng(41.85, -87.65)

                        getLocation();

                        var directionsService = new google.maps.DirectionsService();
                        var directionsRenderer = new google.maps.DirectionsRenderer();
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 7,
                            center: location
                        });
                        directionsRenderer.setMap(map);

                        var onChangeHandler = function () {
                            calculateAndDisplayRoute(directionsService, directionsRenderer);
                        };
                    }

                    function getLocation() {
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(function (position) {
                                var pos = {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude
                                };
                                location = new google.maps.LatLng(pos.lat, pos.lng);
                                latitude = pos.lat
                                longitude = pos.lon

                                let dlatitude = {{$latitude}}
                                let dlongitude = {{$longitude}}

                                calculateAndDisplayRoute()

                            }, function () {
                                console.log("Your device does not support geolocation")
                            });
                        } else {
                            // Browser doesn't support Geolocation
                            console.log("Your device does not support geoloaction")
                        }
                    }

                    function calculateAndDisplayRoute(directionsService, directionsRenderer) {
                        directionsService.route({
                                origin: {lat: latidue, lng: longitude},
                                destination: {lat: dlatidue, lng: dlongitude},
                                travelMode: 'DRIVING'
                            },
                            function (response, status) {
                                if (status === 'OK') {
                                    directionsRenderer.setDirections(response);
                                } else {
                                    window.alert('Directions request failed due to ' + status);
                                }
                            });
                    }

                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
