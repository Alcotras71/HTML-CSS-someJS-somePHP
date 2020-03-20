jQuery(function($){

		$(document).ready(function(){
		$('.main-top').slick({
			autoplay: true,
			autoplaySpeed: 2500,
			dots: true,
			arrows: false,
			fade: true
		});
	});

});

let current = $('.select__current').text();
				  $('#current_worker').val(current);

let select = function () {
	let selectHeader = document.querySelectorAll('.select__header');
	let selectItem = document.querySelectorAll('.select__item');

	selectHeader.forEach( item=> {
		item.addEventListener('click', selectToggle)
	});

	selectItem.forEach( item=> {
		item.addEventListener('click', selectChoose)
	});

	function selectToggle() {
		this.parentElement.classList.toggle('is-active');
	}

	$(".select__item").click(function(e) {
		e.preventDefault();
		$(".select__item").removeClass('hidden');
		$(this).addClass('hidden');
})

	function selectChoose() {
		let text = this.innerText,
			 select = this.closest('.select'),
			 currentText = this.closest('.select').querySelector('.select__current');
		currentText.innerText = text;
		$('#current_worker').val(text);
		select.classList.remove('is-active');
	}
};

select();


