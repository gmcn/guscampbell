( function() {

  /* !! SET COORDINATES HERE !! */
  var lat = 54.434319,
      lng = -6.418230,
      myLatLng = {lat: lat, lng: lng};

  var mapStyles = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#a9d5d5"},{"visibility":"on"}]}]

  var map = new google.maps.Map(document.getElementById('contact-map'), {
    zoom: 15,
    center: myLatLng,
    scrollwheel: false,
    styles: mapStyles
  });

  //var image = 'http://seagoe-hotel.dev/wp-content/themes/seagoe-starter/images/map-marker.png';
  var image = 'http://staging.seagoe.cornellstudios.com/wp-content/themes/seagoe-starter/images/map-marker.png';
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    animation: google.maps.Animation.DROP,
    position: myLatLng,
    icon: image,
  });

} )();
