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
console.log(mylat);
var mylng = document.getElementById("lng").innerHTML;
// document.getElementById("lng").innerHTML = mylng.replace(/<[^>]*>/g, "");
console.log(mylng);

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
var marker = new tt.Marker()
    .setLngLat(point)
    .addTo(map);

// marker da finire
// function createMarker(position, color, popupText)
// {
//     var markerElement = document.createElement('div');
//     markerElement.className = 'marker';

//     var markerContentElement = document.createElement('div');
//     markerContentElement.className = 'marker-content';
//     markerContentElement.style.backgroundColor = color;
//     markerElement.appendChild(markerContentElement);

//     var iconElement = document.createElement('div');
//     iconElement.className = 'marker-icon';
//     iconElement.style.backgroundImage =
//         'url("storage/host/host-2.jpg")';
//     markerContentElement.appendChild(iconElement);

//     var popup = new tt.Popup({ offset: 30 }).setText(popupText);
//     // add marker to map;
//     new tt.Marker({ element: markerElement, anchor: 'bottom' })
//         .setLngLat(position)
//         .setPopup(popup)
//         .addTo(map);
// }

// createMarker(chicago, '#5327c3', 'SVG icon');


// function flyTo->new point
/*
var moveMap = function (lgnlat)
{
    map.flyTo({
        center: lgnlat,
        zoom: 18
    });
};
*/
