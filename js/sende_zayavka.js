document.addEventListener("DOMContentLoaded", () => {
	// Отправка файлов из комполнет 
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
                
                console.log(file_span);
                file_span.value = file_data.name;
                file_label.innerHTML = file_data.name;
              };

            xhr.send(form_data);
        })
    }

    function form_validation(form) {
        let valid_form = false;
        
        let all_form_input = form.querySelectorAll("input:required")
        console.log(all_form_input);

        for (let i = 0; i<all_form_input.length; i++)
        {
            console.log(i+": "+all_form_input[i].value);
            if (all_form_input[i].value == "") {
                
                all_form_input[i].classList.add("_error")
                all_form_input[i].addEventListener("focus", (e) => {
                    all_form_input[i].classList.remove("_error")
                })
            }
        }

        return valid_form;
    }

    let z_btn = document.getElementById("zayavka_send")
    if (z_btn)
    z_btn.addEventListener("click", (e) => {
        e.preventDefault()
        
        let form_id = z_btn.dataset.formid;
        var form = document.getElementById(form_id);
        form_validation(form)
        var data = new FormData(form);
    }) 

});