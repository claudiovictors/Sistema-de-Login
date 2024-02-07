const form = document.querySelector("form"),
      accaoBTN = form.querySelector("button");

const mensagens_erros = document.querySelector(".mensagens-erros");

//Funcao para eviatar a recarga da pagina
form.onsubmit = (e)=>{
    e.preventDefault();
}


accaoBTN.addEventListener("click", ()=>{
    
    //Criando objecto XML AJAX

    let xhr = new XMLHttpRequest();

    xhr.open("POST", "config/cadastro.php", true);

    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;

                if(data == "sucesso"){
                    location.href = "home.php";
                }else {
                    mensagens_erros.style.display = "block";
                    mensagens_erros.innerHTML = data;
                }
            }
        }
    }

    let formdata = new FormData(form);
    xhr.send(formdata);
})