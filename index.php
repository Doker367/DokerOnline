<?php
session_start();
include_once("./config/config.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("./php/head_html.php"); ?>
    <title>Página de inicio</title>
    <!-- icono -->
    <link rel="shortcut icon" href="./img/logo.jpg">
    <!-- normalize -->
    <link rel="preload" href="./css/normalize.css" as="style">
    <link rel="stylesheet" href="./css/normalize.css">
    <!-- estilos -->
    <link rel="preload" href="./css/styles.css" as="style">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preload" href="./css/estilo_generico.css" as="style">
    <link rel="stylesheet" href="./css/estilo_generico.css">
    
</head>
<!-- barra de navegación -->
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- responsividad del header, marca -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- marca -->
                
                <a class="navbar-brand" href="#">DOKER</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <!-- menú izquierdo-->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Lista de productos</a></li>
                </ul>
                
                <!-- menú derecho -->
                <?php if (!isset($_SESSION['sesion_personal'])):?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="./php/registro.php"><span class="glyphicon glyphicon-user"></span>Registrarse
                        </a>
                    </li>
                    <li>
                        <a href="./php/iniciar_sesion.php"><span class="glyphicon glyphicon-log-in">
                            </span> Ingresar</a>
                    </li>
                </ul>
                
                <?php else: ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">REEC ONLINE <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./php/perfil.php"><span class="glyphicon glyphicon-user"></span> Perfil de usuario</a></li>
                            <li><a href="./php/carrito.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito de compras</a></li>
                            <li><a href="./php/cerrar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
                <?php endif ?>
            </div>
        </div>
    </nav>
</header>


<body>

    <!-- carrusel -->
    <div class="container-fluid carrusel" style="padding: 0;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" date-slide-to="5"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="./img/carrusel/b.jpg" alt="setup1">
                    <div class="carousel-caption">
                        <h3>Monitores</h3>
                        <p>y accesorios</p>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/carrusel/a.jpg" alt="setup2">
                    <div class="carousel-caption">
                        <h3>Comodidad</h3>
                        <p>y confiabilidad</p>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/carrusel/c.jpg" alt="setup3">
                    <div class="carousel-caption">
                        <h3>Al mejor precio</h3>
                        <p>ofertas todos los dias</p>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/carrusel/d.jpg" alt="setup4">
                    <div class="carousel-caption">
                        <h3>Bienvenido</h3>
                        <p>a una tienda como tú</p>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/carrusel/e.jpg" alt="setup5">
                    <div class="carousel-caption">
                        <h3>Mejores productos</h3>
                        <p>Ahorra mas en REEC ONLINE</p>
                    </div>
                </div>
                <div class="item">
                    <img src ="./img/carrusel/f.jpg" alt="setup6">
                    <div class="carousel-caption">
                        <h3>Disfruta de los mejores descuentos</h3>
                        <p>LLevate lo que necesitas</p>
                    </div>

                 </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome 5 -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* Estilos para el botón de "Inicio" */
        .home-button {
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
            background-color: #fff;
            cursor: pointer;
            text-decoration: none;
            color: #007bff; /* Color azul de los enlaces de Bootstrap */
            margin-right: 5px;
            margin-top: 40px; /* Margen superior de 20px */
        }
        .home-button:hover {
            background-color: #f0f0f0;
            color: #0056b3; /* Color azul oscuro de los enlaces de Bootstrap */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="" method="GET" class="form-inline my-3 my-lg-0">
                <button class="home-button" type="submit"><i class="fas fa-home"></i> Inicio</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

       <!-- formulario de búsqueda -->
       <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome 5 -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* Estilos adicionales para conservar el diseño anterior */
        .search-form {
            margin-top: 10px;
            text-align: center;
        }
        .search-input {
            width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
            margin-right: 5px;
        }
        .search-button {
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
            background-color: #fff;
            cursor: pointer;
        }
        .search-button:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="#" method="GET" class="search-form">
                <input class="search-input" type="search" placeholder="Buscar producto..." aria-label="Buscar" name="q">
                <button class="search-button" type="submit"><i class="fas fa-search"></i> Buscar</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>


    <!-- panel del titulo -->
    <h3 class="container text-center" style="margin-bottom: .6em; margin-top: .5em;">Lista de articulos</h3>
    
  
    <?php
// Crear una conexión
$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

// verificar connection con la BD
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    // Código para determinar el producto más vendido
    $result_mas_vendido = mysqli_query($con, "SELECT * FROM producto ORDER BY cantidad_disponible ASC LIMIT 1;");
    $mas_vendido = mysqli_fetch_array($result_mas_vendido);
?>

<main class="principal">
    <!-- Producto más vendido recomendado -->
    <div class="card text-center" style="border-color: red;">
        <img class="card-img-top" src="./img/productos/<?= $mas_vendido['id_producto'] ?>.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Producto más vendido recomendado</h5>
            <hr class="solid">
            <p class="card-text"><?= $mas_vendido['nombre_producto'] ?></p>
            <hr class="solid">
            <p class="card-text">$<?= number_format(floatval($mas_vendido['precio_producto']), 2, '.', ',') ?></p>
        </div>
        <a href="./php/info_producto.php?id=<?= $mas_vendido['id_producto'] ?>" class="btn btn-sm comprar">Comprar</a>
    </div>

    <!-- Lista de productos -->
    <?php
        // Modificar la consulta para incluir la calificación
        if (isset($_GET['q'])) {
            $q = $_GET['q'];
            $result = mysqli_query($con, "SELECT *, AVG(calificacion) AS promedio_calificacion FROM producto WHERE 
                id_producto LIKE '%$q%' OR 
                nombre_producto LIKE '%$q%' OR 
                descripcion_producto LIKE '%$q%' OR 
                cantidad_disponible LIKE '%$q%' OR 
                precio_producto LIKE '%$q%' OR 
                fabricante LIKE '%$q%' OR 
                origen LIKE '%$q%' OR 
                categoria LIKE '%$q%' 
                GROUP BY id_producto;");
        } else {
            $result = mysqli_query($con, "SELECT *, AVG(calificacion) AS promedio_calificacion FROM producto GROUP BY id_producto;");
        }

        $vacios = 0;
        while ($row = mysqli_fetch_array($result)):
            if ($row['cantidad_disponible'] == 0) {
                $vacios++;
                continue;
            }
    ?>
    <div class="card text-center">
        <img class="card-img-top" src="./img/productos/<?= $row['id_producto'] ?>.png" alt="Card image cap">
        <div class="card-body">
            <hr class="solid">
            <div id="altura_caja">
                <p class="card-text"><?= $row['nombre_producto'] ?></p>
            </div>
            <hr class="solid">
            <p class="card-text">$<?= number_format(floatval($row['precio_producto']), 2, '.', ',') ?></p>
        </div>
        <!-- Formulario de calificación -->
        <form action="#" method="POST" class="form-inline">
            <input type="number" name="calificacion" min="1" max="10" step="1" placeholder="Calificar">
            <button type="submit" class="btn btn-sm">Calificar</button>
        </form>
        <?php if (isset($_SESSION['sesion_personal'])): ?>
            <a href="./php/info_producto.php?id=<?= $row['id_producto'] ?>" class="btn btn-sm comprar">Comprar</a>
        <?php else: ?>
            <a href="./php/iniciar_sesion.php" class="btn btn-sm comprar">Comprar</a>
        <?php endif ?>
    </div>
    <?php
        endwhile;
        $n_relleno = (((int)mysqli_num_rows($result)) - $vacios) % 5;
        if ($n_relleno != 0):
            for ($x = 0; $x < 5 - $n_relleno; $x++):
    ?>
    <div class="card" style="border: solid 1px transparent;"></div>
    <?php
            endfor;
        endif;
        // cerrar conexión
        mysqli_close($con);
    ?>
</main>

<?php
    }
?>


</html>


    <!-- footer -->
    <div class="footer">
        <a href=>
            COPYRIGHT © 2024<br>
            DISEÑADO POR: CDWD.......... Ayuda y Soporte (9612030290)
        </a>
    </div>

    
</body>


</html>

</html>