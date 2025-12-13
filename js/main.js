// header sticky on scroll


let lastScroll = 0;
const header = document.querySelector(".sticky-header");

window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        // Scroll ke baad background + shadow
        header.classList.add("header-scrolled");
    } else {
        // Top par aate hi transparent
        header.classList.remove("header-scrolled");
    }
});

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll <= 0) {
        header.classList.remove("header-hidden");
        header.classList.add("header-visible");
        return;
    }

    if (currentScroll > lastScroll) {
        // scrolling down
        header.classList.add("header-hidden");
        header.classList.remove("header-visible");
    } else {
        // scrolling up
        header.classList.remove("header-hidden");
        header.classList.add("header-visible");
    }

    lastScroll = currentScroll;
});


// Hamburger Menu Toggle
document.querySelector('.hamburger').onclick = function () {
    this.classList.toggle('active');
};

// Objects Of Desire Slider Initialization
// $(document).ready(function () {
//     $('.desire_slider').slick({
//         dots: true,
//         arrows: false,
//         infinite: true,
//         speed: 400,
//         slidesToShow: 3,
//         centerMode: true,             
//         centerPadding: "25%",        
//         autoplay: false,
//         responsive: [
//             {
//                 breakpoint: 1200,
//                 settings: {
//                     slidesToShow: 3,
//                     centerPadding: "60px"
//                 }
//             },
//             {
//                 breakpoint: 992,
//                 settings: {
//                     slidesToShow: 2,
//                     centerPadding: "40px"
//                 }
//             },
//             {
//                 breakpoint: 768,
//                 settings: {
//                     slidesToShow: 1,
//                     centerPadding: "60px"
//                 }
//             },
//             {
//                 breakpoint: 576,
//                 settings: {
//                     slidesToShow: 1,
//                     centerPadding: "30px"
//                 }
//             }
//         ]
//     });
// });


$('.desire_slider').slick({
    dots: true,
    arrows: false,
    centerMode: true,
    centerPadding: '10%',
    slidesToShow: 3,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});


$('.corporate_slider').slick({
    slidesToShow: 3,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2500
});


$('.cor_kits_slider').slick({
    slidesToShow: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2500
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


// ----------------------------------------------
document.querySelectorAll(".zoom-container").forEach(function (zoomBox) {

    const img = zoomBox.querySelector(".zoom-image");
    const lens = zoomBox.querySelector(".zoom-lens");

    zoomBox.addEventListener("mousemove", function (e) {
        lens.style.display = "block";

        let rect = zoomBox.getBoundingClientRect();
        let x = e.pageX - rect.left - window.pageXOffset;
        let y = e.pageY - rect.top - window.pageYOffset;

        let lensX = x - lens.offsetWidth / 2;
        let lensY = y - lens.offsetHeight / 2;

        // lens boundaries
        if (lensX < 0) lensX = 0;
        if (lensY < 0) lensY = 0;
        if (lensX > zoomBox.clientWidth - lens.offsetWidth)
            lensX = zoomBox.clientWidth - lens.offsetWidth;
        if (lensY > zoomBox.clientHeight - lens.offsetHeight)
            lensY = zoomBox.clientHeight - lens.offsetHeight;

        lens.style.left = lensX + "px";
        lens.style.top = lensY + "px";

        // background zoom logic
        let bgX = (lensX / zoomBox.clientWidth) * 100;
        let bgY = (lensY / zoomBox.clientHeight) * 100;

        lens.style.backgroundImage = `url(${img.src})`;
        lens.style.backgroundPosition = `${bgX}% ${bgY}%`;
    });

    zoomBox.addEventListener("mouseleave", function () {
        lens.style.display = "none";
    });

});



























