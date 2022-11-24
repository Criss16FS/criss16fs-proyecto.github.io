<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psykhé | Nosotros</title>
    <link rel="icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img/logo.png" alt="logotipo" height="200" width="250">
        </a>
    </header>

    <section class="contenedor-nav">
        <nav class="navegacion">
            <a class="navegacion__enlace " href="index.php">Inicio</a>
            <a class="navegacion__enlace navegacion__enlace--activo" href="nosotros.php">Nosotros</a>
            <a class="navegacion__enlace" href="blog.php">Blog</a>
            <a class="navegacion__enlace" href="sesion.php">Iniciar Sesion</a>
        </nav>
    </section>

    <main class="grid-nosotros">

        <section class="nosotros">

            <div class="nosotros__texto nosotros__sesion1">
                <h1 class="nosotros__texto--titulo">sobre nosotros</h1>
                <p class="nosotros__texto--parrafo">Somos un pequeño grupo de estudiantes que tenemos la intencion de
                    crear una web para ayudar a los compañeros de nuestro campus universitario que presenten episodios
                    de ansiedad y depresion.</p>

                <p class="nosotros__texto--parrafo">Esta idea nace de una asignacion propuesta por un profesor, donde se
                    nos pide investigar alguna problematica de nuestra campus y de esa forma intentar darle una
                    solucion implementando lo aprendido en su clase, en es caso es la asignatura de programacion web.
                </p>
            </div>

            <div class="nosotros__imagen nosotros__sesion2">
                <img src="img/estudiantes.png" alt="imagen estudiabtes">
            </div>

            <div class="nosotros__sesion3">
                <p class="nosotros__texto--parrafo">
                    Con respecto a las herramientas y a los metodos usados en este proyecto, lo que usaremos sera la
                    base de la programacion web, teniendo en ceunta esto, nos referimos al HTML, CSS, Java Script, entre
                    otros.</p>
            </div>
        </section>

        <section>
            <h2 class="titulo">equipo</h2>
            <div class="equipo">
                <div>
                    <img class="equipo__imagen" src="img/Criss.png" alt="foto Cristian">
                    <h2 class="nombre">Cristian Avila<br>
                        <span>Estudiante en Ingenieria de Sistemas</span>
                    </h2>
                </div>

                <div>
                    <img class="equipo__imagen" src="img/usuario.png" alt="foto Walter">
                    <h2 class="nombre">Walter Prado <br>
                        <span>Estudiante en Ingenieria de Sistemas</span>
                    </h2>
                </div>


                <div>
                    <img class="equipo__imagen" src="img/usuario.png" alt="foto Erick">
                    <h2 class="nombre">Erick Rosado<br>
                        <span>Estudiante en Ingenieria de Sistemas</span>
                    </h2>
                </div>


                <div>
                    <img class="equipo__imagen" src="img/usuario.png" alt="foto Louis">
                    <h2 class="nombre">Louis Fajardo <br>
                        <span>Estudiante en Ingenieria de Sistemas</span>
                    </h2>

                </div>
            </div>
        </section>
    </main>

    <section class="mision-vision">
        <div class="mision">
            <div class="mision__sesion1">
                <h2 class="titulo">Mision</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio nobis earum tempore! Ipsam
                    consequuntur
                    quae nulla, excepturi voluptates fugiat iusto dicta dolorem quas impedit rerum laudantium ex, vitae
                    eveniet consequatur?</p>
            </div>

        </div>
        <div class="vision">
            <div class="vision__sesion1">
                <h2 class="titulo">Vision</h2>
                <p class="nosotros__texto--parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                    mollitia excepturi odit non praesentium
                    placeat fugit cumque reprehenderit beatae! Nesciunt ut perferendis ducimus iure voluptatem, vitae
                    laudantium inventore temporibus possimus?</p>
            </div>


        </div>
    </section>

    <footer class="footer">
        <p class="nosotros__texto--parrafo">Todos los derechos reservados © 2022 - <a
                href="https://heroic-begonia-a5c98b.netlify.app/" target="_blank" rel="noreferrer noopener">Cristian
                Avila</a></p>

    </footer>