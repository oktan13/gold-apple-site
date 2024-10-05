export default function formInputFile (){
    let items = document.querySelectorAll('[data-form-input-file="body"]');
    if (items.length) {
        items.forEach(item => {

            let inputFileText = item.querySelector('[data-form-input-file="text"]');
            let inputFileInput = item.querySelector('[data-form-input-file="input"]');

            const changeInputText = (files) => {
                if (!files.length) {
                    return
                }

                let filesName = Array.from(files);

                let result = filesName.map(item => item.name);
                inputFileText.innerText = 'Загружен файл ' + result.join(', ');
            };

            item.addEventListener("dragenter", function() {
                item.classList.add("form-input-file--hover")
            });

            item.addEventListener("dragleave", function(event) {
                if(!item.contains(event.relatedTarget))
                    item.classList.remove("form-input-file--hover")
            });

            item.addEventListener("dragover", function(event) {
                event.preventDefault();
                return false
            });

            item.addEventListener("drop", function(event) {
                event.preventDefault();
                item.classList.remove("form-input-file--hover");

                let file = event.dataTransfer?.files[0]
                if (!file) {
                    return false
                }

                if (file.type.startsWith("image/")) {
                    inputFileInput.files = event.dataTransfer.files;
                    changeInputText(event.dataTransfer.files);
                }

                return false
            })

            inputFileInput.addEventListener('change',(event) => {
                changeInputText(event.target.files);
            });
        })
    }
}