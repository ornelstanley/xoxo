'use strict';

!function ($) {
	$(document).ready(function () {

		initTabs();
		initAwardsSlider();
		initSpecSlider();
		toggleCollapse();
	});
	var chart;
	function initTabs() {
		$('.instrument-live__tab-btn').click(function (event) {
			if ($(event.target).hasClass('active-tab')) return;

			$('.instrument-live__tab-btn').removeClass('active-tab');
			$(event.target).addClass('active-tab');
		});
	}

	function initAwardsSlider() {
		$('.instrument-awards__slider').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: false,
			infinite: false,
			responsive: [{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					dots: true
				}
			}]
		});
	}


	function initSpecSlider() {
		var specSlider = $('.instrument-live__specifications-slider');
		var mt5orlast= $('.instrument-live__specifications-slider .specification:not(.slick-cloned)').length - 1;

		specSlider.on('init', function () {
			initSliderButton(mt5orlast);
		});
		specSlider.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			centerMode: true,
			infinite: true,
			initialSlide: mt5orlast,
			centerPadding: 'calc(30% - 10px)',
			prevArrow: '<button type="button" class="slick-prev">\n\t\t\t\t\t\t\t\t\t<svg class="arrow-left-icon" width="20px" height="18px" viewBox="0 0 20 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\n\t\t\t\t\t\t\t\t\t\t\t<g id="Instruments" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<g id="AM-5.0-Instruments-page-2.1-Mobile" transform="translate(-38.000000, -2959.000000)" stroke="#2572DE" stroke-width="2">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id="Section" transform="translate(20.000000, 2822.000000)">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id="Conditions-block" transform="translate(0.000000, 59.000000)">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id="Arrow-left" transform="translate(28.000000, 87.000000) rotate(-90.000000) translate(-28.000000, -87.000000) translate(20.000000, 78.000000)">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polyline id="Stroke-3" points="0 8 8 0 16 8"></polyline>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d="M8,0 L8,18" id="Stroke-5"></path>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t\t\t\t</svg>\n\t\t\t\t\t\t\t\t\t<span class="arrow-text">Admiral.Prime</span>\n\t\t\t\t\t\t\t\t</button>',
			nextArrow: '<button type="button" class="slick-next">\n\t\t\t\t\t\t\t\t\t<span class="arrow-text">Admiral.Prime</span>\n\t\t\t\t\t\t\t\t\t<svg class="arrow-right-icon" width="20px" height="18px" viewBox="0 0 20 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\n\t\t\t\t\t\t\t\t\t\t\t<g id="Instruments" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<g id="AM-5.0-Instruments-page-2.1-Mobile" transform="translate(-309.000000, -2959.000000)" stroke="#2572DE" stroke-width="2">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id="Section" transform="translate(20.000000, 2822.000000)">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id="Conditions-block" transform="translate(0.000000, 59.000000)">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id="Arrow-right" transform="translate(299.000000, 87.000000) rotate(90.000000) translate(-299.000000, -87.000000) translate(291.000000, 78.000000)">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polyline id="Stroke-3" points="0 8 8 0 16 8"></polyline>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d="M8,0 L8,18" id="Stroke-5"></path>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t\t\t\t\t\t</g>\n\t\t\t\t\t\t\t\t\t</svg>\n\t\t\t\t\t\t\t\t</button>',
			responsive: [{
				breakpoint: 767,
				settings: {
					centerPadding: '0'
				}
			}]
		});

		specSlider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
			initSliderButton(nextSlide);
		});

		function initSliderButton(slide) {
			var slides = $('.instrument-live__specifications-slider .specification:not(.slick-cloned)');
			var lastSlideIndex = slides.length - 1;
			var nextSlide = slide + 1 > lastSlideIndex ? 0 : slide + 1;
			var prevSlide = slide - 1 < 0 ? lastSlideIndex : slide - 1;

			$('.instrument-live__specifications-slider .slick-prev .arrow-text')[0].innerHTML = $(slides[prevSlide]).attr('name') || '';
			$('.instrument-live__specifications-slider .slick-next .arrow-text')[0].innerHTML = $(slides[nextSlide]).attr('name') || '';
		}
	}

	var monthOptions = {
		maintainAspectRatio: false,
		legend: {
			display: false,
			labels: {
				fontColor: '#000'
			}
		},
		elements: {
			point: { radius: 0 },
			line: {
				tension: 0
			}
		},
		scales: {
			xAxes: [{
				gridLines: {
					color: "#fff"
				},
				type: "time",
				ticks: {
					fontColor: '#babdd6',
					padding: 12
				},
				time: {
					unit: 'day',
					round: 'day',
					displayFormats: {
						day: 'D MMM'
					}
				}
			}],
			yAxes: [{
				ticks: {
					fontColor: '#babdd6',
					padding: 12
				},
				gridLines: {
					drawBorder: false,
					color: "#dee0ec",
					zeroLineColor: "#dee0ec"
				}
			}]
		}
	};


	var dayOptions = {
		maintainAspectRatio: false,
		legend: {
			display: false,
			labels: {
				fontColor: '#000'
			}
		},
		elements: {
			point: { radius: 0 },
			line: {
				tension: 0
			}
		},
		scales: {
			xAxes: [{
				gridLines: {
					color: "#fff"
				},
				ticks: {
					fontColor: '#babdd6'
				},
				type: "time",
				time: {
					round: 'hour',
					unit: 'hour',
					displayFormats: {
						day: 'hA'
					}
				}
			}],
			yAxes: [{
				ticks: {
					fontColor: '#babdd6',
					padding: 12
				},
				gridLines: {
					drawBorder: false,
					color: "#dee0ec",
					zeroLineColor: "#dee0ec"
				}

			}]
		}
	};



	function toggleCollapse() {
		$('.specification__link').click(function (event) {
			$('.specification__link').parent().toggleClass('active');

			var panel = $('.specification__link-expanded');

			panel.each(function(){
				if (this.style.maxHeight) {
					this.style.maxHeight = null;
				} else {
					this.style.maxHeight = this.scrollHeight + "px";
				}
			});

			function visibleContainer() { $('.specification__link').parent().toggleClass('overflow-visible'); }

			setTimeout(visibleContainer, 500);


//                    $('.specification__link').promise().done(function(){
//                        $('.specification__link').parent().toggleClass('overflow-visible');
//                    });
		});
	}
}(jQuery);