let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat:4.613752, lng: -74.129623 },
    zoom: 20,
  });
}

window.initMap = initMap;