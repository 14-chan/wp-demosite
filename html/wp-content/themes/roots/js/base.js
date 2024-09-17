document.addEventListener('DOMContentLoaded', function() {
    const ham = document.querySelector('#js_hamburger');
    const nav = document.querySelector('#js_nav');

    if (ham && nav) {
        ham.addEventListener('click', function () {
            ham.classList.toggle('active');
            nav.classList.toggle('active');
        });
    }
});
