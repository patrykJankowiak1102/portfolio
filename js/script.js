window.addEventListener('scroll', function () {
    var arrow = document.querySelector('.arrow');
    if (arrow) {
        if (window.scrollY > 80) {
            arrow.style.display = 'none';
        }
        else {
            arrow.style.display = 'block';
        }
    }
});
