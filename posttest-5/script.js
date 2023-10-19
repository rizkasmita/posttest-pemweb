const btn = document.getElementById('btnIcon');
btn.addEventListener('click', function() {
    document.body.classList.toggle("dark-mode");
    if (document.body.classList.contains("dark-mode")) {
        btn.src = "img/moon.svg";
    } else {
        btn.src = "img/sun.svg";
    }
})

const socmed = document.querySelectorAll('#socmed');
for (let i = 0; i < 4; i++) {
    socmed[i].addEventListener('mouseenter', function() {
        socmed[i].style.width = '25px';
        socmed[i].style.transition = '.5s';
    })
    
    socmed[i].addEventListener('mouseleave', function() {
        socmed[i].style.width = '15px';
        socmed[i].style.transition = '.5s';
    })
}

