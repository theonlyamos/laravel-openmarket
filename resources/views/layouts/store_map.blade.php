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
                    var map, infoWindow;

                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -34.397,
                                lng: 150.644
                            },
                            zoom: 6
                        });
                        infoWindow = new google.maps.InfoWindow;

                        // Try HTML5 geolocation.
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(function (position) {
                                var pos = {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude
                                };

                                infoWindow.setPosition(pos);
                                infoWindow.setContent('Location found.');
                                infoWindow.open(map);
                                map.setCenter(pos);
                            }, function () {
                                handleLocationError(true, infoWindow, map.getCenter());
                            });
                        } else {
                            // Browser doesn't support Geolocation
                            handleLocationError(false, infoWindow, map.getCenter());
                        }
                    }

                    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                        infoWindow.setPosition(pos);
                        infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
                        infoWindow.open(map);
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
