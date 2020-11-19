<?php
session_start();
if ($_SESSION['acceso'] == false) {
    header("Location:index.php");
}
if (isset($_SESSION['numero_intentos']) {
    $_SESSION['numero_intentos'] = 1;
}
?>
<html>

<head>
    <title>ACERCA DE</title>
    <link href="miestilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">
</head>

<body class="menu_body">
    <main class="menu_main">
        <header class="menu_header">
            <h1>Menu</h1>
            <nav>
                <li class="menu_li"><a href="Privado1/tirada_dados.php">TIRADA</a></li>
                <li class="menu_li"><a href="Privado2/sumar_7.php">SUMA 7</a></li>
                <li class="menu_li"><a href="Privado3/par_impar.php">PAR/IMPAR</a></li>
                <li class="menu_li_3"><a href="acerca_de.php">ACERCA DE</a></li>
            </nav>
        </header>
        <div class="contenido4_div">
            <p>DESARROLLADOR:<br>LUIS VALLES PASTOR</p>
            <p>AÑO:<br>2020</p>
            <p>VERSI&Oacute;N:<br>1.0</p>
        </div>
    </main>
</body>

</html>