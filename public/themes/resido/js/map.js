
async function initMap() {
    
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement, PinElement } = await google.maps.importLibrary(
        "marker",
    );

    var datacenter=$('.property-listing:eq(0)');
    var x = new google.maps.LatLng(parseFloat($(datacenter).attr("data-lat")), parseFloat($(datacenter).attr("data-long")));
    
    var mapProp = {
        center: x,
        zoom: 12,
        mapId: "4504f8b37365c3d0",
    };
    var mapdata=[];
    $('.property-listing').each(function(){
        var it={
          latitude:$(this).attr('data-lat'),
          longitude:$(this).attr('data-long'),
          images:$(this).find('.listing-img-wrapper img').attr('src'),
          name:$(this).find('.listing-name a').attr('title'),
          location:$(this).find('.listing-name').attr('location'),
          number_bedroom:$(this).attr('bedroom'),
          square:$(this).attr('square'),
          price_formatted:$(this).find('.listing-card-info-price').html(),
        }
        mapdata.push(it);
    });
    
    var map = new google.maps.Map(document.getElementById("map-data"), mapProp);
    var groubedByTeam = groupBy(mapdata, 'longitude');
    
    var infowindow = new google.maps.InfoWindow({
      content: ""
  });
    jQuery.each(groubedByTeam, function (index, value) {
        if(index>0){
       
        const myLatLngmk = { lat: parseFloat(value[0].latitude), lng: parseFloat(value[0].longitude) };
        const circel = document.createElement("div");
        circel.className = "circel-tag";
        circel.textContent = (value.length).toString();
        const markerViewBackground = new AdvancedMarkerElement({
          map,
          position: myLatLngmk,
          content: circel,
        });
        
        markerViewBackground.addListener('click', function () {
          var content="<table id='ct-map'>";
          jQuery.each(value, function (i, val) {
             content+="<tr><td><img src='"+val.images+"' class='img-map'/></td>";
             content+="<td style='padding-left:5px'><p class='bolders'>"+val.name+"</p>";
             content+="<p>"+val.location+"</p>";
             content+="<p><span><img src='/themes/resido/img/bed.svg' width='13'/></span> "+val.number_bedroom;
             content+="<span class='mg30'><img src='/themes/resido/img/move.svg' width='13'/></span> "+val.square+"m<sup>2<sup></p>";
             content+="<p class='bolders'>"+val.price_formatted+"</p>";
             content+="</td></tr>";
          })
          content+="</ul>";
       
          infowindow.setContent(content);
          infowindow.open(map, markerViewBackground);
        });
    }
      
    });
   
}
var groupBy = function(xs, key) {
    return xs.reduce(function(rv, x) {
      (rv[x[key]] = rv[x[key]] || []).push(x);
      return rv;
    }, {});
  };

jQuery(document).ready(async function () {

    await initMap();
 
})