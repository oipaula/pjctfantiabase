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
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Usuário excluído</title>
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

    <section id="conteudo">
<?php
    include_once "factory/conexao.php";

    $cod = $_GET["id"];
    $excluir = "delete from tbusuario where codigo = '$cod'";
    $executar = mysqli_query($conn,$excluir);
    
    if ($executar) {
        echo "<h1>Dados do usuário excluído com sucesso!</h1>";
    } else {
        echo "<h1>Usuário não excluído!</h1>";
    }
    
?>
    </section>

<br><br>

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