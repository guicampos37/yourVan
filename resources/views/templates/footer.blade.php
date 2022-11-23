<footer>
    <div class="footer-empresarial">
        <h3>Yourvan</h3>
        <span>Empresa criada com o intuito de facilitar a relação entre condutor e cliente. Nossa missão é acabar com a dificuldade quando se trata de busca por transporte escolar
            e proporcionar a todos uma experiência incrível para que todos consigam ter acesso a educação e consequentemente evoluirmos como sociedade.
        </span>
    </div>
    <div class="footer-inst">
        <h3>Institucional</h3>
        @if(Auth::check())
            <span><a href="/perfil-usuario" class="link-dark">Minha Conta</a></span>
        @endif
    </div>
</footer>