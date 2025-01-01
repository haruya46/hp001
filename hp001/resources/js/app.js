import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function () {
    $(window).on("scroll", function () {
        const scrollTop = $(this).scrollTop();
        const windowHeight = $(window).height();
        const windowWidth = $(window).width();
        
        // 現在のセクションインデックスを計算
        const slideIndex = Math.floor(scrollTop / windowHeight);

        // 背景をスライド
        $(".scroll-container").css("transform", `translateX(-${slideIndex * windowWidth}px)`);
    });
});
