$(function() {
    Gmap.populateMap('4650 SW 30th Ave, Fort Lauderdale, FL 33312', 'Community Bible Church');

    $('.nav-link').on('click', function() {
        $('#navbarSupportedContent').removeClass('show');
    });

    $('[id^="goto_"]').on('click', function(e) {
        e.preventDefault();
        let slug = this.id.split('_')[1];
        console.log('slug: '+slug);
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#"+slug).offset().top
        }, 2000);

    });
});

function checkboxlimit(checkgroup, limit){
    var checkgroup = checkgroup;
    var limit = limit;
    for (var i = 0; i < checkgroup.length; i++){
        checkgroup[i].onclick = function(){
            var checkedcount = 0
            for (var i = 0; i < checkgroup.length; i++)
                checkedcount += (checkgroup[i].checked) ? 1 : 0
            if (checkedcount > limit) {
                alert("You can only select  "+limit+" items")
                this.checked=false
            }
        }
    }
}


/**
 * Gmap application wide namespace
 */
var Gmap = {};

Gmap.populateMap = function(addr, title, canvas) {
    var displayElement;
    if (typeof canvas != 'undefined') {
        displayElement = canvas;
    } else {
        displayElement = 'map_canvas';
    }
    var Geocoder = new google.maps.Geocoder();
    Geocoder.geocode({address: addr}, function(gcresults) {
        var mapProperties = {
            center: gcresults[0].geometry.location,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var contentString = '<div>'+'<p>Community Bible Church<br>'+'4650 SW 30th Ave<br>Fort Lauderdale, FL 33312</p></div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var title = 'Community Bible Church';
        var marker = new google.maps.Marker({
            position: gcresults[0].geometry.location,
            title: title,
            map: map
        });
        marker.addListener('click', function() {
            // console.log('info clicked');
            infowindow.open(map, marker);
        });
        var map = new google.maps.Map(document.getElementById(displayElement), mapProperties);
        marker.setMap(map);
    });
}
Gmap.getLocation = function() {
    if (navigator.geolocation) {
        browserSupportFlag = true;
        navigator.geolocation.getCurrentPosition(function(position, error) {
            initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
            var Geocoder = new google.maps.Geocoder();
            Geocoder.geocode({latLng: initialLocation}, function(gcresults) {
                var city_name = gcresults[0].address_components[2].long_name;
                var state_abbr = gcresults[0].address_components[4].short_name;
                $('#textPosition').html(city_name+', '+state_abbr);
                $('#browserLocation').html(city_name+', '+state_abbr);
                var pdata = {
                    browserLocation: city_name+', '+state_abbr
                };
                var Url = 'sessions/session_handler.php';
                $('#confirmLocation').live('click', function() {
                    $.post(Url, pdata, function(results, data) {
//						console.log(results);
                    })
                });
            });
        });
    } else {
        console.log('need other way to get location');
    }
}
