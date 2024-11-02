const error404Background = document.querySelector(".error404Background");
const error404BtnIori = document.querySelector('.error404BtnIori');


function addFilteringError404BtnIori() {
    error404Background.classList.add('error404Blur');
}

function removeFilteringError404BtnIori() {
    error404Background.classList.remove('error404Blur');
}

error404BtnIori.addEventListener('mouseenter', addFilteringError404BtnIori);
error404BtnIori.addEventListener('mouseleave', removeFilteringError404BtnIori);