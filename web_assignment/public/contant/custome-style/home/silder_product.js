let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    if (slides.length != 0) {
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
}

var sliders = document.querySelectorAll(".slider-wrapper");
window.addEventListener("resize", () => {
    for (let i = 0; i < sliders.length; i++) {
        setWrapperWidth(sliders[i]);
    }
});

for (let i = 0; i < sliders.length; i++) {
    let slider = sliders[i].querySelector(".slider");
    let wrapper = slider.querySelector(".wrapper");

    let slide = sliders[i].querySelectorAll(".slide");

    setWrapperWidth(sliders[i]);

    // prev/next event listeners
    let navR = sliders[i].querySelector("nav .right");
    let navL = sliders[i].querySelector("nav .left");

    if (slide.length <= 5) {
        navR.classList.add("disabled");
    }

    slider.addEventListener("scroll", () => {
        if (slider.scrollLeft === 0) navL.classList.add("disabled");
        else navL.classList.remove("disabled");

        if (slider.scrollLeft >= wrapper.clientWidth - slider.clientWidth)
            navR.classList.add("disabled");
        else navR.classList.remove("disabled");
    });

    if (navR)
        navR.addEventListener("click", (e) => {
            navL.classList.remove("disabled");
            transition(slider, 28, slider.clientWidth, "right", () => {
                if (
                    slider.scrollLeft >=
                    wrapper.clientWidth - slider.clientWidth
                ) {
                    navR.classList.add("disabled");
                }
            });
        });

    if (navL)
        navL.addEventListener("click", (e) => {
            navR.classList.remove("disabled");
            transition(slider, 28, slider.clientWidth, "left", () => {
                if (slider.scrollLeft === 0) navL.classList.add("disabled");
            });
        });
}

function transition(el, from, to, dir, cb) {
    let inc = from;
    let spd = 10;
    let interval = setInterval(() => {
        if (inc >= to) {
            clearInterval(interval);
            spd = to - inc;
            cb(); // callback
        }
        el.scrollLeft =
            dir === "right" ? el.scrollLeft + spd : el.scrollLeft - spd;
        inc += spd;
    }, 10);
}

function setWrapperWidth(sliderWrapper) {
    let slider = sliderWrapper.querySelector(".slider");
    let wrapper = slider.querySelector(".wrapper");
    let slides = wrapper.querySelectorAll(".slide");
    if (slides.length != 0) {
        wrapper.style.width = slides.length * slides[0].clientWidth + "px";
    }
}
