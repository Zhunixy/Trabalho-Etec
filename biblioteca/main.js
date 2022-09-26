const bntMobile = document.getElementById('bnt-mobile');

function toggleMenu() {
    const nav = document.getElementById('nav-menu');
    nav.classList.toggle('active');
}

bntMobile.addEventListener('click', toggleMenu);