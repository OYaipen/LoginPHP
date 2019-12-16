<?php
session_start();
if (isset($_SESSION["usuario"])) {


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pagina_Segura</title>
        <style>
            ul {
                list-style-type: none;
                width: 200px;
                background-color: #f1f1f1;
            }

            li a {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #000;
                color: white;
            }
        </style>
    </head>

    <body>
        <h2>Bienvenido <?php echo $_SESSION['usuario'] ?></h2>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Novedades</a></li>
            <li><a href="#">Contactos</a></li>
            <li><a href="#">Informacion</a></li>
            <li><a href="Salir.php">Cerrar Sesion</a></li>
        </ul>
    </body>

    </html>
<?php
                    } else {
                        header("location:Login.php");
                    }
?>