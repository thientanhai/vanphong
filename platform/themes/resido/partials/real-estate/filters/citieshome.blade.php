

<div id="lct_search">
<input type="hidden" name="city_id" id="city_id_txt" >

    <div id="conten-city">
<p onclick="opencity()" style="width: 100%;height: 60px;padding: 15px 40px;color:#000">
    <span id="chontinhthanh" city="">Chọn</span>
</p>
<div class="ul_location city_id_full">
<div class="div_search" style="border: none;">
    <div style="padding: 5px;">
        <span>Tỉnh thành</span><span class="s-right" onclick="hidecity()" style="cursor: pointer;"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="inline-block" size="18"><path d="M13.46 12L19 17.54V19H17.54L12 13.46L6.46 19H5V17.54L10.54 12L5 6.46V5H6.46L12 10.54L17.54 5H19V6.46L13.46 12Z"></path></svg><span></span></span>
    </div>
    <p style="text-align:center;position: relative;"><span class="icsearch"><i class="fa fa-search" aria-hidden="true"></i></span><input type="text" class="txt-location"/></p>
</div>
<ul class="ul_location_ ul_city_id_full" >
  </ul>
</div>
<div class="ul_location ward_id">
<div style="border:none" class="div_search">
<div style="padding: 15px 5px;"><span id="namectc" onclick="$('.ward_id').toggle();"></span>
<span class="s-right" style="cursor: pointer;" onclick="$('.ward_id').toggle();hidecity()"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="inline-block" size="18"><path d="M13.46 12L19 17.54V19H17.54L12 13.46L6.46 19H5V17.54L10.54 12L5 6.46V5H6.46L12 10.54L17.54 5H19V6.46L13.46 12Z"></path></svg><span>
</div>
<p style="text-align:center;position: relative;">
<span class="icsearch"><i class="fa fa-search" aria-hidden="true"></i></span><input type="text" onkeyup="searchward(this)" class="txt-location"/>
</p>
</div>
    <ul class="ul_ward_id ul_location_">
    </ul>
</div>
</div>
</div>