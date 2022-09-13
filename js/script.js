const mobileMenu = document.querySelector(".mobile-menu");
const modalMobile = document.querySelector(".modal-mobile");

const Fec = {
    fechar(){
        document.querySelector('.modal-overlay').classList.toggle('active');
        modalMobile.classList.remove('activeMobile');
    }
}

mobileMenu.addEventListener('click', function(){

    modalMobile.classList.toggle('activeMobile');

});

