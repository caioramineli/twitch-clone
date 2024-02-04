<?php
require "../processamento/funcoesBD.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style-todos-os-cadastros.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <title>Cadastro Twitch</title>
</head>

<body>
    <div class="container-formulario">
        <form method="post" action="../processamento/processamento.php">
            <div class="logo-entrar">
                <svg width="50" height="50" viewBox="0 0 24 28">
                    <g fill-rule="evenodd">
                        <path d="M19 6v6h-2V6h2zm-7 0h2v6h-2V6zM5 0 0 5v18h6v5l5-5h4l9-9V0H5zm17 13-4 4h-4l-4 4v-4H6V2h16v11z"></path>
                        <path fill="#FFF" d="m18 17 4-4V2H6v15h4v4l4-4h4zM12 6h2v6h-2V6zm7 0h-2v6h2V6z"></path>
                    </g>
                </svg>
                <h2>Cadastrar Vídeos</h2>
            </div>
            <label for="titulo"> Título</label>
            <input type="text" name="titulo">

            <label for="nickname_streamer"> Nickname do Streamer</label>
            <!-- <input type="text" name="nickname_streamer"> -->
            <select name="nickname_streamer">
                <option value="">Selecione o streamer</option>
                <?php
                $allStreamer = ApresentarStreamer();
                if ($allStreamer != null) {
                    while ($mostrar = mysqli_fetch_assoc($allStreamer)) {
                        echo "<option value='" . $mostrar['nickname'] . "'name='nickname_streamer'>" . $mostrar['nickname'] . "</option>";
                    }
                }
                ?>
            </select>

            <label for="categoria"> Categoria</label>

            <!-- <input type="text" name="categoria"> -->
            <select name="categoria">
                <option value="">Selecione a categoria</option>
                <?php
                $allCategoria = ApresentarCategoria();
                if ($allCategoria != null) {
                    while ($mostrar = mysqli_fetch_assoc($allCategoria)) {
                        echo "<option value='" . $mostrar['nome_categoria'] . "'name='categoria'>" . $mostrar['nome_categoria'] . "</option>";
                    }
                }
                ?>
            </select>
            <label for="duracao"> Duração</label>
            <input type="text" name="duracao">

            <label for="visualizacoes"> Visualizações</label>
            <input type="text" name="visualizacoes">

            <input type="submit" value="Cadastrar" id="Cadastrar">
        </form>
    </div>
</body>

</html>