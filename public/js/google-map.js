
var google;

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    // var myLatlng = new google.maps.LatLng(40.71751, -73.990922);
    var myLatlng = new google.maps.LatLng(5.5502,-0.2174);
    // 39.399872
    // -8.224454

    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 7,

        // The latitude and longitude to center the map (always required)
        center: myLatlng,

        // How you would like to style the map.
        scrollwheel: false,
        styles: [
            {
                "featureType": "administrative.country",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "hue": "#ff0000"
                    }
                ]
            }
        ]
    };



    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);


    navigator.geolocation.getCurrentPosition((position) => {
        var address = `${position.coords.latitude},${position.coords.longitude}`;
        $.getJSON('https://maps.googleapis.com/maps/api/geocode/json?latlng='+address+'&sensor=true&key=AIzaSyBUCHsKcPB42kheop8QdzlUPUSl43LJbVM', null, function (data) {
        alert(data.results[0].formatted_address)
        var p = data.results[0].geometry.location
        var latlng = new google.maps.LatLng(p.lat, p.lng);
        new google.maps.Marker({
            position: latlng,
            map: map
        });

    });
    })

}
google.maps.event.addDomListener(window, 'load', init);
