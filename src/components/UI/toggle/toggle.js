
export default function toggle (){
    let toggleContainers = document.querySelectorAll('[data-toggle="container"]');

    if (toggleContainers.length) {
        toggleContainers.forEach(toggleContainer =>{
            let toggleButton = toggleContainer.querySelector('[data-toggle="button"]');

            toggleButton.addEventListener('click',() => {
                if(toggleContainer.classList.contains('open')){
                    toggleContainer.classList.remove('open');
                    toggleButton.classList.remove('active');
                }
                else{
                    toggleContainer.classList.add('open');
                    toggleButton.classList.add('active');
                }
            })
        })
    }
}