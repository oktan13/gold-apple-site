import Inputmask from "inputmask/bundle";

export default function form (){
    let politicsCheckboxAll = document.querySelectorAll('[data-politics="checkbox"]');
    if (politicsCheckboxAll.length) {
        politicsCheckboxAll.forEach(politicsCheckbox => {
            let button = politicsCheckbox.closest('[data-politics="container"]').querySelector('[data-politics="button"]');

            // init
            if (!politicsCheckbox.checked) {
                button.setAttribute('disabled', 'true');
                button.classList.add("button--disabled");
            }

            //handler
            politicsCheckbox.addEventListener('change', (e) => {
                if (e.target.checked) {
                    button.removeAttribute('disabled');
                    button.classList.remove("button--disabled");
                } else {
                    button.setAttribute('disabled', 'true');
                    button.classList.add("button--disabled");
                }
            })
        })
    }

    let items = document.querySelectorAll('[data-mask]');
    if (items.length) {
        items.forEach(item => {
            let maskValue = item.dataset.mask;
            let input = item.querySelector('input');

            if (!input.inputmask) {
                new Inputmask(maskValue, {
                    clearIncomplete: true,
                    clearMaskOnLostFocus: true,
                    showMaskOnHover: false
                }).mask(input);
            }
        })
    }
}