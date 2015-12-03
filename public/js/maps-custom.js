map = new GMaps({
	div: '#map',
	zoom: 14,
	lat: -12.043333,
	lng: -77.028333,
	click: function(e) {}
});

GMaps.on('click', map.map, function(event) {
	map.removeMarkers(map.markers);
	var lat = event.latLng.lat();
	var lng = event.latLng.lng();

	map.addMarker({
		lat: lat,
		lng: lng,
		title: 'Marker #'
	});

	$('#lat').val(lat);
	$('#lon').val(lng);
});

$('#address').on('input', function(e) {

	var self = this;

	//setup before functions
	var typingTimer; //timer identifier
	var doneTypingInterval = 1000; //time in ms, 5 second for example

	clearTimeout(typingTimer);
	typingTimer = setTimeout(doneTyping, doneTypingInterval);

	//user is "finished typing," do something
	function doneTyping() {
		//do something
		GMaps.geocode({
			address: $(self).val().trim(),
			callback: function(results, status) {
				if (status == 'OK') {
					var latlng = results[0].geometry.location;
					map.setCenter(latlng.lat(), latlng.lng());
					map.addMarker({
						lat: latlng.lat(),
						lng: latlng.lng()
					});
					$('#lat').val(latlng.lat());
					$('#lon').val(latlng.lng());
				}
				clearTimeout(typingTimer);
			}
		});
	}
});
