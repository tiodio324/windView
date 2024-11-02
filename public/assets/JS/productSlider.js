const imgSliderArrowPrevProduct1 = document.querySelector('.imgSliderArrowPrevProduct1');
const imgSliderArrowNextProduct1 = document.querySelector('.imgSliderArrowNextProduct1');
const imgProduct1 = document.querySelector('.imgProduct1');
const imgSliderArrowPrevProduct2 = document.querySelector('.imgSliderArrowPrevProduct2');
const imgSliderArrowNextProduct2 = document.querySelector('.imgSliderArrowNextProduct2');
const imgProduct2 = document.querySelector('.imgProduct2');


function sliderProduct1() {
    let currentIndex = 0;
    const totalImages = 4;

    function updateProduct() {
        imgProduct1.setAttribute('src', 'assets/img/products/clipReader_00' + (currentIndex + 1) + '.png');
    }

    imgSliderArrowNextProduct1.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % totalImages;
        updateProduct();
    });
    imgProduct1.addEventListener('click', function() {
        imgProduct1.requestFullscreen();
    });
    imgSliderArrowPrevProduct1.addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateProduct();
    });

    updateProduct();
}

function sliderProduct2() {
    let currentIndex = 0;
    const totalImages = 4;

    function updateProduct() {
        imgProduct2.setAttribute('src', 'assets/img/products/trendHelper_00' + (currentIndex + 1) + '.png');
    }

    imgSliderArrowNextProduct2.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % totalImages;
        updateProduct();
    });
    imgProduct2.addEventListener('click', function() {
        imgProduct2.requestFullscreen();
    });
    imgSliderArrowPrevProduct2.addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateProduct();
    });

    updateProduct();
}


sliderProduct1();
sliderProduct2();