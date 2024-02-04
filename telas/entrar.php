<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/entrar.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="shortcut icon" href="../images/favicon-16-NAVEGADOR.png">
    <script src="../js/tela-inicial.js" defer></script>
    <title>Twitch</title>
</head>

<body>
    <header>
        <div class="seguindo-procurar">
            <a href="entrar.php"><img class="animate__animated animate__bounce"
                    src="../images/favicon-32-tela-inicial.png" alt="logo">
            </a>

            <div class="tabs"> <!--  TABS PROCURAR -->
                <input type="radio" class="tabs__radio" name="tabs-example" id="tab1" onclick="Trocar()">
                <label for="tab1" class="tabs__label">Procurar</label>
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
            <button onclick="abrirModal()">
                Entrar
            </button>            
            <svg> <!--  usuario -->
                <path fill-rule="evenodd"
                    d="M5 7a5 5 0 1 1 6.192 4.857A2 2 0 0 0 13 13h1a3 3 0 0 1 3 3v2h-2v-2a1 1 0 0 0-1-1h-1a3.99 3.99 0 0 1-3-1.354A3.99 3.99 0 0 1 7 15H6a1 1 0 0 0-1 1v2H3v-2a3 3 0 0 1 3-3h1a2 2 0 0 0 1.808-1.143A5.002 5.002 0 0 1 5 7zm5 3a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                </path>
            </svg>
        </div>
    </header>

    <section class="container-geral">
        <section class="aba-lateral">
            <div class="conteudo-abalateral">
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
                        <span>2,1 mil</span>
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
                        <span>2,1 mil</span>
                    </div>
                </a>
            </div>
        </section>
        <main id="principal">
            <div class="gallery" id="galeria">
                <div class="gallery-controls">
                    <button class="gallery-controls-previous"></button>
                    <button class="gallery-controls-next"></button>
                </div>
                <div class="gallery-container">
                    <img class="gallery-item gallery-item-1" src="../images/coringa.jpg" onclick="LiveCoringa()" data-index="1">
                    <img class="gallery-item gallery-item-2" src="../images/casimito.jpg" onclick="LiveCoringa()" data-index="2">
                    <img class="gallery-item gallery-item-3" src="../images/gau.jpg" onclick="LiveCoringa()" data-index="3">
                    <img class="gallery-item gallery-item-4" src="../images/alanzoka.jpg" onclick="LiveCoringa()" data-index="4">
                    <img class="gallery-item gallery-item-5" src="../images/mari.jpg" onclick="LiveCoringa()" data-index="5">
                </div>
            </div>

            <h3><span>Canais ao vivo</span> que achamos que você vai gostar</h3>
            <div class="container-lives-main">
                <div class="lives">
                    <span class="spanAovivo" onmouseover="manter(0)" onmouseout="desmanter(0)">AO VIVO</span>
                    <img src="../images/live1.jpg" class="img-p" onmouseover="trocarPosicao(0)"
                        onmouseout="destrocarPosicao(0)">
                    <span class="spanEspec" onmouseover="manter(0)" onmouseout="desmanter(0)">31 mil espectadores</span>
                    <div class="img-descricao-live">
                        <img src="../images/gaules-perfil.png">
                        <div class="teste">
                            <h5>MIBR vs BIG</h5>
                            <p>Gaules</p>
                            <p>Counter-Strike</p>
                            <div class="tags-categoria">
                                <span>Jogo de Tiro</span>
                                <span>FPS</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lives">
                    <span class="spanAovivo" onmouseover="manter(1)" onmouseout="desmanter(1)">AO VIVO</span>
                    <img src="../images/live2.jpg" class="img-p" onmouseover="trocarPosicao(1)"
                        onmouseout="destrocarPosicao(1)">
                    <span class="spanEspec" onmouseover="manter(1)" onmouseout="desmanter(1)">1,6 mil
                        espectadores</span>
                    <div class="img-descricao-live">
                        <img src="../images/yetz-perfil.png">
                        <div class="teste">
                            <h5>Foco no diamante 🔥</h5>
                            <p>yeTz</p>
                            <p>League of Legends</p>
                            <div class="tags-categoria">
                                <span>leagueoflegends</span>
                                <span>RPG</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lives">
                    <span class="spanAovivo" onmouseover="manter(2)" onmouseout="desmanter(2)">AO VIVO</span>
                    <img src="../images/live-fifa.jpg" class="img-p" onmouseover="trocarPosicao(2)"
                        onmouseout="destrocarPosicao(2)">
                    <span class="spanEspec" onmouseover="manter(2)" onmouseout="desmanter(2)">1,5 mil
                        espectadores</span>
                    <div class="img-descricao-live">
                        <img src="../images/perfil-pelegrino.png">
                        <div class="teste">
                            <h5>FIFA DE QUALIDADE</h5>
                            <p>Pelegrino1993</p>
                            <p>EA Sports FC 24</p>
                            <div class="tags-categoria">
                                <span>Português</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lives">
                    <span class="spanAovivo" onmouseover="manter(3)" onmouseout="desmanter(3)">AO VIVO</span>
                    <img src="../images/live-blackoutz.jpg" class="img-p" onmouseover="trocarPosicao(3)"
                        onmouseout="destrocarPosicao(3)">
                    <span class="spanEspec" onmouseover="manter(3)" onmouseout="desmanter(3)">1,9 mil
                        espectadores</span>
                    <div class="img-descricao-live">
                        <img src="../images/perfil-blackoutz.jpg">
                        <div class="teste">
                            <h5>AO VIVO: GRIND NA TEMPORADA 7 & 8 !!</h5>
                            <p>Blackoutz</p>
                            <p>Fortnite</p>
                            <div class="tags-categoria">
                                <span>Português</span>
                                <span>FPS</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lives">
                    <span class="spanAovivo" onmouseover="manter(4)" onmouseout="desmanter(4)">AO VIVO</span>
                    <img src="../images/live5.jpg" class="img-p" onmouseover="trocarPosicao(4)"
                        onmouseout="destrocarPosicao(4)">
                    <span class="spanEspec" onmouseover="manter(4)" onmouseout="desmanter(4)">80 espectadores</span>
                    <div class="img-descricao-live">
                        <img src="../images/perfil-mine.png">
                        <div class="teste">
                            <h5>✨BedWars e PvP com o Chat✨</h5>
                            <p>DexGGxp</p>
                            <p>Minecraft</p>
                            <div class="tags-categoria">
                                <span>Jogo Mobile</span>
                                <span>RTS</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lives">
                    <span class="spanAovivo" onmouseover="manter(5)" onmouseout="desmanter(5)">AO VIVO</span>
                    <img src="../images/live-coringa.jpg" class="img-p" onmouseover="trocarPosicao(5)"
                        onmouseout="destrocarPosicao(5)">
                    <span class="spanEspec" onmouseover="manter(5)" onmouseout="desmanter(5)">6,8 mil
                        espectadores</span>
                    <div class="img-descricao-live">
                        <img src="../images/perfil-coringa.jpg">
                        <div class="teste">
                            <h5>AOBA BOA NOITE</h5>
                            <p>loud_coringa</p>
                            <p>Só na conversa</p>
                            <div class="tags-categoria">
                                <span>Português</span>
                                <span>FUTEBOL</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lives">
                    <span class="spanAovivo" onmouseover="manter(6)" onmouseout="desmanter(6)">AO VIVO</span>
                    <img src="../images/live-paulinholokobr.jpg" class="img-p" onmouseover="trocarPosicao(6)"
                        onmouseout="destrocarPosicao(6)">
                    <span class="spanEspec" onmouseover="manter(6)" onmouseout="desmanter(6)">44,8 mil
                        espectadores</span>
                    <div class="img-descricao-live">
                        <img src="../images/perfil-paulinho.jpg">
                        <div class="teste">
                            <h5>🔥PAULINHO O LOKO🔥</h5>
                            <p>PaulinhoLOKObr</p>
                            <p>Grand Theft Auto V</p>
                            <div class="tags-categoria">
                                <span>Português</span>
                                <span>GTAV</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lives">
                    <span class="spanAovivo" onmouseover="manter(7)" onmouseout="desmanter(7)">AO VIVO</span>
                    <img src="../images/clash-live.jpg" class="img-p" onmouseover="trocarPosicao(7)"
                        onmouseout="destrocarPosicao(7)">
                    <span class="spanEspec" onmouseover="manter(7)" onmouseout="desmanter(7)">350 espectadores</span>
                    <div class="img-descricao-live">
                        <img src="../images/marinaul.png">
                        <div class="teste">
                            <h5>CLASH CHAMPS VS STRUT</h5>
                            <p>marinaul</p>
                            <p>Clash of Clans</p>
                            <div class="tags-categoria">
                                <span>Jogo Mobile</span>
                                <span>Português</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lives">
                    <span class="spanAovivo" onmouseover="manter(8)" onmouseout="desmanter(8)">AO VIVO</span>
                    <img src="../images/live-byjake.png" class="img-p" onmouseover="trocarPosicao(8)"
                        onmouseout="destrocarPosicao(8)">
                    <span class="spanEspec" onmouseover="manter(8)" onmouseout="desmanter(8)">20 espectadores</span>
                    <div class="img-descricao-live">
                        <img src="../images/byjake.png">
                        <div class="teste">
                            <h5>Rumo a 20K</h5>
                            <p>byJakeOficial</p>
                            <p>Counter-Strike</p>
                            <div class="tags-categoria">
                                <span>Jogo de Tiro</span>
                                <span>FPS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3><span>Categorias</span> que achamos que você vai gostar</h3>
            <div class="container-categoria">
                <div class="categoria">
                    <img src="../images/clash.jpg">
                    <h5>Clash of Clans</h5>
                    <p>4,2 mil espectadores</p>
                    <div class="tags-categoria">
                        <span>Jogo Mobile</span>
                        <span>RTS</span>
                    </div>
                </div>
                <div class="categoria">
                    <img src="../images/cs2.jpg">
                    <h5>Counter-Strike</h5>
                    <p>110,6 mil espectadores</p>
                    <div class="tags-categoria">
                        <span>FPS</span>
                        <span>Jogo de Tiro</span>
                    </div>
                </div>
                <div class="categoria">
                    <img src="../images/lol.jpg">
                    <h5>League of Legends</h5>
                    <p>110,6 mil espectadores</p>
                    <div class="tags-categoria">
                        <span>RPG</span>
                        <span>Estratégia</span>
                    </div>
                </div>
                <div class="categoria">
                    <img src="../images/justchatting.jpg">
                    <h5>Só na conversa</h5>
                    <p>441,2 mil espectadores</p>
                    <div class="tags-categoria">
                        <span>Vida Real</span>
                    </div>
                </div>
                <div class="categoria">
                    <img src="../images/valorant.jpg">
                    <h5>Valorant</h5>
                    <p>104 mil espectadores</p>
                    <div class="tags-categoria">
                        <span>FPS</span>
                        <span>Jogo de Tiro</span>
                    </div>
                </div>
                <div class="categoria">
                    <img src="../images/fortnite.jpg">
                    <h5>Fortnite</h5>
                    <p>613 mil espectadores</p>
                    <div class="tags-categoria">
                        <span>Jogo de Tiro</span>
                        <span>RPG</span>
                    </div>
                </div>
                <div class="categoria">
                    <img src="../images/gta.jpg">
                    <h5>Grand Theft Auto V</h5>
                    <p>172,7 mil espectadores</p>
                    <div class="tags-categoria">
                        <span>Mundo Aberto</span>
                    </div>
                </div>
                <div class="categoria">
                    <img src="../images/DeadbyDaylight.jpg">
                    <h5>Dead by Daylight</h5>
                    <p>29,8 mil espectadores</p>
                    <div class="tags-categoria">
                        <span>Estratégia</span>
                    </div>
                </div>
            </div>
        </main>

        <div class="tabs__content" id="conteudo-tabs">
            <h1>Procurar</h1>
            <section class="tags">
                <div>
                    <p>Jogos</p>
                    <img src="../images/gaming.svg" alt="">
                </div>
                <div>
                    <p>Vida Real</p>
                    <img src="../images/mic.svg" alt="">
                </div>
                <div>
                    <p>Música</p>
                    <img src="../images/music.svg" alt="">
                </div>
                <div>
                    <p>Esports</p>
                    <img src="../images/esports.svg" alt="">
                </div>
                <div>
                    <p>Creative</p>
                    <img src="../images/creative.svg" alt="">
                </div>
            </section>
            <div class="tabs"> <!--  TABS DENTRO DO PROCURAR -->
                <input type="radio" class="tabs__radio" name="tabs-example-procurar" id="tab8" checked>
                <label for="tab8" class="tabs__label">Categorias</label>
                <div class="conteudo-tabs-interno">
                    <div class="buscar-classificar">
                        <div class="buscar">
                            <svg>
                                <path fill-rule="evenodd"
                                    d="M13.192 14.606a7 7 0 1 1 1.414-1.414l3.101 3.1-1.414 1.415-3.1-3.1zM14 9A5 5 0 1 1 4 9a5 5 0 0 1 10 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <input type="text" placeholder="Buscar marcações de categoria">
                        </div>
                        <div class="classificar">
                            <label for="op">Classificar por</label>
                            <select name="op" id="op">
                                <option value="op1">Recomendado para você</option>
                                <option value="op2">Espectadores</option>
                            </select>
                        </div>
                    </div>
                    <div class="container-categoria">
                        <div class="categoria">
                            <img src="../images/clash.jpg">
                            <h5>Clash of Clans</h5>
                            <p>4,2 mil espectadores</p>
                            <div class="tags-categoria">
                                <span>Jogo Mobile</span>
                                <span>RTS</span>
                            </div>
                        </div>
                        <div class="categoria">
                            <img src="../images/cs2.jpg">
                            <h5>Counter-Strike</h5>
                            <p>110,6 mil espectadores</p>
                            <div class="tags-categoria">
                                <span>FPS</span>
                                <span>Jogo de Tiro</span>
                            </div>
                        </div>
                        <div class="categoria">
                            <img src="../images/lol.jpg">
                            <h5>League of Legends</h5>
                            <p>110,6 mil espectadores</p>
                            <div class="tags-categoria">
                                <span>RPG</span>
                                <span>Estratégia</span>
                            </div>
                        </div>
                        <div class="categoria">
                            <img src="../images/justchatting.jpg">
                            <h5>Só na conversa</h5>
                            <p>441,2 mil espectadores</p>
                            <div class="tags-categoria">
                                <span>Vida Real</span>
                            </div>
                        </div>
                        <div class="categoria">
                            <img src="../images/valorant.jpg">
                            <h5>Valorant</h5>
                            <p>104 mil espectadores</p>
                            <div class="tags-categoria">
                                <span>FPS</span>
                                <span>Jogo de Tiro</span>
                            </div>
                        </div>
                        <div class="categoria">
                            <img src="../images/fortnite.jpg">
                            <h5>Fortnite</h5>
                            <p>613 mil espectadores</p>
                            <div class="tags-categoria">
                                <span>Jogo de Tiro</span>
                                <span>RPG</span>
                            </div>
                        </div>
                        <div class="categoria">
                            <img src="../images/gta.jpg">
                            <h5>Grand Theft Auto V</h5>
                            <p>172,7 mil espectadores</p>
                            <div class="tags-categoria">
                                <span>Mundo Aberto</span>
                            </div>
                        </div>
                        <div class="categoria">
                            <img src="../images/DeadbyDaylight.jpg">
                            <h5>Dead by Daylight</h5>
                            <p>29,8 mil espectadores</p>
                            <div class="tags-categoria">
                                <span>Estratégia</span>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="radio" class="tabs__radio" name="tabs-example-procurar" id="tab9">
                <label for="tab9" class="tabs__label">Canais ao vivo</label>
                <div class="conteudo-tabs-interno">
                    <div class="buscar-classificar">
                        <div class="buscar">
                            <select name="idioma" id="idioma">
                                <option value="op1">idioma</option>
                                <option value="op2">Português</option>
                                <option value="op3">English</option>
                                <option value="op4">Español</option>
                                <option value="op5">Français</option>
                                <option value="op6">Italiano</option>
                                <option value="op7">Norsk</option>
                            </select>
                            <svg style="margin-left: -10px;">
                                <path fill-rule="evenodd"
                                    d="M13.192 14.606a7 7 0 1 1 1.414-1.414l3.101 3.1-1.414 1.415-3.1-3.1zM14 9A5 5 0 1 1 4 9a5 5 0 0 1 10 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <input type="text" placeholder="Buscar marcações">
                        </div>
                        <div class="classificar">
                            <label for="op">Classificar por</label>
                            <select name="op" id="op">
                                <option value="op1">Recomendado para você</option>
                                <option value="op2">Espectadores</option>
                            </select>
                        </div>
                    </div>
                    <h4>Canais em <span style="color: #5C16C5;">Português</span></h4>
                    <div class="container-lives-main" id="margem-pra-live">
                        <div class="lives">
                            <span class="spanAovivo" onmouseover="manter(0)" onmouseout="desmanter(0)">AO VIVO</span>
                            <img src="../images/live1.jpg" class="img-p" onmouseover="trocarPosicao(0)"
                                onmouseout="destrocarPosicao(0)">
                            <span class="spanEspec" onmouseover="manter(0)" onmouseout="desmanter(0)">31 mil
                                espectadores</span>
                            <div class="img-descricao-live">
                                <img src="../images/gaules-perfil.png">
                                <div class="teste">
                                    <h5>MIBR vs BIG</h5>
                                    <p>Gaules</p>
                                    <p>Counter-Strike</p>
                                    <div class="tags-categoria">
                                        <span>Jogo de Tiro</span>
                                        <span>FPS</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lives">
                            <span class="spanAovivo" onmouseover="manter(1)" onmouseout="desmanter(1)">AO VIVO</span>
                            <img src="../images/live2.jpg" class="img-p" onmouseover="trocarPosicao(1)"
                                onmouseout="destrocarPosicao(1)">
                            <span class="spanEspec" onmouseover="manter(1)" onmouseout="desmanter(1)">1,6 mil
                                espectadores</span>
                            <div class="img-descricao-live">
                                <img src="../images/yetz-perfil.png">
                                <div class="teste">
                                    <h5>Foco no diamante 🔥</h5>
                                    <p>yeTz</p>
                                    <p>League of Legends</p>
                                    <div class="tags-categoria">
                                        <span>leagueoflegends</span>
                                        <span>RPG</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lives">
                            <span class="spanAovivo" onmouseover="manter(2)" onmouseout="desmanter(2)">AO VIVO</span>
                            <img src="../images/live-fifa.jpg" class="img-p" onmouseover="trocarPosicao(2)"
                                onmouseout="destrocarPosicao(2)">
                            <span class="spanEspec" onmouseover="manter(2)" onmouseout="desmanter(2)">1,5 mil
                                espectadores</span>
                            <div class="img-descricao-live">
                                <img src="../images/perfil-pelegrino.png">
                                <div class="teste">
                                    <h5>FIFA DE QUALIDADE</h5>
                                    <p>Pelegrino1993</p>
                                    <p>EA Sports FC 24</p>
                                    <div class="tags-categoria">
                                        <span>Português</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lives">
                            <span class="spanAovivo" onmouseover="manter(3)" onmouseout="desmanter(3)">AO VIVO</span>
                            <img src="../images/live-blackoutz.jpg" class="img-p" onmouseover="trocarPosicao(3)"
                                onmouseout="destrocarPosicao(3)">
                            <span class="spanEspec" onmouseover="manter(3)" onmouseout="desmanter(3)">1,9 mil
                                espectadores</span>
                            <div class="img-descricao-live">
                                <img src="../images/perfil-blackoutz.jpg">
                                <div class="teste">
                                    <h5>AO VIVO: GRIND NA TEMPORADA 7 & 8 !!</h5>
                                    <p>Blackoutz</p>
                                    <p>Fortnite</p>
                                    <div class="tags-categoria">
                                        <span>Português</span>
                                        <span>FPS</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lives">
                            <span class="spanAovivo" onmouseover="manter(4)" onmouseout="desmanter(4)">AO VIVO</span>
                            <img src="../images/live5.jpg" class="img-p" onmouseover="trocarPosicao(4)"
                                onmouseout="destrocarPosicao(4)">
                            <span class="spanEspec" onmouseover="manter(4)" onmouseout="desmanter(4)">80
                                espectadores</span>
                            <div class="img-descricao-live">
                                <img src="../images/perfil-mine.png">
                                <div class="teste">
                                    <h5>✨BedWars e PvP com o Chat✨</h5>
                                    <p>DexGGxp</p>
                                    <p>Minecraft</p>
                                    <div class="tags-categoria">
                                        <span>Jogo Mobile</span>
                                        <span>RTS</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lives">
                            <span class="spanAovivo" onmouseover="manter(5)" onmouseout="desmanter(5)">AO VIVO</span>
                            <img src="../images/live-coringa.jpg" class="img-p" onmouseover="trocarPosicao(5)"
                                onmouseout="destrocarPosicao(5)">
                            <span class="spanEspec" onmouseover="manter(5)" onmouseout="desmanter(5)">6,8 mil
                                espectadores</span>
                            <div class="img-descricao-live">
                                <img src="../images/perfil-coringa.jpg">
                                <div class="teste">
                                    <h5>AOBA BOA NOITE</h5>
                                    <p>loud_coringa</p>
                                    <p>Só na conversa</p>
                                    <div class="tags-categoria">
                                        <span>Português</span>
                                        <span>FUTEBOL</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lives">
                            <span class="spanAovivo" onmouseover="manter(6)" onmouseout="desmanter(6)">AO VIVO</span>
                            <img src="../images/live-paulinholokobr.jpg" class="img-p" onmouseover="trocarPosicao(6)"
                                onmouseout="destrocarPosicao(6)">
                            <span class="spanEspec" onmouseover="manter(6)" onmouseout="desmanter(6)">44,8 mil
                                espectadores</span>
                            <div class="img-descricao-live">
                                <img src="../images/perfil-paulinho.jpg">
                                <div class="teste">
                                    <h5>🔥PAULINHO O LOKO🔥</h5>
                                    <p>PaulinhoLOKObr</p>
                                    <p>Grand Theft Auto V</p>
                                    <div class="tags-categoria">
                                        <span>Português</span>
                                        <span>GTAV</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lives">
                            <span class="spanAovivo" onmouseover="manter(7)" onmouseout="desmanter(7)">AO VIVO</span>
                            <img src="../images/clash-live.jpg" class="img-p" onmouseover="trocarPosicao(7)"
                                onmouseout="destrocarPosicao(7)">
                            <span class="spanEspec" onmouseover="manter(7)" onmouseout="desmanter(7)">350
                                espectadores</span>
                            <div class="img-descricao-live">
                                <img src="../images/marinaul.png">
                                <div class="teste">
                                    <h5>CLASH CHAMPS VS STRUT</h5>
                                    <p>marinaul</p>
                                    <p>Clash of Clans</p>
                                    <div class="tags-categoria">
                                        <span>Jogo Mobile</span>
                                        <span>Português</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lives">
                            <span class="spanAovivo" onmouseover="manter(8)" onmouseout="desmanter(8)">AO VIVO</span>
                            <img src="../images/live-byjake.png" class="img-p" onmouseover="trocarPosicao(8)"
                                onmouseout="destrocarPosicao(8)">
                            <span class="spanEspec" onmouseover="manter(8)" onmouseout="desmanter(8)">20
                                espectadores</span>
                            <div class="img-descricao-live">
                                <img src="../images/byjake.png">
                                <div class="teste">
                                    <h5>Rumo a 20K</h5>
                                    <p>byJakeOficial</p>
                                    <p>Counter-Strike</p>
                                    <div class="tags-categoria">
                                        <span>Jogo de Tiro</span>
                                        <span>FPS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-modal" id="modal">
        <form action="">
            <svg onclick="fecharModal()" id="fechar-modal" width="4%" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                <path d="M8.5 10 4 5.5 5.5 4 10 8.5 14.5 4 16 5.5 11.5 10l4.5 4.5-1.5 1.5-4.5-4.5L5.5 16 4 14.5 8.5 10z"></path>
            </svg>
            <div class="img-titulo">
                <svg width="50" height="50" viewBox="0 0 24 28">
                    <g fill-rule="evenodd">
                        <path d="M19 6v6h-2V6h2zm-7 0h2v6h-2V6zM5 0 0 5v18h6v5l5-5h4l9-9V0H5zm17 13-4 4h-4l-4 4v-4H6V2h16v11z"></path>
                        <path fill="#FFF" d="m18 17 4-4V2H6v15h4v4l4-4h4zM12 6h2v6h-2V6zm7 0h-2v6h2V6z"></path>
                    </g>
                </svg>
                <h4>Entrar na Twitch</h4>
            </div>
            <label for="usuario">Usuário</label>
            <input onclick="EsconderSpan()" id="usuario" type="text" placeholder="admin">
            <label for="senha">Senha</label>
            <input onclick="EsconderSpan()" id="senha" type="password" placeholder="admin">
            <div id="icone" onclick="TrocarIcone()"></div>
            <span id="erro">Usuário ou senha incorretos.</span>
            <span>Problemas para efetuar login?</span>
            <input id="btn" type="submit" value="Entrar" onclick="Logar(); return false">
            <div class="loading"><span class="carregando"></span></div>
        </form>
        
    </section>
</body>

</html>