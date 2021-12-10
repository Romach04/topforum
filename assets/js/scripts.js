
let slideIndex = 1;

const slides = document.querySelectorAll('.item-slider '),
        prev = document.querySelector('.prev'),
        next = document.querySelector('.next'),
        total = document.querySelector('#total'),
        current = document.querySelector('#current');

showSlides(slideIndex);      
    
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

});

next.addEventListener('click', function () {
    plusSlides(1);
});
$(document).ready(function(){
    $('.slider-place').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
    
  });
});

// modal

$(document).ready(function () {
    $('.popup-open').click(function() {
		$('.popup-fade').fadeIn();
		return false;
	});	

    $('.popup-close').click(function() {
		$(this).parents('.popup-fade').fadeOut();
		return false;
	});        
	// Закрытие по клавише Esc.

	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			$('.popup-fade').fadeOut();
		}
	});
	// Клик по фону, но не по окну.

	$('.popup-fade').click(function(e) {
		if ($(e.target).closest('.popup').length == 0) {
			$(this).fadeOut();					
		}
	});	


    
});





    


