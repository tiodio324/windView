const select = document.querySelector(".changeLangContainer");
const allLang = [
    "ru",
    "en"
];
const DEFAULT_LANG = "ru";

select.addEventListener('change', changeLanguage);

function changeLanguage() {
    let lang = select.value;
    
    if (allLang.includes(lang)) {
        localStorage.setItem('userLanguage', lang);
        applyLanguage(lang);
    }
}

function applyLanguage(lang) {
    select.value = lang;

    for (let key in langArr) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            elem.innerHTML = langArr[key][lang];
        } else {
            console.warn(`Element with selector 'lng-${key}' not found.`);
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    let savedLang = localStorage.getItem('userLanguage');

    if (!savedLang || !allLang.includes(savedLang)) {
        savedLang = DEFAULT_LANG;
        localStorage.setItem('userLanguage', savedLang);
    }

    applyLanguage(savedLang);
});