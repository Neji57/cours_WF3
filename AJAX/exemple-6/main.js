function initMap()
{
	var piennes = {lat: 49.3074446, lng: 5.7676179};
	var map = new google.maps.Map($('#map')[0], 
	{
		center : piennes,
		zoom: 8,
	});
	var geocoder = new google.maps.Geocoder;
	var marker = new google.maps.Marker({map: map});
	var style = new google.maps.StyledMapType(
		[{
				"featureType": "all",
				"elementType": "labels.text.fill",
				"stylers": [{
					"color": "#ffffff"
				}]
			},
			{
				"featureType": "all",
				"elementType": "labels.text.stroke",
				"stylers": [{
						"color": "#000000"
					},
					{
						"lightness": 13
					}
				]
			},
			{
				"featureType": "administrative",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#000000"
				}]
			},
			{
				"featureType": "administrative",
				"elementType": "geometry.stroke",
				"stylers": [{
						"color": "#144b53"
					},
					{
						"lightness": 14
					},
					{
						"weight": 1.4
					}
				]
			},
			{
				"featureType": "landscape",
				"elementType": "all",
				"stylers": [{
					"color": "#08304b"
				}]
			},
			{
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [{
						"color": "#0c4152"
					},
					{
						"lightness": 5
					}
				]
			},
			{
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#000000"
				}]
			},
			{
				"featureType": "road.highway",
				"elementType": "geometry.stroke",
				"stylers": [{
						"color": "#0b434f"
					},
					{
						"lightness": 25
					}
				]
			},
			{
				"featureType": "road.arterial",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#000000"
				}]
			},
			{
				"featureType": "road.arterial",
				"elementType": "geometry.stroke",
				"stylers": [{
						"color": "#0b3d51"
					},
					{
						"lightness": 16
					}
				]
			},
			{
				"featureType": "road.local",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}]
			},
			{
				"featureType": "transit",
				"elementType": "all",
				"stylers": [{
					"color": "#146474"
				}]
			},
			{
				"featureType": "water",
				"elementType": "all",
				"stylers": [{
					"color": "#021019"
				}]
			}
		]
	)
	map.mapTypes.set('styled_map', style);
	map.setMapTypeId('styled_map');

	function codeAddress()
	{
		geocoder.geocode({ 'address': $('#address').val()}, function(results, status)
		{
			if (status == 'OK') {
				map.setCenter(results[0].geometry.location);
				marker.setPosition(results[0].geometry.location);
			}
			else
			{
				console.log(status);
			}
			console.log(results);
		});
	}

	$('#address').keyup(_.debounce(codeAddress, 1000));




}