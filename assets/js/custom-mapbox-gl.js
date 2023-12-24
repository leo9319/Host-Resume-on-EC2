mapboxgl.accessToken = 'pk.eyJ1IjoibGVvOTMxOSIsImEiOiJjbHBoZjhycmIwMXJjMndsZGUyZGE2ZHh1In0.f5AdNGxCV75uz7h7D37gnQ';
const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/leo9319/clpihh3q300c101qm1kt917mo', // style URL
    center: [-74.5, 40], // starting position [lng, lat]
    zoom: 1, // starting zoom
});

map.on('load', function () {
    // Use easeTo to smoothly zoom into the specified location
    map.easeTo({
        center: [-79.3832, 43.6532],
        zoom: 10,
        duration: 3000, // Animation duration in milliseconds
    });

    // Add a marker at the specified coordinates (Toronto)
    const torontoMarker = new mapboxgl.Marker({
        element: createCustomMarker(),
    })
        .setLngLat([-79.3832, 43.6532])
        .addTo(map);

    // Add another marker at the specified coordinates (Calgary)
    const calgaryMarker = new mapboxgl.Marker({
        element: createCustomMarker(),
    })
        .setLngLat([-114.0719, 51.0447])
        .addTo(map);

    // Add click event listener for Toronto marker
    torontoMarker.getElement().addEventListener('click', function () {
        showAlert('Toronto Information');
    });

    // Add click event listener for Calgary marker
    calgaryMarker.getElement().addEventListener('click', function () {
        showAlert('Calgary Information');
    });
});

function createCustomMarker() {
    const el = document.createElement('div');
    el.className = 'marker';
    return el;
}

function showAlert(message) {
    alert(message);
}