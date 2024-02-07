<!DOCTYPE html>
<html lang="pt-br">
    <!--Projecto by ClevCodes link do canal https:///www.youtube.com/@clevcodes-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Sistema de Login</title>
</head>
<body>
    <section class="conteudo">
        <header class="cabecalho">
            <h1>Sistema de Cadastro</h1>
        </header>
        <div class="mensagens-erros"></div>

        <form action="#" method="post" autocomplete="off">
            
            <div class="nomes-detalhes">
                <div class="linhas">
                    <label>Nome</label>
                    <input type="text" name="name" placeholder=" Digite um nome">
                </div>
    
                <div class="linhas">
                    <label>Apelido</label>
                    <input type="text" name="apelido" placeholder=" Digite um apelido">
                </div>
            </div>

            <div class="linhas">
                <label>E-mail</label>
                <input type="text" name="email" placeholder=" Digite um e-mail">
            </div>

            <div class="linhas">
                <i class="fa fa-eye"></i>
                <label>Senha</label>
                <input type="password" name="senha" id="senha" placeholder=" Digite uma senha">
            </div>

            <div class="linhas">
               <button type="submit">Cadastrar</button>
            </div>

        </form>
        <div class="link">Ainda nao possui uma <a href="login.php">conta?</a></div>
    </section>

    <script src="scripts/verSenha.js"></script>
    <script src="scripts/cadastro.js"></script>
</body>
</html>