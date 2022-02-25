// SDK
import tt from '@tomtom-international/web-sdk-maps';
// import tt from '@tomtom-international/web-sdk-services';
// PanControl
import PanControls from '@tomtom-international/web-sdk-plugin-pancontrols';
// ZoomControl
// import ZoomControls from '@tomtom-international/web-sdk-plugin-zoomcontrols';

// prendo lat e lng da hidden p in show
var mylat = document.getElementById("lat").innerHTML;
// document.getElementById("lat").innerHTML = mylat.replace(/<[^>]*>/g, "");
// console.log(mylat);
var mylng = document.getElementById("lng").innerHTML;
// document.getElementById("lng").innerHTML = mylng.replace(/<[^>]*>/g, "");
// console.log(mylng);

var APIKEY = 'cYIXTXUp7yVKyDMAcyRlG3xxdxXtmotj';
var point = {
    lat: mylat,
    lng: mylng
};

// mappa
var map = tt.map({
    key: APIKEY,
    container: 'mymap',
    center: point,
    zoom: 14,
});

// panControl
const ttPanControls = new PanControls({
    className: 'my-class-name', // default = ''
    panOffset: 100 // default = 100
});

// navigation controller
var nav = new tt.NavigationControl({
    showCompass: true,
});

map.addControl(new tt.FullscreenControl());
map.addControl(nav);
map.addControl(ttPanControls, 'top-left');
// -------------

// marker ---- basta addTo() per aggiungerlo a alla mappa
var customMarker = document.createElement('div');
customMarker.className = 'marker';
var marker = new tt.Marker({ element: customMarker })
    .setLngLat(point)
    .addTo(map);

// popup offset
var popupOffsets = {
    top: [0, 0],
    bottom: [0, -70],
    'bottom-right': [0, -70],
    'bottom-left': [0, -70],
    left: [25, -35],
    right: [-25, -35]
};

// popup ---- basta marker.setPopup(popup)
var popup = new tt.Popup({ offset: popupOffsets })
    .setHTML(`<strong>${mylat}</strong> <br> <strong>${mylng}</strong> `);
marker.setPopup(popup);

// setDomContent
