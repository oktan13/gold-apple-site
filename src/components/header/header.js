export default function header(){
    let menuContainer = document.querySelector('[data-menu="menu"]');
    if(menuContainer){
        let openButton = document.querySelector('[data-menu="open-button"]');
        let closeButton = document.querySelector('[data-menu="close-button"]');
        document.body.addEventListener('click', function (e){
            if (!e.target.closest('[data-menu="open-button"]')) {
                if (menuContainer.classList.contains('header__menu-nav--open')){
                    menuContainer.classList.remove('header__menu-nav--open');
                    document.body.classList.remove('overflow-hidden-mobile');
                }
            }
        });
        openButton.addEventListener('click', function (e){
            menuContainer.classList.toggle('header__menu-nav--open');
            document.body.classList.toggle('overflow-hidden-mobile');
        });
        closeButton.addEventListener('click', function (e){
            if (menuContainer.classList.contains('header__menu-nav--open')){
                menuContainer.classList.remove('header__menu-nav--open');
                document.body.classList.remove('overflow-hidden-mobile');
            }
        });
    }

    let fixHeader = document.querySelector('.fix-header');
    if (fixHeader && window.innerWidth >= 992) {
        window.addEventListener('scroll', () => {
            fixHeader.classList.toggle('fix-header--is-scroll', window.pageYOffset > 500);
        });
    }
}
