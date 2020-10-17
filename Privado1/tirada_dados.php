<?php
session_start();
if ($_SESSION['acceso'] == false) {
    header("Location:../index.php");
}
if (isset($_SESSION['numero_intentos'])) {
    $_SESSION['numero_intentos'] = 1;
}
?>
<html>

<head>
    <title>TIRADA</title>
    <link href="../miestilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">
</head>

<body class="menu_body">
    <main class="menu_main">
        <header class="menu_header">
            <h1>Menu</h1>
            <nav>
                <li class="menu_li_0"><a href="tirada_dados.php">TIRADA</a></li>
                <li class="menu_li"><a href="../Privado2/sumar_7.php">SUMA 7</a></li>
                <li class="menu_li"><a href="../Privado3/par_impar.php">PAR/IMPAR</a></li>
                <li class="menu_li"><a href="../acerca_de.php">ACERCA DE</a></li>
            </nav>
        </header>
        <div class="contenido_div">
            <?php
            function tirarDados()
            {
                for ($i = 0; $i < 5; $i++) {
                    $numero = rand(1, 6);
                    switch ($numero) {
                        case 1:
                            echo '<img src="../imagenes/uno.jpg" alt="uno" width="130" height="130">';
                            break;
                        case 2:
                            echo '<img src="../imagenes/dos.jpg" alt="dos" width="130" height="130">';
                            break;
                        case 3:
                            echo '<img src="../imagenes/tres.jpg" alt="tres" width="130" height="130">';
                            break;
                        case 4:
                            echo '<img src="../imagenes/cuatro.jpg" alt="cuatro" width="130" height="130">';
                            break;
                        case 5:
                            echo '<img src="../imagenes/cinco.jpg" alt="cinco" width="130" height="130">';
                            break;
                        case 6:
                            echo '<img src="../imagenes/seis.jpg" alt="seis" width="130" height="130">';
                            break;
                    }
                }
            }
            tirarDados();
            ?>
        </div>
    </main>
</body>

</html>