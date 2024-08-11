<?php
    SESSION_START();
    if (isset($_SESSION["usuario"])) {
        $usuario = $_SESSION ["usuario"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Página Inicial</title>
    <style>
        .usuario {
            color: whitesmoke;
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

    <section id="cxindex">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis, nunc ac dapibus pellentesque, erat libero mattis neque, auctor viverra ipsum tortor sit amet nulla. Vivamus blandit eu augue ac ultrices. Maecenas luctus magna sem, viverra interdum nunc pretium in. Morbi malesuada vel lacus et ullamcorper. Phasellus lacinia eu enim non dignissim. Sed felis lacus, euismod a ex vel, pulvinar efficitur magna. Duis cursus enim at quam hendrerit, ut gravida arcu finibus. Fusce sodales arcu quis neque sagittis, blandit cursus lorem luctus. Integer dolor nibh, sagittis eget blandit sed, vehicula sit amet odio. Ut maximus in ante nec pharetra. Aenean et condimentum lorem, vel auctor quam. Cras tristique orci vel imperdiet blandit. Aliquam egestas, dolor non faucibus congue, est justo commodo ligula, nec commodo nulla leo a dolor. Sed neque lectus, fermentum at enim sit amet, aliquam congue urna. Nulla venenatis leo ac odio gravida maximus eget eget dolor. Etiam ut lacus nec felis vulputate sollicitudin nec sit amet dolor.</p>
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