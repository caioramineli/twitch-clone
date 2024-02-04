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
                <svg width="50" height="50" viewBox="0 0 24 28"><g fill-rule="evenodd"><path d="M19 6v6h-2V6h2zm-7 0h2v6h-2V6zM5 0 0 5v18h6v5l5-5h4l9-9V0H5zm17 13-4 4h-4l-4 4v-4H6V2h16v11z"></path><path fill="#FFF" d="m18 17 4-4V2H6v15h4v4l4-4h4zM12 6h2v6h-2V6zm7 0h-2v6h2V6z"></path></g></svg>
                <h2>Cadastrar Streamer</h2>
            </div>
            <label for="nickname"> Nickname</label>
            <input type="text" name="nickname">

            <label for="nome_streamer"> Nome</label> 
            <input type="text" name="nome_streamer">

            <label for="telefone_streamer"> Telefone </label>
            <input type="text" name="telefone_streamer">

            <label for="cpf"> CPF</label> 
            <input type="text" name="cpf">

            <label for="email_streamer"> Email</label> 
            <input type="text" name="email_streamer">

            <label for="senha_streamer"> Senha</label> 
            <input type="password" name="senha_streamer">

            <input type="submit" value="Cadastrar" id="Cadastrar">
        </form>
    </div>
</body>
</html>