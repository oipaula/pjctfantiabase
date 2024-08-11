
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
    <title>Validação</title>

</head>
<body>

<section id="banner">
    <a href="index.php"><img src="img/icone.png" alt="Ícone" width="50" height="50"></a>
    <h1 id="cor-titulo" style="flex-grow: 1; text-align: center;">Fantiabase</h1>
    <nav>

        <div class="dropdown">
            <button class="dropbtn">
                <?php 
        echo "<span>Opções</span>";
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

    <?php
        SESSION_START();
        if(isset($_SESSION["usuario"])) {
            $usuario = $_SESSION["usuario"];
        } else {
            $usuario = 'Visitante'; // ou redirecionar para login.php, caso seja necessário
        }


        $login = isset($_POST["cxlogin"])?strtolower($_POST["cxlogin"]):"";
        $senha = isset($_POST["cxsenha"])?md5($_POST["cxsenha"]):"";
        include_once "factory/conexao.php";

    // Verifica se o usuário e a senha existem na tabela
    $log = mysqli_query($conn, "SELECT * FROM tbusuario WHERE nome = '$login' AND senha = '$senha'") or die(mysqli_error($conn));

    $linha = mysqli_fetch_array($log);

    // Verifica se a consulta retornou um resultado
    if ($linha) {
        // Login e senha estão corretos
        $_SESSION["usuario"] = $login;
        echo "<script>
                window.location.href = 'menu.php';
            </script>";
    } else {
        // Login ou senha estão incorretos
        echo "<script>
                alert('Acesso negado! Usuário ou senha incorretos.');
                window.location.href = 'login.php';
            </script>";
    }
?>
    
    <footer>
        <p>&copy; 2024 - Desenvolvido por Maria Paula</p>
        <p>Entre em contato pelo e-mail: paula.xavier@aluno.ifsp.edu.br</p>
    </footer>

</body>
</html>