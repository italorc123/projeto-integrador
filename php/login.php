<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otica Resiliência/Login</title>
    <link rel="icon" type="image/x-icon" href="../Imagens/PetZ.ico.jpg">
    <link rel="stylesheet" href="../CSS/projeto.css">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #000000;
            overflow: hidden;
            right: 0;
            top: 0;
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
    <div>
        <ul>
            <li><a href="menu.php">Inicio</a></li>
            <li><a href="login.php" class="ativa">Entrar</a></li>
            <li><a href="Cadastro.php">Cadastro</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="Produtos.php">Produtos</a></li>
        </ul>

    </div>


    <div class="centro" >
        <form action="">
            <fieldset>
                <legend>login</legend>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" value="" placeholder="Email/Usuário">
                <br>
                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha" value="" placeholder="Senha" autofocus><br>
                <br>
                <input type="submit" id="Entrar" value="Entrar">
                <input type="reset" id="Redefinir" value="Redefinir">
            </fieldset>
        </form>


    </div>
<br>

</body>

</html>