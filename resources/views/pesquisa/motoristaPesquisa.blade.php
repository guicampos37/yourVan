<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Motorista</title>
    <link rel="stylesheet" href="assets/css/motoristaPesquisa.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="assets/js/bootstrap.min.js"></script>

</head>
<body>
    <section class="global">
        <header>
            <div class="header-container">
                <div class="header-box container">
                    <img id="img-logo" src="assets/img/logo-yourvan-100.png" alt="logo-yourvan">
                    <img id="img-menu" src="assets/img/menu.png" alt="menu">
                </div>
            </div>
        </header>

        <main>
            <div class="container back-button">
              
                <a href="pesquisa.html">  <img id="back-button" src="assets/img/back-button.png" alt="Voltar"></a>
            </div>

            <div class="perfil-motorista">
                <div class="perfil-motorista-carac">
                    <div class="carac-perfil">
                        <div class="perfil-avaliacao ml-4">
                            <span id="avaliacao-motorista">5</span>
                            <img src="assets/img/estrela.png" alt="Avaliação">
                        </div>
                        <div class="perfil-nome">
                            <img src="assets/img/perfil-de-usuario.png" alt="Perfil Motorista">
                            <span id="nome-motorista">Roberto</span>
                        </div>
                    </div>
                    <div class="carac-van">
                        <div>
                            <img src="assets/img/ar-condicionado.png" alt="Ar condicionado">
                            <span>Ar condicionado</span>
                        </div>
                        <div>
                            <img src="assets/img/altura.png" alt="Teto alto">
                            <span>Teto Alto</span>
                        </div>
                        <div>
                            <img src="assets/img/cadeirinha.png" alt="Poltrona Estolfada">
                            <span>Poltrona Estofada</span>
                        </div>
                        <div>
                            <img src="assets/img/wi-fi.png" alt="wi-fi">
                            <span>Wi-fi</span>
                        </div>
                        <div>
                            <img src="assets/img/secretario.png" alt="Assistente">
                            <span>Assistente</span>
                        </div>
                        <div>
                            <img src="assets/img/portas-automaticas.png" alt="Porta Automática">
                            <span>Portas Automáticas</span>
                        </div>
                    </div>
                    <div class="carac-horarios">
                        <span class="horarios-perfil">Horários:</span>
                        <ul>
                            <li>Manhã</li>
                            <li>Tarde</li>
                            <li>Noite</li>
                        </ul>
                    </div>
                </div>
                <div class="perfil-motorista-zonas d-flex justify-content-between align-item-center">
                    <div class="zonas-instituicoes mt-4 ">
                        <span class="titulo-lista">Instituições Atendidas</span>
                        <ul class="lista-perfil-motorista">
                            <li>Facens</li>
                            <li>Facens</li>
                            <li>Facens</li>
                            <li>Facens</li>
                            <li>Facens</li>
                            <li>Facens</li>
                            <li>Facens</li>
                            <li>Facens</li>
                            <li>Facens</li>
                      
                        </ul>
                    </div>
                    <div class="zonas-bairros mt-4">
                        <span class="titulo-lista">Bairros Atendidos</span>
                        <ul class="lista-perfil-motorista">
                            <li>Campolim</li>
                            <li>Campolim</li>
                            <li>Campolim</li>
                            <li>Campolim</li>
                            <li>Campolim</li>
                            <li>Campolim</li>
                            <li>Campolim</li>
                            <li>Campolim</li>
                        </ul>
                    </div>
                </div>
                <div class="perfil-motorista-buttons">
                    <div class="motorista-buttons-actions">
                        <button id="button-contato-motorista">Contato</button>
                        <button id="button-avaliacao-motorista">Avaliar</button>
                    </div>
                    <div class="modal-avaliacao">
                        <div class="modal-sair">
                            <button>
                                X
                            </button>  
                            <span>Faça sua avaliação!</span>
                            
                        </div>
                        
                        <form action="">
                            <div class="estrelas">
                                <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                                <label for="cm_star-1"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-1" name="fb" value="1"/>
                                <label for="cm_star-2"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-2" name="fb" value="2"/>
                                <label for="cm_star-3"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-3" name="fb" value="3"/>
                                <label for="cm_star-4"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-4" name="fb" value="4"/>
                                <label for="cm_star-5"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-5" name="fb" value="5"/>
                            </div>
                            <div class="modal-confirmar">
                                <input id="avaliar-submit" type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-empresarial">
                <h3>Yourvan</h3>
                <span>Empresa criada com o intuito de facilitar a relação entre condutor e cliente. Nossa missão é acabar com a dificuldade quando se trata de busca por transporte escolar
                    e proporcionar a todos uma experiência incrível para que todos consigam ter acesso a educação e consequentemente evoluirmos como sociedade.
                </span>
            </div>
            <div class="footer-inst">
                <h3>Institucional</h3>
                <span><a class="link-dark">Minha Conta</a></span>
            </div>
        </footer>
    </section>
</body>
<script src="assets/js/motoristaPesquisa.js"></script>
</html>