
export default function popupVideo (){
    let modal = document.getElementById("modal");

    if(modal){
        let closeButton = document.querySelector('[data-modal="close"]');
        let openModalBtn = document.getElementById("openVideoBtn");
        let video = document.querySelector('[data-modal="video"]');

        openModalBtn.onclick = function() {
            modal.style.display = "block";
        }

        modal.onclick = function(event) {
            if (event.target == modal || event.target == closeButton) {
                modal.style.display = "none";
                video.pause();
            }
        }
    }
}