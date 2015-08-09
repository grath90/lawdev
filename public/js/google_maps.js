
// Map setup
var latlng = new google.maps.LatLng(34.747064, -92.27981);
var mapOptions = {
    zoom: 15, // set the map zoom level
    center: latlng, // set the center region
    disableDefaultUI: true,
    zoomControl: true, // whether to show the zoom control beside
    mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById('map'), mapOptions);

var marker = new google.maps.Marker({
    map: map, // refer to the map you've just initialise
    position: latlng, // set the marker position (is based on latitude & longitude)
    draggable: true, // allow user to drag the marker
    icon: 'https://maps.google.com/mapfiles/kml/shapes/schools_maps.png'
});

// add an event handler
document.getElementById('address').onkeyup = function(e) {
    if(e.keyCode == 13) { // keyCode 13 represent <ENTER> key
        geocoding(this.value); // get the value from address text box and pass to the search function
        return false;
    }
}

var geocoder = new google.maps.Geocoder();
function geocoding(keyword) {
    geocoder.geocode({address: keyword}, function(results, status) {
        if(status == google.maps.GeocoderStatus.OK) { // if got results
            // always take the first result only
            map.setCenter(results[0].geometry.location); // set the map region to center
            marker.setPosition(results[0].geometry.location); // change the marker position

            document.getElementById('lat').value = results[0].geometry.location.lat();
            document.getElementById('lng').value = results[0].geometry.location.lng();
        } else {
            // if no result, just alert user
            alert('Location not found.');
        }
    });
}

/* Set lat & long when:
 - user drag the marker
 - user search by address
 */
// Add an event handler to the marker
google.maps.event.addListener(marker, 'dragend', function() {
    // it will run this only if user DROP the marker down (drag end)
    var position = marker.getPosition();
    // set the position value to text boxes
    document.getElementById('lat').value = position.lat();
    document.getElementById('lng').value = position.lng();
});
