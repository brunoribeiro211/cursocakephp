function createGMap(selector, lat, lon, zoom, text, kmlURL, tag) {
    console.log('Creating GMap in pos ' + lat + ',' + lon + ', zoom ' + zoom + ', tag ' + tag + ', kml: ' + kmlURL);
    var GMStartLatLon = new google.maps.LatLng(lat, lon);
    $(selector).gmap({'center': GMStartLatLon, 'zoom': zoom});
    $(selector).gmap('addMarker', {'position': GMStartLatLon, 'bounds': false}).click(function() {
        $(selector).gmap('openInfoWindow', {'content': text}, this);
    });

    $(selector).gmap('loadKML', tag, kmlURL);
}