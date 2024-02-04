<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/perfil-usuario.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="shortcut icon" href="../images/favicon-16-NAVEGADOR.png">
    <script src="../js/tela-inicial.js" defer></script>
    <script src="../js/perfil-usuario.js" defer></script>
    <title>Twitch</title>
</head>

<body>
    <header>
        <div class="seguindo-procurar">
            <a href="tela-inicial.php"><img class="animate__animated animate__bounce"
                    src="../images/favicon-32-tela-inicial.png" alt="logo">
            </a>

            <div class="tabs"> <!--  TABS CADASTROS E PROCURAR -->
                <input type="radio" class="tabs__radio" name="tabs-example" id="tab1">
                <label for="tab1" class="tabs__label" onclick="TrocarCadastros()">Cadastros</label>

                <input type="radio" class="tabs__radio" name="tabs-example" id="tab2">
                <label for="tab2" class="tabs__label" onclick="TrocarProcurar()">Procurar</label>
            </div>
            <svg>
                <path
                    d="M10 18a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zM8 4a2 2 0 1 0 4 0 2 2 0 0 0-4 0z">
                </path>
            </svg>
        </div>
        <div class="pesquisa">
            <input type="text" placeholder="Buscar">
            <button>
                <img src="../images/lupa.png" alt="lupa">
            </button>
        </div>
        <div class="icones">
            <svg> <!--  coroa -->
                <path
                    d="M13.798 10.456 10 6.657l-3.798 3.799L4 8.805V13h12V8.805l-2.202 1.65zM18 5v8a2 2 0 0 1-2 2H4a2.002 2.002 0 0 1-2-2V5l4 3 4-4 4 4 4-3z">
                </path>
            </svg>
            <svg> <!--  caixa de notificacoes -->
                <path fill-rule="evenodd"
                    d="M4 3h12l2 4v10H2V7l2-4zm.236 4H8v1a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V7h3.764l-1-2H5.236l-1 2zM16 9h-2.17A3.001 3.001 0 0 1 11 11H9a3.001 3.001 0 0 1-2.83-2H4v6h12V9z"
                    clip-rule="evenodd"></path>
            </svg>
            <svg> <!--  chat -->
                <path fill-rule="evenodd"
                    d="M7.828 13 10 15.172 12.172 13H15V5H5v8h2.828zM10 18l-3-3H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2l-3 3z"
                    clip-rule="evenodd">
                </path>
            </svg>
            <svg> <!--  bits -->
                <path fill-rule="evenodd"
                    d="M3 12l7-10 7 10-7 6-7-6zm2.678-.338L10 5.487l4.322 6.173-.85.728L10 11l-3.473 1.39-.849-.729z">
                </path>
            </svg>
            <svg> <!--  usuario -->
                <path fill-rule="evenodd"
                    d="M5 7a5 5 0 1 1 6.192 4.857A2 2 0 0 0 13 13h1a3 3 0 0 1 3 3v2h-2v-2a1 1 0 0 0-1-1h-1a3.99 3.99 0 0 1-3-1.354A3.99 3.99 0 0 1 7 15H6a1 1 0 0 0-1 1v2H3v-2a3 3 0 0 1 3-3h1a2 2 0 0 0 1.808-1.143A5.002 5.002 0 0 1 5 7zm5 3a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                </path>
            </svg>
        </div>
    </header>

    <section class="container-geral">
        <section class="aba-lateral">
            <h3>Para você</h3>
            <h5>CANAIS SEGUIDOS</h5>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/ESL.png" alt="ESLCS">
                    <div class="titulo-tema">
                        <p>ESLCS</p>
                        <p>Counter-Strike</p>
                    </div>
                    <div class="red-point"></div>
                    <span>1,3 mil</span>
                </div>
            </a>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/Riot.png" alt="Riot">
                    <div class="titulo-tema">
                        <p>Riot Games</p>
                        <p>League of Le...</p>
                    </div>
                    <div class="red-point"></div>
                    <span>6,1 mil</span>
                </div>
            </a>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/fnx.jpg" alt="fnx">
                    <div class="titulo-tema">
                        <p>fnxLNTC</p>
                        <p>Counter-Strike</p>
                    </div>
                    <div class="red-point"></div>
                    <span>3,2 mil</span>
                </div>
            </a>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/bruna7cr.png" alt="bruna7cr">
                    <div class="titulo-tema">
                        <p>bruna7cr</p>
                        <p>Clash of Clans</p>
                    </div>
                    <div class="red-point"></div>
                    <span>150</span>
                </div>
            </a>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/marinaul.png" alt="marinaul">
                    <div class="titulo-tema">
                        <p>marinaul</p>
                        <p>Clash of Clans</p>
                    </div>
                    <div class="red-point"></div>
                    <span>335</span>
                </div>
            </a>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/bt0.png" alt="bt">
                    <div class="titulo-tema">
                        <p>bt0tv</p>
                        <p>Só na conversa</p>
                    </div>
                    <div class="red-point"></div>
                    <span>2,2 mil</span>
                </div>
            </a>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/byjake.png" id="off" alt="bt">
                    <div class="titulo-tema">
                        <p>byJakeOficial</p>
                        <p> </p>
                    </div>
                    <span style="margin-left: 40px;">Offline</span>
                </div>
            </a>
            <h5>CANAIS RECOMENDADOS</h5>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/fnx.jpg" alt="fnx">
                    <div class="titulo-tema">
                        <p>fnxLNTC</p>
                        <p>Counter-Strike</p>
                    </div>
                    <div class="red-point"></div>
                    <span>3,2 mil</span>
                </div>
            </a>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/bruna7cr.png" alt="bruna7cr">
                    <div class="titulo-tema">
                        <p>bruna7cr</p>
                        <p>Clash of Clans</p>
                    </div>
                    <div class="red-point"></div>
                    <span>150</span>
                </div>
            </a>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/marinaul.png" alt="marinaul">
                    <div class="titulo-tema">
                        <p>marinaul</p>
                        <p>Clash of Clans</p>
                    </div>
                    <div class="red-point"></div>
                    <span>335</span>
                </div>
            </a>
            <a href="#">
                <div class="container-lives">
                    <img src="../images/bt0.png" alt="bt">
                    <div class="titulo-tema">
                        <p>bt0tv</p>
                        <p>Só na conversa</p>
                    </div>
                    <div class="red-point"></div>
                    <span>2,2 mil</span>
                </div>
            </a>
        </section>

        <main>
            <section class="section-main-geral">
                <!--Substituir IMG por vídeo futuramente-->
                <!-- <img src="../images/fundo-roxo.jpg"> -->

                <div class="caixas-flutuantes">
                    <div class="ultima-transmissao">
                        <p class="status-usuario">OFFLINE</p>
                        <!--Linkar com último vídeo-->
                        <p class="transmissao">Confira a ultima <a href="#">transmissão</a> realizada! </p>
                        <div class="ativar-notificacao" id="Notification">
                            <svg>
                                <path fill-rule="evenodd"
                                    d="M17 14v-2c-1-.5-1.75-1-2-2-.095-.38-.154-.905-.221-1.506C14.49 5.936 14.049 2 10 2 5.95 2 5.509 5.936 5.221 8.494 5.154 9.095 5.095 9.62 5 10c-.25 1-1 1.5-2 2v2h14zm-9.002 2h4-4zm4 0v.012V16zm-5.766-4h7.536a4.262 4.262 0 0 1-.708-1.515c-.129-.513-.2-1.154-.26-1.684a32.48 32.48 0 0 0-.009-.083c-.152-1.355-.314-2.606-.78-3.535-.21-.423-.447-.692-.703-.862C11.063 4.158 10.673 4 10 4s-1.063.158-1.308.32c-.256.171-.492.44-.704.863-.465.929-.627 2.18-.78 3.535L7.2 8.8c-.06.53-.131 1.171-.26 1.684-.15.603-.402 1.1-.708 1.515zm1.766 4a2.001 2.001 0 0 0 4 .012"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <p id="ativar">Ativar notificação</p>
                        </div>
                    </div>

                    <div class="video-informativo">
                        <!--Substituir IMG por vídeo futuramente-->
                        <img src="../images/coringa.jpg">
                    </div>
                </div>

                <div class="perfil-conteudo">
                    <section class="caixa-perfil-usuario">
                        <div class="informacoes-basicas">
                            <div class="container-img-perfil">
                                <img src="../images/perfil-coringa.jpg">
                                <div class="nome-e-seguidores">
                                    <h2><a href="../html/perfil-usuario.php">loud_coringa</a></h2>
                                    <p>4,7 mi seguidores</p>
                                </div>
                            </div>

                            <div class="seguir-inscrever">
                                <!-- Fazer animações -->
                                <div class="seguir">
                                    <svg>
                                        <g> <!--Coração-->
                                            <path fill-rule="evenodd"
                                                d="M9.171 4.171A4 4 0 006.343 3H6a4 4 0 00-4 4v.343a4 4 0 001.172 2.829L10 17l6.828-6.828A4 4 0 0018 7.343V7a4 4 0 00-4-4h-.343a4 4 0 00-2.829 1.172L10 5l-.829-.829zm.829 10l5.414-5.414A2 2 0 0016 7.343V7a2 2 0 00-2-2h-.343a2 2 0 00-1.414.586L10 7.828 7.757 5.586A2 2 0 006.343 5H6a2 2 0 00-2 2v.343a2 2 0 00.586 1.414L10 14.172z"
                                                clip-rule="evenodd"></path>
                                        </g>
                                    </svg>
                                    <p>Seguir</p>
                                </div>
                                <div class="inscrever">
                                    <svg> <!--Estrela-->
                                        <path fill-rule="evenodd"
                                            d="M11.456 8.255 10 5.125l-1.456 3.13-3.49.485 2.552 2.516-.616 3.485L10 13.064l3.01 1.677-.616-3.485 2.553-2.516-3.491-.485zM7.19 6.424l-4.2.583c-.932.13-1.318 1.209-.664 1.853l3.128 3.083-.755 4.272c-.163.92.876 1.603 1.722 1.132L10 15.354l3.579 1.993c.846.47 1.885-.212 1.722-1.132l-.755-4.272 3.128-3.083c.654-.644.268-1.723-.664-1.853l-4.2-.583-1.754-3.77c-.406-.872-1.706-.872-2.112 0L7.19 6.424z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p>Inscrever-se</p>
                                </div>
                                <svg class="tres-pontos"> <!--Três pontos-->
                                    <path
                                        d="M10 18a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zM8 4a2 2 0 1 0 4 0 2 2 0 0 0-4 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </section>

                    <section class="conteudo-usuario"> <!--CONTEÚDO DA PÁGINA-->
                        <h2 class="margin">Sobre loud_coringa</h2>
                        <p class="margin">
                            <strong>4,7 mi</strong> seguidores
                        </p>
                        <p class="margin">Eaeeee! Meu nome é Victor, mais conhecido como Coringa! 
                            Sou da Loud, uma organização giganteee com diversos criadores e faço lives todos os dias aqui na Twitch. 
                            Prepare-se pra dar muitas risadas, 
                            passar nervoso em diversos games e acima de tudo se divertir! 
                            Ja segue e liga as notificações!</p>
                    </section>
                </div>
            </section>
        </main>
    </section>
</body>

</html>