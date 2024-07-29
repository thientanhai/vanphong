var $=jQuery;
var prices=["< 10$", "10-20$", "20-30$", "30-40$", "40$ >"];
var pricesvl=["10", "10-20", "20-30", "30-40", "40"];
jQuery(document).ready(function(){

    jQuery(".parentcate").on("click",function(){
        
        var tg=jQuery(this).find("a").attr("aria-controls");
        jQuery(this).parent().find(".panel-collapse2.collapse2").each(function(){
          var subid=jQuery(this).attr("id");
          if(!jQuery(this).hasClass(tg)){
            jQuery(this).find("a").toggleClass("collapsed");
            jQuery(this).slideUp();
          }  
        });
        jQuery(".popular__cate__item .panel-collapse2").each(function(){
            if(!jQuery(this).hasClass(tg)){
                jQuery(this).find("a").toggleClass("collapsed");
                jQuery(this).slideUp();
              }  
        })
        jQuery(this).find("a").toggleClass("collapsed");
        jQuery("."+tg).slideToggle();
      
    })
   
    /*$(".property-ctm").each(function(){
      if($(this).attr("price")!="" && prices.indexOf(parseFloat($(this).attr("price")))==-1)
        prices.push(parseFloat($(this).attr("price")));
    })
    prices.sort((a, b) => a - b);*/
   
    $.each(prices,function(i,v){

      var pp="<p class='p-search-cate' obj="+pricesvl[i]+">"+v+"</p>";
      $(pp).appendTo("#fprice");
    })
    jQuery('.opfilter').on('click',function(){
      $(".conten-filter").removeClass("dp_block");
      $('.p-first').removeClass('p-first');
      var cprice=$("#choseprice").attr("obj");
      $('.price'+cprice).addClass('p-first');
      
      $(this).parent().find(".conten-filter").addClass("dp_block");
      return false;
    })
    
  getcity();
 
})

function choosefilter(){
  jQuery(".txt-location").on('click',function(){
  
      return false;
  })
  jQuery(".conten-filter p").on('click',function(){
    
    var op=$(this).parent().parent();
    var nstr=$(this).html();
    if($(this).hasClass('p-search-cate-lct'))
      nstr=$(this).attr('namesort');
   
      $(op).find('.txt-begin').html(nstr);
    $(op).find('.txt-begin').attr("obj",$(this).attr("obj"));
    $(op).find('.p-txt').show();
    getfillterdata();
})
$('.p-txt').on('click',function(){
  var op=$(this).parent();
  $(op).find('.txt-begin').html("Chọn");
  $(op).find('.txt-begin').attr("obj","");
  $(this).hide();
  getfillterdata();
})
$("body").on('click',function() {
     
  if($(".dp_block").length>0){
   
  jQuery(".conten-filter").removeClass("dp_block");
  }
});
}
function opensearch(){
  jQuery('.search-mobile').toggleClass('togglesearch');
  jQuery('#navigation').toggle();
  jQuery('body').toggleClass('heightbody');
}

document.onreadystatechange = function () {
  if (document.readyState == "complete") {
    jQuery('.nav-toggle').attr('onclick',jQuery('.nav-menu').css('display','block'));
    
  }
}
function getcity(){
  $.get("/ajax/fullcities?_type=query",{async:false}, function(data, status){
    var jdata=data.data;
  
    var lcty=[];
      $.each(jdata,function(i,v){
        var n=v.name.split(',');
        if(lcty.indexOf(n[1].toString())==-1){
          
        var li='<li obj="'+v.id+'" onclick="openward(this)" nameobj="'+removeunicode(n[1].toLowerCase())+'" name="'+n[1]+'">'+n[1]+'<span class="s-right"><svg data-v-2b456faa="" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="inline-block ml-auto" size="16"><path d="M4 11.0001V13.0001H16L10.5 18.5001L11.92 19.9201L19.84 12.0001L11.92 4.08008L10.5 5.50008L16 11.0001H4Z"></path></svg></span></li>';
        $(li).appendTo('.ul_city_id_full');
        lcty.push(n[1].toString());
        
        }
        var liw='<li obj="'+v.id+'" onclick="checklocation(this)" nameobj="'+removeunicode(v.name.toLowerCase())+'">'+v.name+'</li>';
        var linsm='<p class="p-search-cate-lct" obj="'+v.id+'" namesort="'+n[0].toString()+'" nameobj="'+removeunicode(v.name.toLowerCase())+'">'+v.name+'</p>';
        $(liw).appendTo('.ul_ward_id');
        $(linsm).appendTo('.ul_ward_id_cate');
      })
      $('.p-txt-lct').show();
      choosefilter();
  });

}
function getfillterdata(){
  var minprice=$("#choseprice").attr("obj").toString();
 
  if(typeof minprice==undefined)
    minprice="";
  var minmax=minprice.split('-');
  var min="";
  var max="";
  console.log(minmax)
  if(minmax.length>1)
  {
    min=minmax[0];max=minmax[1];
  }
  else{
    if(minprice==pricesvl[0])
      max=minmax[0];
    if(minprice==pricesvl[pricesvl.length-1])
      min=minmax[0];
  }
  var sort=$("#chosesort").attr("obj");
  var city_id=$("#city_id_mb").attr("obj");
  var typed=$("#chosetype").attr("obj");
  
  var strsub="city_id="+city_id+"&min_price="+min+"&max_price="+max+"&sort_by="+sort+"&type="+typed;
 $("#loading").show();
  $.get("/properties?"+strsub+"&is_searching=1", function(data, status){
   $("#list-location").html(data.data);
   pageinginit();
  });
}
function searchwardcate(o){
  var vl=$(o).val().toLowerCase();
    if(vl=="")
    {
      $('.ul_ward_id_cate p').show();
      return;
    }
    $('.ul_ward_id_cate p').hide();
    vl=removeunicode(vl);

    $('.ul_ward_id_cate p').each(function(i,v){
      if ($(this).attr("nameobj").includes(vl))
        $(this).show();
      
    })
}
function searchward(o){
    var vl=$(o).val().toLowerCase();
    if(vl=="")
    {
      $('.ul_ward_id li').show();
      return;
    }
    $('.ul_ward_id li').hide();
    vl=removeunicode(vl);

    $('.ul_ward_id li').each(function(i,v){
      if ($(this).attr("nameobj").includes(vl))
        $(this).show();
      
    })
}

function checklocation(o){
$("#city_id_txt").val($(o).attr('obj'));
document.getElementById("frmhomesearch").submit();
}
function openward(o){
  $('#namectc').html('&#8592;' +$(o).attr("name"))
  $("#chontinhthanh").html($(o).attr("name"))
  $("#chontinhthanh").attr("city",removeunicode($(o).attr("name")))
  $('.ward_id').toggle();
}
function opencity(){

 if($("#chontinhthanh").attr("city")!="")
  $('.ward_id').toggle();
  $('.city_id_full').toggle();
}
function hidecity(){
  $('.city_id_full').toggle();
}
function removeunicode(t) { return (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = (t = t.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a")).replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e")).replace(/ì|í|ị|ỉ|ĩ/g, "i")).replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o")).replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u")).replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y")).replace(/đ/g, "d")).replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A")).replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E")).replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I")).replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O")).replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U")).replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y")).replace(/Đ/g, "D"))}
