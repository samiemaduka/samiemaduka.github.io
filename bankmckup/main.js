const swiper = new Swiper('.swiper',{
	// Optional parameters
	direction: 'horizontal',
	loop: true,

	autoplay: {
		delay: 2000,
	  },
  
	// Navigation arrows
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev',
	},
  
    breakpoints: {
		// when window width is >= 320px
		320: {
		  slidesPerView: 0,
		//   spaceBetween:10,
		},
		// when window width is >= 480px
		700: {
		  slidesPerView: 2,
		  spaceBetween: 30,
		},
		// when window width is >= 640px
		1000: {
		  slidesPerView: 4,
		  spaceBetween: 40,
		},
		// 1400:{
		// 	slidesPerView:3,
		// }
	  }
  });