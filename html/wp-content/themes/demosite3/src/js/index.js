document.addEventListener('DOMContentLoaded', function() {
    const ham = document.querySelector('#js__hamburger');
    const nav = document.querySelector('#js__nav');

    if (ham && nav) {
        ham.addEventListener('click', function () {
            ham.classList.toggle('active');
            nav.classList.toggle('active');
        });
    }
});

import '../scss/style.scss'; // SCSS ファイルへの正しいパス
