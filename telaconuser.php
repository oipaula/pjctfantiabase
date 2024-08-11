<?php
    SESSION_START();
    if (isset($_SESSION["usuario"])) {
        $usuario = $_SESSION ["usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleuser.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Consulta - Usuário</title>
    <style>
        #lista-completa {
            font-family: "Josefin Sans", sans-serif;
            color: #071108; /* Cor do texto do link */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        #lista-completa:hover {
            color: #9a1710; /* Cor do texto do link ao passar o mouse */
            text-decoration: underline; /* Adiciona sublinhado ao passar o mouse */
        }

        #lista-completa:active {
            color: #050b07; /* Cor do texto do link ao clicar */
        }

        #lista-completa:link {
            text-decoration: none;
        }

        /* Estilos para o menu dropdown */
        .usuario {
            color: whitesmoke;
        }

        #banner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #071108;
            padding: 15px;
        }

        #banner h1 {
            flex-grow: 1;
            text-align: center;
            color: white;
            margin: 0;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav > .usuario {
            color: whitesmoke;
        }

        nav > span {
            margin: 0 10px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            font-family: "Josefin Sans", sans-serif;
        }

        .dropbtn {
            background-color: #071108;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            font-family: "Josefin Sans", sans-serif;
            border-radius: 5px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            font-family: "Josefin Sans", sans-serif;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: "Josefin Sans", sans-serif;
            border-radius: 5px;
        }

        .dropdown-content a:hover {
            background-color: #032e25;
            color: whitesmoke;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #032e29;
        }
    </style>
</head>
<body>
    <header> 
    <section id="banner">
    <a href="index.php"><img src="img/icone.png" alt="Ícone" width="50" height="50"></a>
    <h1 id="cor-titulo" style="flex-grow: 1; text-align: center;">Fantiabase</h1>
    <nav>

        <div class="dropdown">
            <button class="dropbtn">
                <?php 
        echo "<span class='usuario'>$usuario</span>";
        ?>
        </button>
            <div class="dropdown-content">
                <a href='login.php'>Login</a>
                <a href='menu.php'>Menu</a>
                <a href='sobre.php'>Sobre</a>
                <a href='fimsessao.php'>Sair</a>
            </div>
        </div>
    </nav>
</section>
        </header>

        <br>

    <section class="forms-autentica">
        <form action="consultanomenuser.php" method="POST">
            <h1>Consulta - Usuário</h1> <br>
            Digite o nome do usuário: <br>
            <input type="text" name="cxpesquisanome"/>
            <input type="submit" value="Buscar"/>
            <br>
            <a id="lista-completa" href="listarusuario.php">Usuários</a>
        </form>
    </section>

    <footer>
	<p>&copy; 2024 - Desenvolvido por Maria Paula</p>
	<p>Entre em contato pelo e-mail: paula.xavier@aluno.ifsp.edu.br</p>
</footer>
</body>
</html>

<?php
    } else {
        echo "<script> window.location.href = 'login.php'; </script>";
    }
?>