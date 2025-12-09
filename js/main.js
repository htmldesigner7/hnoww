// Hamburger Menu Toggle
document.querySelector('.hamburger').onclick = function () {
    this.classList.toggle('active');
};

// Objects Of Desire Slider Initialization

$(document).ready(function () {
    $('.desire_slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 400,
        slidesToShow: 3.5,           // Yeh important hai
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        variableWidth: false,        // Yeh false rakhna zaroori hai
        centerMode: false,

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3.3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2.1     // tablet pe bhi thoda sa next card dikhega
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1.1     // mobile pe bhi thoda next card dikhe
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToShow: 1
                }
            }
        ]
    });
});

// increment Decrement Functionality

    const decBtn = document.querySelector(".dec_btn");
    const incBtn = document.querySelector(".inc_btn");
    const valueSpan = document.querySelector(".span_value");

    let value = 1;

    incBtn.addEventListener("click", () => {
        value++;
    valueSpan.textContent = value;
    });

    decBtn.addEventListener("click", () => {
        if (value > 1) {
        value--;
    valueSpan.textContent = value;
        }
    });
























