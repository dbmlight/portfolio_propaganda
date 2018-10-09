$(function() {
	$('#mn_btn').on('click focus', function(e) {
		e.preventDefault();
		$('.gnb').toggleClass('responsive');
		$('#mn_btn').toggleClass('responsive');
	});
}); //.gnb & #mn_btn

function popupHide(x, y) {
	$box.animate({
		height: 0,
		width: 0,
		left: x,
		top: y
	}, 200);
}
$('.btn_popup_close').on('click', function() {
	$box = $('.popup');
	popupHide()
}) //popup

$(document).ready(function() {
	$('.info').css('height', $(window).height() - 0);
	$(window).resize(function() {
		$('.info').css('height', $(window).height() - 0);
	});
}); //비주얼 영역 브라우저에 따른 리사이징

function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 17,
		center: {
			lat: 37.52183,
			lng: 127.02163
		}
	});
	var marker = new google.maps.Marker({
		map: map,
		// Define the place with a location, and a query string.
		place: {
			location: {
				lat: 37.52183,
				lng: 127.02163
			},
			query: 'PROPAGANDA, Seoul, Korea'
		},
		// Attributions help users find your site again.
		attribution: {
			source: 'Google Maps JavaScript API',
			webUrl: 'https://developers.google.com/maps/'
		}
	});
	// Opens the InfoWindow when marker is clicked.
	marker.addListener('click', function() {
		infoWindow.open(map, marker);
	});
} //google map API

(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s);
	js.id = id;
	js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.6";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk')); //facebook API

$('.pro_btn_top').on('click', function(e) {
	e.preventDefault()
	$('html, body').stop().animate({
		scrollTop: 0
	}, 1000)
}) //.pro_btn_top