const botaoAvaliar = document.querySelector("#button-avaliacao-motorista")
const modal = document.querySelector(".modal-avaliacao")
const botaoSair = document.querySelector(".modal-sair")
const submitAvaliar = document.querySelector("#avaliar-submit")
botaoAvaliar.addEventListener("click", ativar);
botaoSair.addEventListener("click", desativar);
submitAvaliar.addEventListener("click", desativar);
function ativar(){
    modal.style.display = "block";
}
function desativar (){
    modal.style.display = "none";
}



