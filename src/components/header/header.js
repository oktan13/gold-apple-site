export default function header(){
    let menuContainer = document.querySelector('[data-menu="menu"]');
    if(menuContainer){
        let openButton = document.querySelector('[data-menu="open-button"]');
        let closeButton = document.querySelector('[data-menu="close-button"]');
        document.body.addEventListener('click', function (e){
            if (!e.target.closest('[data-menu="open-button"]') && !e.target.closest('[data-menu="menu"]')) {
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
}
