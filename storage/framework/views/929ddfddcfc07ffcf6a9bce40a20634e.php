<div class=" p-4">
    <div class="paraBanner__slide">
    
 
        <div>
            <div class="paraBanner__slide__image" style="width: 100%; display: inline-block;">
            <img src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="banner" loading="lazy">
            <div class="paraBanner__title" data-animation="typewriter">
                <span>BDS QUẬN 1</span>
                <span>QUẬN 1</span>
                <span>42tr / m2</span>
            </div>
                
            </div>
        </div>
        <div>
            <div class="paraBanner__slide__image" style="width: 100%; display: inline-block;">
                <img src="https://offices.topdealhot.com/storage/banners/nastuh-abootalebi-ehd8y1znfpk-unsplash.jpg"
                alt="banner" loading="lazy">
                    <div class="paraBanner__title" data-animation="typewriter">
                        <span>BDS QUẬN 2</span>
                        <span>QUẬN 2</span>
                        <span>42tr / m2</span>
                    </div>
         
            </div>
            </div>

        <div>
            <div class="paraBanner__slide__image" style="width: 100%; display: inline-block;">
                <img src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="banner" loading="lazy" style="min-height:au">
                <div class="paraBanner__title" data-animation="typewriter"><span>BDS QUẬN 3</span></div>
           
            </div>
            </div>
             
    </div>
    

 </div>

 
  
 <script type="text/javascript">
     jQuery(document).ready(function($){
         $(".paraBanner__slide").slick({
             infinite: true,
             arrows: true,
             dots: true,
             autoplay: false,
             slidesToShow: 1,
             slidesToScroll: 1,
             fade: true,
             pauseOnFocus: false,
             pauseOnHover: false,
             autoplaySpeed: 5000,
             draggable: false,
             speed: 1000,
             cssEase: "ease",
             touchThreshold: 100,
             touchMove: false
         });
          $(".paraBanner__slide__index span.total").text($(".paraBanner__slide").find(".paraBanner__slide__image").length);
         $(".paraBanner__slide").on("afterChange", function(event, slick, currentSlide, nextSlide) {
             $(".paraBanner__slide__index span.current").text(currentSlide + 1)
         });
        
     
 });
 </script>
 
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/sliderhomes.blade.php ENDPATH**/ ?>