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