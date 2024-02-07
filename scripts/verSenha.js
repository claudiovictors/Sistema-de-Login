const campo_input = document.querySelector("#senha");
const btn_ver = document.querySelector(".fa-eye");

btn_ver.addEventListener("click", ()=>{
    
    btn_ver.classList.toggle("ativado");

    if(campo_input.type == "password"){
        campo_input.type = "text";
    }else {
        campo_input.type = "password"
    }
})