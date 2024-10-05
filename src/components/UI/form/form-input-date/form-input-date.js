import Datepicker from "js-datepicker/dist/datepicker.min";

export default function formInputDate (){
    let calendarContainers = document.querySelectorAll('[data-form-input-date="container"]');

    if (calendarContainers.length) {
        let calendarInput,
            calendarButton,
            isHidden;

        calendarContainers.forEach(calendarContainer => {
            calendarInput = calendarContainer.querySelector('[data-form-input-date="input"]');
            calendarButton = calendarContainer.querySelector('[data-form-input-date="button"]');

            let picker = datepicker(calendarInput,{
                position:"br",
                customDays: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
                customMonths: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                overlayButton: "Подтвердить",
                overlayPlaceholder: 'Введите год',

                formatter: (input, date, instance) => {
                    input.value = date.toLocaleDateString();

                    let event = new Event("keyup", {bubbles : true, cancelable : true});
                    input.dispatchEvent(event);
                }
            });

            picker.calendarContainer.style.setProperty('font-family', '"Montserrat", sans-serif');

            calendarButton.addEventListener('click', e => {
                e.stopPropagation();
                picker.disabled = false;
                isHidden = picker.calendarContainer.classList.contains('qs-hidden');
                picker[isHidden ? 'show' : 'hide']()
            });

            calendarInput.addEventListener('focus', e => {
                isHidden = picker.calendarContainer.classList.contains('qs-hidden');
                picker.disabled = isHidden;
            });
        });
    }
}