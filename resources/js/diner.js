$(function() {
    // if (!window.location.pathname.match(/home|articles|prayer-team|womens-ministry|childerns-ministry/)) {
    //     Gmap.populateMap('4650 SW 30th Ave, Fort Lauderdale, FL 33312', 'Community Bible Church');
    // }

    // $('.nav-link').on('click', function() {
    //     $('#navbarSupportedContent').removeClass('show');
    // });


    $('#editor').summernote({
        minHeight: '300px'
        // toolbar: [
        // 	// [groupName, [list of button]]
        // 	['style', ['bold', 'italic', 'underline', 'clear']],
        // 	['font', ['strikethrough', 'superscript', 'subscript']],
        // 	['fontsize', ['fontsize']],
        // 	['color', ['color']],
        // 	['para', ['ul', 'ol', 'paragraph']],
        // 	['height', ['height']],
        // 	['misc', ['codeview'], ['fullscreen']]
        // ]
    });

    $('[id^="goto_"]').on('click', function(e) {
        e.preventDefault();
        console.log('goto_ clicked');
        let slug = this.id.split('_')[1];
        console.log('slug: '+slug);
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#"+slug).offset().top
        }, 1000);
    });

    $('[id^="menu_"]').on('click', function(e) {
        e.preventDefault();
        let slug = this.id.split('_')[1];
        // console.log('slug: '+slug);
        let loc = window.location.pathname;
        // console.log(JSON.stringify('/#'+slug));
        if (loc.length > 1) {
            window.location = '/#'+slug;
        }
        else {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#" + slug).offset().top
            }, 1000);
        }
        $('#navbarNavDropdown').removeClass('show');

    });

    if (window.location.pathname.match(/create|edit/)) {
        $('#tags').selectize({
            delimiter: ',',
            persist: false,
            valueField: 'tag',
            labelField: 'tag',
            searchField: 'tag',
            options: tags,
            create: function(input) {
                return {
                    tag: input
                }
            }
        });
    }
    $('#tagcloud a').tagcloud({
        color: {
            start: '#3498db',
            end: '#46cfb0'
        },
        size: {
            start: 12,
            end: 18,
            unit: 'px'
        }
    });

    $('[id^="btnadmin_"]').on('click', function(e) {
        let sections = [
            'site-configuration',
            'ministry-configuration',
            'blog-configuration'
        ];
        $(sections).each(function(e, section) {
            if ($('#' + section).hasClass('d-none')) {
                $('#' + section).removeClass('d-none');
            }
            $('#' + section).addClass('d-none')
        });

        let slug = this.id.split('_')[1];

        if ($('#' +slug).hasClass('d-none')) {
            $('#' + slug).removeClass('d-none');
        }
    });

    $('#site-config').on('click', function() {
        if (!$('#blog-configuration').hasClass('d-none')) {
            $('#blog-configuration').addClass('d-none');
        }
        if (!$('#ministry-configuration').hasClass('d-none')) {
            $('#ministry-configuration').addClass('d-none');
        }
        if ($('#site-configuration').hasClass('d-none')) {
            $('#site-configuration').removeClass('d-none');
        }
    });

    $('#blog-config').on('click', function() {
        if ($('#blog-configuration').hasClass('d-none')) {
            $('#blog-configuration').removeClass('d-none');
        }
        if (!$('#ministry-configuration').hasClass('d-none')) {
            $('#ministry-configuration').addClass('d-none');
        }
        if (!$('#site-configuration').hasClass('d-none')) {
            $('#site-configuration').addClass('d-none');
        }
    });

    $('#ministry-config').on('click', function() {
        if (!$('#blog-configuration').hasClass('d-none')) {
            $('#blog-configuration').addClass('d-none');
        }
        if ($('#ministry-configuration').hasClass('d-none')) {
            $('#ministry-configuration').removeClass('d-none');
        }
        if (!$('#site-configuration').hasClass('d-none')) {
            $('#site-configuration').addClass('d-none');
        }
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
