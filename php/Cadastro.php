<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otica Resiliência/Cadastro</title>
    <link rel="icon" type="image/x-icon" href="../Imagens/.jpg">
    <link rel="stylesheet" href="../CSS/projeto.css">
    
    <style>
 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #000000;
    overflow: hidden;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #777772;
}

    </style>
</head>

<body>
    <ul>
        <li><a href="menu.php">Inicio</a></li>
        <li><a href="login.php">Entrar</a></li>
        <li><a href="Cadastro.php" class="ativa">Cadastro</a></li>
        <li><a href="sobre.php">Sobre</a></li> 
        <li><a href="Produtos.php">Produtos</a></li>
    </ul>
   
        
        <div class="centro">
            <h2 id="cadastro">Cadastro</h2>
         <form action="#" autocomplete="on" target="_blank" method="post">
            <fieldset>
                <legend>Dados pessoais</legend>
                <label for="nome">Nome: </label><br>
                <input type="text" id="nome" name="nome" value="" placeholder="digite seu nome" required>
                <br>
                <label for="nome">Sobrenome: </label><br>
                <input type="text" id="sobrenome" name="sobrenome" value="" placeholder="digite seu sobrenome" required>
                <br>
                <label for="email">Email</label><br>  
                <input type="email" id="email" name="email" value="" placeholder="digite seu email">
                <br>
                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha" value="" placeholder="digite sua senha" autofocus><br>
                <label for="confirmar-senha">Confirmar senha:</label><br>
                <input type="password" id="confirmar-senha" name="confirmar-senha" value="" placeholder="confirme sua senha"><br>
                <label for="aniversario">Digite sua data de Nascimento:</label><br>
                <input type="date" id="aniversario" name="aniversario" min="1900-02-10"><br>
                <label for="telefone">Tell:</label>
                <input type="telefone" id="numero" name="numero" value="" placeholder="(xx) 9 xxxx-xxxx" pattern="\([0-9]{2}\) 9 [0-9]{4}-[0-9]{4}"><br>
                <br>
                <input type="submit" id="Cadastrar" value="Cadastrar">
                <input type="reset" id="Redefinir" value="Redefinir">
              </fieldset>
              </form>
        </div>
        
</body>
</html>