export default function menu (){
    let menuContainer = document.querySelector('[data-menu="menu"]');

    if(menuContainer){

        let openButton = document.querySelector('[data-menu="open-button"]');
        let openSubButtons = menuContainer.querySelectorAll('[data-menu="item"]');
        let backSubButtons = menuContainer.querySelectorAll('[data-menu="back-button"]');

        document.body.addEventListener('click', function (e){
            if (!e.target.closest('[data-menu="open-button"]') && !e.target.closest('[data-menu="menu"]')) {
                if (menuContainer.classList.contains('menu--open')){
                    menuContainer.classList.remove('menu--open');
                    openButton.classList.remove('header__button-menu--active');
                    document.body.classList.remove('overflow-hidden-mobile');
                    openSubButtons.forEach(button => {
                        button.classList.remove('menu__list-item--open');
                    })
                }
            }
        });
        openButton.addEventListener('click', function (e){
            menuContainer.classList.toggle('menu--open');
            openButton.classList.toggle('header__button-menu--active');
            document.body.classList.toggle('overflow-hidden-mobile');
            openSubButtons.forEach(button => {
                button.classList.remove('menu__list-item--open');
            })
        });
        openSubButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                if(!event.target.closest('[data-menu="sub-list"]')){
                    button.classList.add('menu__list-item--open');
                }
            });
        });
        backSubButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                button.closest('[data-menu="item"]').classList.remove('menu__list-item--open');
            });
        });
    }
}