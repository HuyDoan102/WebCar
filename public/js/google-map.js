var map;

function initMap() {
    var location = {lat: 16.0412644, lng: 108.2094781};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: location
    });
}
