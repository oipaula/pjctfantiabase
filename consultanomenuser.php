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
    <title>Consultando usuário...</title>
</head>
<body>

    
</body>
</html>


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
    <title>Consultando usuário...</title>
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
    
        if($_POST["cxpesquisanome"] != ""){
            include_once "factory/conexao.php";
            $nome = $_POST["cxpesquisanome"];
            $consulta = "SELECT * FROM tbusuario WHERE nome LIKE '%$nome%'";
            $executar = mysqli_query($conn,$consulta);
            $resultado = mysqli_num_rows($executar);
            
            if($resultado != 0) {
                echo "<h1>Usuário existe! Deseja editar ou excluir? </h1><br>";
            } else {
                echo "<h2>Usuário não existe!</h2>";
            }
        }

        while ($linhauser = mysqli_fetch_array($executar)) {
    ?>

    <div id="cx1">
        <form action="alterarusuario.php" method="POST">
            <p>Código:</p> <input type="text" name="cxcod" value="<?php echo $linhauser['codigo'];?>" readonly><br></br>
            <p>Nome:</p> <input type="text" name="cxnomeuser" value="<?php echo $linhauser['nome'];?>"><br></br>
            <p>Senha:</p> <input type="password" name="cxsenhauser" value="<?php echo $linhauser['senha'];?>"><br>
            <br>

            <button type="submit">
                <img src="img/alterar.png" style="border:none;background:#fff" alt="" srcset="" width="50" height="50">
            </button>

            <a href="excluirusuario.php?id=<?php echo $linhauser['codigo']; ?>"><img src="img/lixeira.png" alt="" srcset="" width="50" height="50"></a>
        </form>
    </div>

    <br>

    

</section>

<br><br>

    <footer>
	<p>&copy; 2024 - Desenvolvido por Maria Paula</p>
	<p>Entre em contato pelo e-mail: paula.xavier@aluno.ifsp.edu.br</p>
    </footer>

<?php } ?>
</body>
</html>

<?php
    } else {
        echo "<script> window.location.href = 'login.php'; </script>";
    }
?>