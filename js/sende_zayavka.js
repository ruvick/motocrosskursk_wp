document.addEventListener("DOMContentLoaded", () => {
	let file_selectors = document.querySelectorAll("input[type=file]");
    for (let i =0; i<file_selectors.length; i++) {
        file_selectors[i].addEventListener("change", (e) => {
            e.preventDefault()
            let file_data = file_selectors[i].files[0]            
            let file_span = document.querySelector("#"+file_selectors[i].dataset.filenameinput)
            let file_label = document.querySelector("#"+file_selectors[i].dataset.filenamelabel)
            
            let form_data = new FormData()

            form_data.append('file', file_data);
	        form_data.append('action', "main_load_file");
	        form_data.append('nonce', allAjax.nonce);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", allAjax.ajaxurl, true);

            xhr.onload = function () {
                console.log("OK!!! ");
                console.log(file_span);
                file_span.value = file_data.name;
                file_label.innerHTML = file_data.name;
              };

            xhr.send(form_data);
        })
    }


});