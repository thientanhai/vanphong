
function checkmap(o){
  if ($(o).is(":checked")){
    $("#properties-list").addClass("col-md-7");
    $(".fs-left-map-box1").show();
    $(".cat__map").addClass("cat__map_cl3");
  } else {
    $("#properties-list").removeClass("col-md-7");
    $(".fs-left-map-box1").hide();
    $(".cat__map").removeClass("cat__map_cl3");
  }
}
async function initMap() {
    
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement, PinElement } = await google.maps.importLibrary(
        "marker",
    );

    var datacenter=$('.property-listing:eq(0)');
    $('.property-listing').each(function(i,v){
      if($(this).attr("data-lat")!="")
        {
          datacenter=$(this);return false;
        }
    })
    
    var x = new google.maps.LatLng(parseFloat($(datacenter).attr("data-lat")), parseFloat($(datacenter).attr("data-long")));
    
    var mapProp = {
        center: x,
        zoom: 12,
        mapId: "4504f8b37365c3d0",
    };
    var mapdata=[];
    $('.property-listing').each(function(){
      if($(this).attr('data-lat')!=""){
        var it={
          latitude:$(this).attr('data-lat'),
          longitude:$(this).attr('data-long'),
          images:$(this).find('.listing-img-wrapper img').attr('src'),
          name:$(this).find('.listing-name a').attr('title'),
          location:$(this).find('.locationname').attr('location'),
          number_bedroom:$(this).attr('bedroom'),
          square:$(this).attr('square'),
          price_formatted:$(this).find('.price-for-rent').html(),
        }
        mapdata.push(it);
      }
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
             //content+="<p>";
             //content+="<span><img src='/themes/resido/img/bed.svg' width='13'/></span> "+val.number_bedroom;
             //content+="<span><img src='/themes/resido/img/move.svg' width='13'/></span> "+val.square+"m<sup>2<sup></p>";
             content+="<p class='bolders'>"+val.price_formatted+"</p>";
             content+="</td></tr>";
          })
          content+="</ul>";
       
          infowindow.setContent(content);
          infowindow.open(map, markerViewBackground);
        });
    }
      
    });
    pageinginit();
}
var groupBy = function(xs, key) {
    return xs.reduce(function(rv, x) {
      (rv[x[key]] = rv[x[key]] || []).push(x);
      return rv;
    }, {});
  };
var pageit=15;
var tt=0;
jQuery(document).ready(async function () {
    
    await initMap();
});
function pageinginit(){

  $("#totaldata").html($("figure").length);
  $("#numdpl").html($("figure").length);
  $(".paginationjs-big").hide();
  $('.paginationjs-page').remove();
  if($("figure").length>pageit){
    $(".paginationjs-big").show();
    var lgth=$("figure").length;
      tt=lgth/pageit;
    if(lgth%pageit>0)
      tt++;
    var at="li-active";
    $("#numdpl").html(pageit);
    tt=parseInt(tt);
    for(var i=0;i<tt;i++){
     var li='<li idex="'+i+'" class="paginationjs-page page-'+i+' '+at+'" onclick="pageing(this)" data-from="'+(i*pageit)+'" data-num="'+((i*pageit)+pageit)+'"><a>'+(i+1)+'</a></li>';
     $(li).insertBefore(".J-paginationjs-next");
     at="";
    }
  }
 if(!$("#togglemap").is(':visible')){
  $(window).scroll(function() {
    jQuery(".conten-filter").removeClass("dp_block");
    var scrollTop = $(window).scrollTop();
    if (scrollTop >= $('.cat__map').offset().top + $('.cat__map').outerHeight() - window.innerHeight) {

      loadnextmb();
   }
  });
 }
}
function loadnext(o){
  var active=$(".li-active").attr("idex");

  if(o==1 && (active<(tt-1)))
    pageing($(".page-"+(parseInt(active)+1)))
  else if(o==0 && active>=1)
    pageing($(".page-"+(parseInt(active)-1)))
}
function loadnextmb(){
  var active=$(".li-active").attr("idex");
  var o=$(".page-"+(parseInt(active)+1));
  var f=$(o).attr("data-from");
  var t=$(o).attr("data-num");
  $(".paginationjs-page").removeClass("li-active");
  $(o).addClass("li-active")
  for(var i=f;i<t;i++){
    $("figure:eq("+i+")").fadeIn(2000);
   }
}
function sortprice(){
  var stock=["property-ctm"];
      $.each(stock,function(id,v){
          $("."+v).sort(function(a, b) {
          var A =parseInt($(a).attr("price").toUpperCase());
          var B = parseInt($(b).attr("price").toUpperCase());
          return (A < B) ? -1 : (A > B) ? 1 : 0;
          }).appendTo("."+v);
      })
}
function pageing(o){
  $('body, html, #list-location').scrollTop(0);
  
  var f=$(o).attr("data-from");
  var t=$(o).attr("data-num");
  $(".paginationjs-page").removeClass("li-active");
  $(o).addClass("li-active")
  $("figure").hide();

  for(var i=parseInt(f);i<parseInt(t);i++){

    $("figure:eq("+i+")").show();
   }
}