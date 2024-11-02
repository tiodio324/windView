const underDevelopment = document.querySelector(".underDevelopment");
const productDownloadFallback = document.querySelector('.productDownloadFallback');


function underDevelopmentFallback() {
    productDownloadFallback.style.display='block';
}

underDevelopment.addEventListener('click', underDevelopmentFallback);