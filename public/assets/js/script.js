let threeLineMenu = document.getElementById('three-line-menu');
let mobileMenuRight = document.getElementById('mobile-menu-right');
threeLineMenu.addEventListener('click', () => {
    let mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.style.display = 'grid';
    mobileMenu.style.gridAutoColumns = '100px 200px';
    mobileMenu.classList.remove('mobile-menu-hidden');
    mobileMenu.classList.add('mobile-menu-show');
});
mobileMenuRight.addEventListener('click', () => {
    let mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.style.display = 'none';
    mobileMenu.classList.add('mobile-menu-hidden');
    mobileMenu.classList.remove('mobile-menu-show');

});