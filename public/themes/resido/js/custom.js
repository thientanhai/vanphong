window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar").classList.add("scrolled");
    } else {
        document.getElementById("navbar").classList.remove("scrolled");
    }
}

jQuery(document).ready(function(){
        // Check if the body has the class "old-body-class"
    if ($("body").hasClass("home__page")) {
        $("#navbar").addClass("header-light");

    } else if($("body").hasClass("default_class")) {
        $("#navbar").addClass("header-dark").removeClass('header-light');
    }
})
jQuery(document).ready(function() {

  $('a[data-bs-toggle="collapse"]').on('click', function() {
      var target = $(this).data('bs-target');
      if (target === '#clOne') {
          $('#clOne').addClass('show').removeClass('collapse');
          $('#clOne3').removeClass('show').addClass('collapse');
      } else if (target === '#clOne3') {
          $('#clOne3').addClass('show').removeClass('collapse');
          $('#clOne').removeClass('show').addClass('collapse');
      }

      if (target === '#clOne2') {
        $('#clOne2').addClass('show').removeClass('collapse');
          $('#clOne4').removeClass('show').addClass('collapse');
      } else if (target === '#clOne4') {
        $('#clOne4').addClass('show').removeClass('collapse');
        $('#clOne2').removeClass('show').addClass('collapse');
      }
  });

  
});

document.addEventListener('DOMContentLoaded', function() {
  const lightbox = GLightbox({
      touchNavigation: true,
      loop: true,
      width: "100vw",
      height: "100vh"
  });
});


// jQuery(document).ready(function(){
//     // Get the value of data-src attribute
//     var dataSrc = $('.property-ctm .listing-img-wrapper img').attr('data-src');
    
//     // Set the value of src attribute to data-src
//     $this.attr('src', dataSrc);
// });

jQuery(function ($) {
    var mySwiper = new Swiper(".swiper-mobile-app", {
      roundLengths: false,
      loop: false,
	  spaceBetween: 30,
	  pagination: false,

      breakpoints: {
          // when window width is >= 320px
          320: {
              slidesPerView: 1.25,
          },
          // when window width is >= 480px
          480: {
              slidesPerView: 1.25,
          },
          // when window width is >= 640px
          640: {
              slidesPerView: 3,
          }
      },
	  navigation: {
        nextEl: '.swiper-mobile-app .swiper-button-next',
        prevEl: '.swiper-mobile-app .swiper-button-prev',
    },
      pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
          clickable: true,
      },
	  onPaginationRendered: function(swiper, paginationContainer) {
		var numberOfBullets = swiper.params.loop
		  ? Math.ceil(
			  (swiper.slides.length - swiper.loopedSlides * 2) /
				swiper.params.slidesPerGroup
			)
		  : swiper.snapGrid.length;
		//console.log('numberOfBullets: '+numberOfBullets);
		if (numberOfBullets < 2) {
		  swiper.paginationContainer.css({
			display: "none"
		  });
		} else {
		  swiper.paginationContainer.css({
			display: "block"
		  });
		}
	  }
      // autoplay: {
      //     delay: 3000,
      // },
    });
  });

// jQuery(document).on("click","#cust_btn",function(){
//     $("#myModal").modal("toggle");
// })

 
// var swiper = new Swiper(".slide-content", {
//     slidesPerView: 3,
//     spaceBetween: 25,
//     loop: true,
//     centerSlide: 'true',
//     fade: 'true',
//     grabCursor: 'true',
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//       dynamicBullets: true,
//     },
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },

//     breakpoints:{
//         0: {
//             slidesPerView: 1,
//         },
//         520: {
//             slidesPerView: 2,
//         },
//         950: {
//             slidesPerView: 3,
//         },
//     },
//   });


const largeSlider = ()=>{
	let largeSliders = document.querySelectorAll('.large-swiper')
	let prevArrow = document.querySelectorAll('.prev')
	let nextArrow = document.querySelectorAll('.next')
	largeSliders.forEach((slider, index)=>{
    // this bit checks if there's more than 1 slide, if there's only 1 it won't loop
		let sliderLength = slider.children[0].children.length
		let result = (sliderLength > 1) ? true : false
		const swiper = new Swiper(slider, {
			direction: 'horizontal',
			loop: result,
			navigation: {
        // the 'index' bit below is just the order of the class in the queryselectorAll array, so the first one would be NextArrow[0] etc
				nextEl: nextArrow[index],
				prevEl: prevArrow[index],
			},
			speed: 1000,
		});	
	})
}
window.addEventListener('load', largeSlider)

jQuery(document).ready(function() {
  jQuery('.property-listing .listing-img-wrapper img').each(function() {
      var dataSrc = $(this).attr('data-src');
      if (dataSrc) {
          $(this).attr('src', dataSrc);
      }
  });


  //sticky sidebar
  
});

document.addEventListener("DOMContentLoaded", function() {
  const images = document.querySelectorAll('img[data-src]');
  images.forEach(img => {
      img.src = img.getAttribute('data-src');
  });
});



jQuery(document).ready(function(){
	var textLength = jQuery('.product__description').length;
	if(textLength > 0){
            var wrap = jQuery('.product__description');
            var current_height = wrap.height();
            var your_height = 400;
            if(current_height > your_height){
                wrap.addClass('height__text');
                wrap.append(function(){
                    return '<div class="devwebvn_readmore_flatsome devwebvn_readmore_flatsome_more"><a title="Xem thêm" href="javascript:void(0);">Xem thêm</a></div>';
                });
                wrap.append(function(){
                    return '<div class="devwebvn_readmore_flatsome devwebvn_readmore_flatsome_less" style="display: none;"><a title="Xem thêm" href="javascript:void(0);">Thu gọn</a></div>';
                });
                jQuery('body').on('click','.devwebvn_readmore_flatsome_more', function(){
					wrap.removeClass('height__text');
                    jQuery('body .devwebvn_readmore_flatsome_more').hide();
                    jQuery('body .devwebvn_readmore_flatsome_less').show();
                });
                jQuery('body').on('click','.devwebvn_readmore_flatsome_less', function(){
					wrap.addClass('height__text');
                    jQuery('body .devwebvn_readmore_flatsome_less').hide();
                    jQuery('body .devwebvn_readmore_flatsome_more').show();
                });
            }
        }
});


// // Link to the library 
// // https://github.com/kovart/sticksy

// var stickyEl = new Sticksy('.js-sticky-widget', {
// 	topSpacing: 60
// })

// stickyEl.onStateChanged = function (state) {
// 	if (state === 'fixed') stickyEl.nodeRef.classList.add('widget--sticky')
// 	else stickyEl.nodeRef.classList.remove('widget--sticky')
// }