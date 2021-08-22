require('./bootstrap');

const swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: true,

    pagination: {
        el: '.swiper-pagination',
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

window.onscroll = function () {
    myFunction();
}

function myFunction() {
    if (document.documentElement.scrollTop > 20) {
        document.getElementById('bg-change').className = "changeBg";
    } else if (document.documentElement.scrollTop < 20) {
        document.getElementById('bg-change').className = "changeBg2";
    }
}
