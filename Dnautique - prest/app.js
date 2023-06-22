const allNavItems = document.querySelectorAll('.nav-item');
const navbar = document.querySelector('.navbar-collapse');


allNavItems.forEach(item => item.addEventListener('click', () => {

    navbar.classList.toggle('show');

}));

window.onscroll = function () {
    let scrollPos = window.scrollY;
    let arrow = document.getElementById("arrow");
    if (scrollPos <= 3) {
        arrow.classList.add("fade-in");
        arrow.classList.remove("fade-out");
    } else {
        let arrow = document.getElementById("arrow");
        arrow.classList.remove("fade-in");
        arrow.classList.add("fade-out");
    }
};