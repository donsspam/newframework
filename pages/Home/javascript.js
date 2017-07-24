
var the_map = null;
var main_marker = null;

var center_lat =  30.3903;
var center_lng = -97.6956;

function initialize() {
    var TheLoc = new google.maps.LatLng(center_lat, center_lng);
    var myMapOptions = { zoom: 14 ,center: TheLoc ,scaleControl: true ,mapTypeId: google.maps.MapTypeId.ROADMAP  };
    the_map = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);
    the_map.setTilt(0);  // otherwise it is titled 45 degrees
    main_marker = new google.maps.Marker({ title: 'Austin', map: the_map, draggable: true, position: new google.maps.LatLng(center_lat, center_lng), visible: false });
    var marker0 = new google.maps.Marker({ position: new google.maps.LatLng(center_lat, center_lng), title: 'Title', map: the_map, clickable: true, icon: './images/marker-lightblue.png' });
}

