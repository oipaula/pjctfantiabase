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
    <title>Consultando amigo...</title>
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
    
    if($_POST["cxpesquisamigo"] != ""){
        include_once "factory/conexao.php";
        $amigo = $_POST["cxpesquisamigo"];
        $consulta = "select * from tbamigos where amigo LIKE '%$amigo%'";
        $executar = mysqli_query($conn, $consulta);
        $resultado = mysqli_num_rows($executar);
        
        if($resultado != 0) {
            echo "<h2> Amigo existe! Deseja editar ou excluir? </h2><br>";
        } else {
            echo "<h2> Amigo não existe! </h2><br>";}
    } else {
        echo "Por favor, faça amigos para pesquisar.";
    }

        while ($linha = mysqli_fetch_array($executar)) {
    ?> 

    <div id="cx1">
        <form action="alteraramigo.php" method="POST">
            <p>Código:</p> <input type="text" name="cxcod" value="<?php echo $linha['codigo'];?>" readonly>
            <p>Nome:</p> <input type="text" name="cxnome" value="<?php echo $linha['amigo'];?>">
            <p>E-mail:</p> <input type="text" name="cxemail" value="<?php echo $linha['email'];?>">
            <p>Telefone:</p> <input type="text" name="cxtel" value="<?php echo $linha['telefone'];?>">
            <p>Data de nascimento:</p> <input type="text" name="cxnasc" value="<?php echo $linha['datanasc'];?>"><br>

            <button type="submit">
                <img src="img/alterar.png" style="border:none;background:#fff" alt="" srcset="" width="50" height="50">
            </button>

            <a href="excluiramigos.php?id=<?php echo $linha['codigo']; ?>"><img src="img/lixeira.png" alt="" srcset="" width="50" height="50"></a>
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
