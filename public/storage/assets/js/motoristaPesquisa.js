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

document.getElementById('filtroInstituicoes').addEventListener('keyup', function() {
    var searchTerm = this.value.toLowerCase();
    var instituicoes = document.getElementById('listaInstituicoes').getElementsByTagName('li');

    Array.from(instituicoes).forEach(function(instituicao) {
        var nomeInstituicao = instituicao.textContent.toLowerCase();
        if (nomeInstituicao.includes(searchTerm)) {
            instituicao.style.display = '';
        } else {
            instituicao.style.display = 'none';
        }
    });
});


