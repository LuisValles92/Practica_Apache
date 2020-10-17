<?php
session_start();
// session_destroy();
if (isset($_SESSION['acceso'])) {
    if ($_SESSION['acceso'] == true) {
        $_SESSION['acceso'] = false;
        echo "<script>setTimeout(() => {
        alert('Sesión cerrada.');
      }, 100);</script>";
    }
}
if (isset($_SESSION['numero_intentos'])) {
    $_SESSION['numero_intentos'] = 1;
}
?>
<html>

<head>
    <title>LOG IN</title>
    <link href="miestilo.css" rel="stylesheet" type="text/css">
</head>

<body class="log_in_body">
    <main class="log_in_main">
        <form name="mi_formulario" action="" method="POST">
            <header class="log_in_header">LOG IN</header>
            <li class="log_in_li">
                <input class="log_in_input" name="email" type="text" placeholder="Email">
            </li>
            <li class="log_in_li">
                <input class="log_in_input" name="pass" type="password" placeholder="Password">
            </li>
            <li class="log_in_li">
                <input class="log_in_input_submit" name="login" type="submit" value="Log in">
            </li>
        </form>
        <?php
        if (isset($_REQUEST['login'])) {
            $email = htmlspecialchars($_REQUEST['email']);
            $pass = htmlspecialchars($_REQUEST['pass']);
            if ($email == "juan@gmail.com" && $pass == "juan") {
                $_SESSION['acceso'] = true;
                header("Location:Privado1/tirada_dados.php");
            } else {
                $_SESSION['acceso'] = false;
                echo "<script>setTimeout(() => {
                    alert('Error: Credenciales inválidas.');
                  }, 100);</script>";
            }
        }
        ?>
    </main>
</body>

</html>