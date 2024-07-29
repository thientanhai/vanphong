async function initialize()
{
    const { Map } = await google.maps.importLibrary("maps");
    var dtmap=jQuery("#googleMap");
    var myCenter = new google.maps.LatLng(parseFloat(jQuery(dtmap).attr("lat")), parseFloat(jQuery(dtmap).attr("long")));
  
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:"terrain"
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
var infowindow = new google.maps.InfoWindow({
    content: jQuery(dtmap).attr("address")
});
var marker=new google.maps.Marker({
  position:myCenter,
  });
    marker.addListener("click", () => {
        infowindow.open(map, marker);
    });

    marker.setMap(map);
}
jQuery(document).ready(async function () {
   await initialize();
});