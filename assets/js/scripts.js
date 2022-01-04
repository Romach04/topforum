
let slideIndex = 1;

const slides = document.querySelectorAll('.item-slider'),
        prev = document.querySelector('.prev'),
        next = document.querySelector('.next'),
        total = document.querySelector('#total'),
        current = document.querySelector('#current');

showSlides(slideIndex); 



slides.forEach(item => {
    item.classList.add("animated");
});   



    
if (slides.length < 10 ){
    total.textContent = `0${slides.length}`;
} else {
    total.textContent = slides.length;
}

function showSlides(n) {
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1 ){
        slideIndex = slides.length;
    }

    slides.forEach((item) => item.style.display = 'none');

    slides[slideIndex - 1].style.display = 'block';

    if (slides.length < 10) {
        current.textContent = `0${slideIndex}/`;
    } else {
        current.textContent = slideIndex;
    }
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

prev.addEventListener('click', function(){
    plusSlides(-1);
    slides[slideIndex - 1].classList.remove('slideInLeft');
    slides[slideIndex - 1].classList.add('slideInRight');

});

next.addEventListener('click', function () {
    plusSlides(1);
    slides[slideIndex - 1].classList.remove('slideInRight');
    slides[slideIndex - 1].classList.add('slideInLeft');

});



let icon = document.querySelector('.icon1'),
    modalbtn = document.querySelector('.register-btn popup-open');



// slider



jQuery(document).ready(function(){
    jQuery('.slider-place').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
    
  });
});


// modal
jQuery(document).ready(function () {
    jQuery('.popup-open').click(function() {
        icon.style.display = 'none';
		jQuery('.popup-fade').fadeIn();
        document.body.style.overflow = "hidden";
    
		return false;
	});	

    jQuery('.popup-close').click(function() {
		jQuery(this).parents('.popup-fade').fadeOut();
        document.body.style.overflow = "";
        icon.style.display = 'block';
		return false;
	});        
	// Закрытие по клавише Esc.

	jQuery(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			jQuery('.popup-fade').fadeOut();
            document.body.style.overflow = "";
            icon.style.display = 'block';
		}
	});
	// Клик по фону, но не по окну.

	jQuery('.popup-fade').click(function(e) {
		if (jQuery(e.target).closest('.popup').length == 0) {
			jQuery(this).fadeOut();					
		}
        document.body.style.overflow = "";
        icon.style.display = 'block';
	});	


    
});





    


