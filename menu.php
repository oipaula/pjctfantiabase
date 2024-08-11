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
    <title>Menu!</title>
    <link rel="stylesheet" href="css/stylemenu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <style>
        a {
            font-family: "Josefin Sans", sans-serif;
            color: rgb(70, 70, 70); /* Cor do texto do link */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #9a1710; /* Cor do texto do link ao passar o mouse */
            text-decoration: underline; /* Adiciona sublinhado ao passar o mouse */
        }

        a:active {
            color: #050b07; /* Cor do texto do link ao clicar */
        }

        a:link {
            text-decoration: none;
        }

        nav img {
            display: block;
            margin: 0 auto; /* Centraliza a imagem horizontalmente */
        }

        p {
    color: gray;
    }
    </style>
</head>
<body>
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


    <section id="cxprincipal">

        <nav id="cxamigo">
            <a href='telacadamigos.php'>
                <img src="img/adicionar-amigo.png" width="80" height="80"alt="">
                <h3>Cadastro de Amigos</h3>
            </a>
        </nav>

        <nav id="cxcomercio">
            <a href='telacadcomercial.php'>
                <img src="img/cadastro-comercio.png" width="80" height="80"alt="">
                <h3>Cadastro de Comércio</h3>
            </a>
        </nav>

        <nav id="cxusuario">
            <a href='telacaduser.php'>
                <img src="img/adicionar-usuario.png" width="80" height="80"alt="">
                <h3>Cadastro de Usuário</h3>
            </a>
        </nav>

        <nav id="cxconsultaamigo">
            <a href='telaconamigo.php'>
            <img src="img/consulta-amigos.png" width="80" height="80"alt="">
            <h3>Consulta de Amigos</h3>
            </a>
        </nav>

        <nav id="cxconsultacomercio">
            <a href='telaconcomercio.php'>
                <img src="img/consulta-comercio.png" width="80" height="80"alt="">
                <h3>Consulta de Comércio</h3>
            </a>
        </nav>

        <nav id="cxconsultauser">
            <a href='telaconuser.php'>
                <img src="img/consulta-usuario.png" width="80" height="80"alt="">
                <h3>Consulta de Usuário</h3>
            </a>
        </nav>

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