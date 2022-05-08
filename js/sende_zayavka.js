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
                file_span.value = xhr.response;
                file_label.innerHTML = file_data.name;
              };

            xhr.send(form_data);
        })
    }

    function form_validation(form) {
        let valid_form = true
        
        let all_form_input = form.querySelectorAll("input:required")
       
        for (let i = 0; i<all_form_input.length; i++)
        {
            if (all_form_input[i].value == "") {
                valid_form = false
                all_form_input[i].classList.add("_error")
                all_form_input[i].addEventListener("focus", (e) => {
                    all_form_input[i].classList.remove("_error")
                })
            }
        }

        return valid_form;
    }

    function get_form_comment(form) {
        let fieeld_name = []
        
        let all_form_input = form.querySelectorAll("input")
       
        for (let i = 0; i<all_form_input.length; i++)
        {
            let tm = [];
            tm[all_form_input[i].name] = all_form_input[i].dataset.valuem
            fieeld_name.push(tm)
        }

        return fieeld_name;   
    }

    let z_btn = document.getElementById("zayavka_send")
    if (z_btn)
    z_btn.addEventListener("click", (e) => {
        e.preventDefault()
        let form_id = z_btn.dataset.formid;
        var form = document.getElementById(form_id);
        
        console.log(get_form_comment(form))

        if (form_validation(form)) {
            console.log("do")
            var data = new FormData(form);

	        data.append('fildname', JSON.stringify(get_form_comment(form)));
	        data.append('action', "zayavka_send");
	        data.append('nonce', allAjax.nonce);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", allAjax.ajaxurl, true);

            xhr.onload = function () {
                console.log("SEND!") 
                document.location.href = thencs_page   
            };

            xhr.send(data);
        }
        
    }) 

});