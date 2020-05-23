let navMenuIcon = document.querySelector('.header-wrapper .nav-menu-icon');
let leftSidebar = document.querySelector('.main .left-sidebar');

navMenuIcon.addEventListener('click', () => {
    leftSidebar.classList.toggle('active');
});
