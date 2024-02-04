<?php

session_start();
require "funcoesBD.php";

#CADASTRO DE USUARIO
if(!empty($_POST['usuario']) && !empty($_POST['telefone']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    #Questionar $_POST???

    $usuario = $_POST['usuario'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    CadastrarUsuario($usuario, $telefone, $email, $senha);

    header("location: ../telas/cadastros.php"); #Adicionar caminho para tela referente
    die();
}

#CADASTRO DE STREAMER
else if(!empty($_POST['nickname']) && !empty($_POST['nome_streamer']) && !empty($_POST['cpf']) && !empty($_POST['telefone_streamer']) && !empty($_POST['email_streamer']) && !empty($_POST['senha_streamer'])){
    $nickname = $_POST['nickname'];
    $nome_streamer = $_POST['nome_streamer'];
    $cpf = $_POST['cpf'];
    $telefone_streamer = $_POST['telefone_streamer'];
    $email_streamer = $_POST['email_streamer'];
    $senha_streamer = $_POST['senha_streamer'];

    CadastrarStreamer($nickname, $nome_streamer, $cpf, $telefone_streamer, $email_streamer, $senha_streamer);

    header("location: ../telas/cadastros.php"); #Adicionar caminho para tela referente
    die();
}

#CADASTRO DE CATEGORIA
else if(!empty($_POST['categoria']) && !empty($_POST['qtd_espectador']) && !empty($_POST['tag'])){
    
    $nome_categoria = $_POST['categoria'];
    $qtd_espectadores = $_POST['qtd_espectador'];
    $tags = $_POST['tag'];

    CadastrarCategoria($nome_categoria, $qtd_espectadores, $tags);

    header("location: ../telas/cadastros.php"); #Adicionar caminho para tela referente
    die();
}

#CADASTRO DE VÍDEO
else if(!empty($_POST['titulo']) && !empty($_POST['nickname_streamer']) && !empty($_POST['categoria']) && !empty($_POST['duracao']) && !empty($_POST['visualizacoes'])){
    $titulo = $_POST['titulo'];
    $nickname_streamer = $_POST['nickname_streamer'];
    $categoria = $_POST['categoria'];
    $duracao = $_POST['duracao'];
    $visualizacao = $_POST['visualizacoes'];

    CadastrarVideo($titulo, $nickname_streamer, $categoria, $duracao, $visualizacao);

    header("location: ../telas/cadastros.php"); #Adicionar caminho para tela referente
    die();
}

?>