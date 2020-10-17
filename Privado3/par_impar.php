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
    <title>PAR/IMPAR</title>
    <link href="../miestilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">
</head>

<body class="menu_body">
    <main class="menu_main">
        <header class="menu_header">
            <h1>Menu</h1>
            <nav>
                <li class="menu_li"><a href="../Privado1/tirada_dados.php">TIRADA</a></li>
                <li class="menu_li"><a href="../Privado2/sumar_7.php">SUMA 7</a></li>
                <li class="menu_li_2"><a href="par_impar.php">PAR/IMPAR</a></li>
                <li class="menu_li"><a href="../acerca_de.php">ACERCA DE</a></li>
            </nav>
        </header>
        <div class="contenido3_div">
            <form name="mi_formulario_2" action="" method="POST">
                Escoja su opci&oacute;n:
                <input checked type="radio" name="opcion" value="par"> PAR
                <input type="radio" name="opcion" value="impar"> IMPAR
                <input class="par_impar_input_submit" type="submit" name="comprobar" value="Comprobar">
            </form>
            <?php
            $resultado_suma = 0;
            function tirarDados_2()
            {
                global $resultado_suma;
                for ($i = 0; $i < 3; $i++) {
                    $numero = rand(1, 6);
                    switch ($numero) {
                        case 1:
                            $resultado_suma += 1;
                            echo '<img src="../imagenes/uno.jpg" alt="uno" width="130" height="130">';
                            break;
                        case 2:
                            $resultado_suma += 2;
                            echo '<img src="../imagenes/dos.jpg" alt="dos" width="130" height="130">';
                            break;
                        case 3:
                            $resultado_suma += 3;
                            echo '<img src="../imagenes/tres.jpg" alt="tres" width="130" height="130">';
                            break;
                        case 4:
                            $resultado_suma += 4;
                            echo '<img src="../imagenes/cuatro.jpg" alt="cuatro" width="130" height="130">';
                            break;
                        case 5:
                            $resultado_suma += 5;
                            echo '<img src="../imagenes/cinco.jpg" alt="cinco" width="130" height="130">';
                            break;
                        case 6:
                            $resultado_suma += 6;
                            echo '<img src="../imagenes/seis.jpg" alt="seis" width="130" height="130">';
                            break;
                    }
                }
            }
            if (isset($_REQUEST['comprobar'])) {
                tirarDados_2();
                $opcion = $_REQUEST['opcion'];
                if ($resultado_suma % 2 == 0) {
                    $opcion_auxiliar = "par";
                } else {
                    $opcion_auxiliar = "impar";
                }
                if ($opcion == $opcion_auxiliar) {
                    echo "<p>SÍ has acertado. La suma de los números es ", $opcion, "</p>";
                } else {
                    echo "<p>NO has acertado. La suma de los números es ", $opcion_auxiliar, "</p>";
                }
            }
            ?>
        </div>
    </main>
</body>

</html>