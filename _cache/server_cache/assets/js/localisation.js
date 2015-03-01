function initialize() {
    console.log( 'init' );
  var myLatlng = new google.maps.LatLng( 50.409270, 3.881085 );
  var mapOptions = {
      zoom: 16,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('localisation'), mapOptions);

  // info box
 var contentString = "<h4> A Louer</h4><p> 196 bt 2 rue de l'industrie <br> 7080 - LaBouverie";

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  // marker
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      animation: google.maps.Animation.DROP,
      title: 'Localisation'
  });

  // event
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
