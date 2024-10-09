
export default function footer(){
    let toggleButtons = document.querySelectorAll('.footer__toggle');
    toggleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var id = this.getAttribute('data-id');
            toggleDropdown(id);
        });
    });
}

function toggleDropdown(id) {
    var element = document.getElementById(id);
    var button = document.querySelector(`[data-id="${id}"]`);
    var title = button.previousElementSibling;

    var allInfos = document.querySelectorAll('.footer__info');
    var allButtons = document.querySelectorAll('.footer__toggle');
    var allTitles = document.querySelectorAll('.footer__title');

    allInfos.forEach(info => {
        if (info.id !== id) {
            info.classList.remove('active');
        }
    });
    allButtons.forEach(btn => {
        if (btn !== button) {
            btn.classList.remove('active');
        }
    });
    allTitles.forEach(t => {
        if (t !== title) {
            t.classList.remove('active');
        }
    });

    if (element.classList.contains('active')) {
        element.classList.remove('active');
        button.classList.remove('active');
        title.classList.remove('active');
    } else {
        element.classList.add('active');
        button.classList.add('active');
        title.classList.add('active');
    }
}