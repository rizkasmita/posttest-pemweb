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

// const modal = document.getElementById("modal");

// // Get the button that opens the modal
// const btnDate = document.getElementById("btn-date");

// // Get the <span> element that closes the modal
// const span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btnDate.addEventListener('click', function() {
//     modal.style.display = 'block';
// })

// span.addEventListener('click', function() {
//     modal.style.display = 'none';
// })

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }