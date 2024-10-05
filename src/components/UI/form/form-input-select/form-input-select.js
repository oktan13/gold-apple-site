import Utils from "../../../../js/utils.js";

export default function formInputSelect (){
    let formInputSelectContainer = document.querySelector('[data-form-input-select="container"]');

    if (formInputSelectContainer) {
        const body = document.querySelector('body');
        const utils = new Utils();

        body.addEventListener('click', function (e) {

            let formInputSelectContainer = e.target.closest('[data-form-input-select="container"]');
            let items = document.querySelectorAll('[data-form-input-select="container"]');

            if (formInputSelectContainer) {
                let formInputSelectBody = formInputSelectContainer.querySelector('[data-form-input-select="body"]');
                let formInputSelectItem = e.target.closest('[data-form-input-select-item]');

                if(formInputSelectItem){
                    let formInputSelectValue = formInputSelectContainer.querySelector('[data-form-input-select="value"]');
                    let formInputSelectText = formInputSelectContainer.querySelector('[data-form-input-select="text"]');
                    formInputSelectValue.value = formInputSelectItem.dataset.formInputSelectItem;
                    formInputSelectText.value = formInputSelectItem.innerHTML;
                }

                if(!formInputSelectBody.classList.contains('_slide')){
                    if(formInputSelectContainer.classList.contains('form-input-select--open')){
                        setTimeout(function() {
                            formInputSelectContainer.classList.remove('form-input-select--open');
                        }, 300);
                        utils.slideUp(formInputSelectBody, 300);
                    }
                    else{
                        formInputSelectContainer.classList.add('form-input-select--open');
                        utils.slideDown(formInputSelectBody, 300);
                    }
                }
            }

            items.forEach(item => {
                if(item !== formInputSelectContainer){
                    let formInputSelectBody = item.querySelector('[data-form-input-select="body"]');

                    if(!formInputSelectBody.classList.contains('_slide') && item.classList.contains('form-input-select--open')){
                        setTimeout(function() {
                            item.classList.remove('form-input-select--open');
                        }, 300);
                        utils.slideUp(formInputSelectBody, 300);
                    }
                }
            });
        });
    }
}