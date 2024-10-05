export default function popup (){
    let popup = document.querySelector('.popup');

    if(popup){
        const body = document.querySelector('body');
        let unlock = true;
        const timeout = 300;

        body.addEventListener('click', function (e) {
            let popupLink = e.target.closest('[data-popup="open-popup"]');
            if (!popupLink) return;
            const popupName = popupLink.getAttribute('href').replace('#', '');
            const curentPopup = document.getElementById(popupName);
            popupOpen(curentPopup);
        });

        body.addEventListener('click', function (e) {
            let popupCloseIcon = e.target.closest('[data-popup="close-popup"]');
            if (!popupCloseIcon) return;
            popupClose(popupCloseIcon.closest('.popup'));
        });

        function popupOpen(curentPopup) {
            if (curentPopup && unlock) {
                const popupActive = document.querySelector('.popup.popup--open');
                if (popupActive) {
                    popupClose(popupActive, false);
                } else {
                    bodyLock();
                }
                curentPopup.classList.add('popup--open');
                curentPopup.addEventListener('mousedown', function (e) {
                    if (!e.target.closest('.popup__content')) {
                        popupClose(e.target.closest('.popup'));
                    }
                });
            }
        }

        function popupClose(popupActive, doUnlock = true) {
            if (unlock) {
                popupActive.classList.remove('popup--open');
                if (doUnlock) {
                    bodyUnlock();
                }
            }
        }

        function bodyLock() {
            body.style.paddingRight = window.innerWidth - document.querySelector('body').offsetWidth + 'px';
            body.classList.add('overflow-hidden');

            unlock = false;
            setTimeout(function () {
                unlock = true;
            }, timeout);
        }

        function bodyUnlock() {
            setTimeout(function () {
                body.style.paddingRight = '0px';
                body.classList.remove('overflow-hidden');
            }, timeout);

            unlock = false;
            setTimeout(function () {
                unlock = true;
            }, timeout);
        }

        document.addEventListener('keydown', function (e) {
            if (e.which === 27) {
                const popupActive = document.querySelector('.popup.popup--open');
                popupClose(popupActive);
            }
        });

        window.popup = {
            open(id) {
                if (!id) return;
                let popup = document.querySelector(id);
                if (!popup) return;

                popupOpen(popup);
            },
            close(id) {
                if (!id) return;
                let popup = document.querySelector(id);
                if (!popup) return;

                popupClose(popup);
            }
        }
    }
}