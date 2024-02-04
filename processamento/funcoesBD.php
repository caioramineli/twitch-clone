<?php
    function ConectarBD(){
        $conexao = mysqli_connect("localhost", "root", "", "twitch");
        return ($conexao);
    }

    #----------------------Usuario----------------------------
    function CadastrarUsuario($usuario, $telefone, $email, $senha){
        $conexao = ConectarBD();
        $inserir = "INSERT INTO usuario VALUES ('$usuario', '$telefone', '$email', '$senha')";
        #POR QUE É COLOCADO ENTRE ASPAS SIMPLES??

        mysqli_query($conexao, $inserir);
        #Comando responsável por executar comando SQL no php.
    }

    function ApresentarUsuario(){
        $conexao = ConectarBD();
        $buscar = "SELECT * FROM usuario";
        $apresentar = mysqli_query($conexao, $buscar);

        return $apresentar;
    }

    #----------------------Streamer----------------------------
    function CadastrarStreamer($nickname, $nome_streamer, $cpf, $telefone_streamer, $email_streamer, $senha_streamer){
        $conexao = ConectarBD();
        $inserir = "INSERT INTO streamer VALUES ('$nickname', '$nome_streamer', '$cpf', '$telefone_streamer', '$email_streamer', '$senha_streamer')";

        mysqli_query($conexao, $inserir);
    }

    # Fazer função para busca de streamers cadastrados (para cadastro de vídeo)

    function ApresentarStreamer(){
        $conexao = ConectarBD();
        $buscar = "SELECT * FROM streamer";
        $apresentar = mysqli_query($conexao, $buscar);

        return $apresentar;
    }

    #----------------------Categoria----------------------------
    function CadastrarCategoria($nome_categoria, $qtd_espectadores, $tag){
        $conexao = ConectarBD();
        $inserir = "INSERT INTO categoria VALUES ('$nome_categoria', '$qtd_espectadores', '$tag')";

        mysqli_query($conexao, $inserir);
    }

    function ApresentarCategoria(){
        $conexao = ConectarBD();
        $buscar = "SELECT * FROM categoria";
        $apresentar = mysqli_query($conexao, $buscar);

        return $apresentar;
    }

    #----------------------Vídeos----------------------------
    function CadastrarVideo($titulo, $nickname_streamer, $categoria, $duracao, $visualizacao){
        #ABA DE STREMERS E CATEGORIAS CADASTRADAS
        #COMO FAZER ESSA VERIFICAÇÃO???

        $conexao = ConectarBD();
        $inserir = "INSERT INTO video (titulo, nickname_streamer, categoria, duracao, visualizacao) VALUES ('$titulo', '$nickname_streamer', '$categoria', '$duracao', '$visualizacao')";

        mysqli_query($conexao, $inserir);
    }

    function ApresentarVideo(){
        $conexao = ConectarBD();
        $buscar = "SELECT * FROM video";
        $apresentar = mysqli_query($conexao, $buscar);

        return $apresentar;
    }
?>