<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$titulo = "Asociación de Desarrollo Integral Nuestro Amo";


require_once("config/database.php");


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    
    </div>

    <!-- HEADER -->
   <header>

    <nav class="navbar">


        <div class="logo">

            <img src="c:\Users\Usuario\OneDrive\Escritorio\ADNA-Web nueva\Img\logo.png" alt="Logo ADNA">

        </div>



        <ul class="menu">


            <li>
                <a href="#">
                    Inicio
                </a>
            </li>


            <li>
                <a href="#nosotros">
                    Nosotros
                </a>
            </li>


            <li>
                <a href="#servicios">
                    Servicios
                </a>
            </li>


            <li>
                <a href="#actividades">
                    Actividades
                </a>
            </li>


            <li>
                <a href="#contacto">
                    Contacto
                </a>
            </li>


            <li>

                <a href="views/login.php" class="btn-login">

                    Iniciar Sesión

                </a>

            </li>



        </ul>


    </nav>


</header>

    <!-- HERO -->
   <section class="hero">


    <div class="hero-overlay">


        <section class="hero">


    <div class="hero-content">


        <h1>
            Asociación de Desarrollo Integral Nuestro Amo
        </h1>


        <h2>
            Sistema de Gestión Comunitaria ADNA
        </h2>


        <p>
            Una plataforma digital para fortalecer la organización,
            administración y comunicación de nuestra comunidad.
        </p>


        <a href="#nosotros" class="btn-more">
            Conocer más
        </a>


    </div>


</section>


    </section>

    <!-- NOSOTROS -->
    <section id="nosotros" class="nosotros">


    <div class="nosotros-imagen">

        <img src="img/adna.jpg" alt="Asociación de Desarrollo Integral Nuestro Amo">

    </div>



    <div class="nosotros-texto">


        <h2>
            ¿Quiénes Somos?
        </h2>


        <p>
            La Asociación de Desarrollo Integral Nuestro Amo (ADNA) fue fundada
            en el año 1985 con el propósito de impulsar el bienestar, la organización
            y el desarrollo integral de nuestra comunidad.
        </p>


        <p>
            Desde sus inicios, gracias al compromiso de sus líderes comunales
            y la participación activa de los vecinos, la Asociación ha desarrollado
            proyectos sociales, deportivos, recreativos y de infraestructura
            que han contribuido al crecimiento y fortalecimiento de la comunidad.
        </p>


        <p>
            Actualmente, ADNA continúa trabajando con compromiso y responsabilidad
            para promover una comunidad más unida, participativa y con mayores
            oportunidades para las presentes y futuras generaciones.
        </p>


        <a href="#servicios" class="btn-more">
            Conocer nuestros servicios
        </a>


    </div>


</section>

    </section>

    <!-- SERVICIOS -->
    <section id="servicios" class="servicios">

    <h2>Gestión Comunitaria</h2>

    <p class="descripcion-servicios">
        El Sistema ADNA permite administrar de manera organizada
        los servicios y recursos comunitarios, facilitando la gestión
        interna de la asociación y la atención a los vecinos.
    </p>


    <div class="cards">


        <div class="card">

            <h3>Gestión de Reservas</h3>

            <p>
                Administración de solicitudes para el uso del salón comunal,
                controlando fechas, disponibilidad y aprobación de espacios.
            </p>

        </div>



        <div class="card">

            <h3>Actividades Comunitarias</h3>

            <p>
                Organización y seguimiento de actividades sociales,
                culturales y proyectos dirigidos al bienestar de la comunidad.
            </p>

        </div>




        <div class="card">

            <h3>Comunicación Institucional</h3>

            <p>
                Publicación de noticias, avisos y comunicados importantes
                para mantener informados a los habitantes de la comunidad.
            </p>

        </div>




        <div class="card">

            <h3>Administración de Vecinos</h3>

            <p>
                Registro y gestión de información de los miembros de la comunidad
                mediante un sistema seguro y organizado.
            </p>

        </div>


    </div>


</section>
        </div>

    </section>

    <!-- ACTIVIDADES -->
    <section id="actividades" class="contenedor">

        <h2>Próximas Actividades</h2>

        <table>

            <thead>

                <tr>
                    <th>Actividad</th>
                    <th>Fecha</th>
                    <th>Lugar</th>
                </tr>

            </thead>

            <tbody>

                <tr>
                    <td>Asamblea General</td>
                    <td>15 de Julio</td>
                    <td>Salón Comunal</td>
                </tr>

                <tr>
                    <td>Campaña de Limpieza</td>
                    <td>22 de Julio</td>
                    <td>Parque Central</td>
                </tr>

                <tr>
                    <td>Feria Comunitaria</td>
                    <td>05 de Agosto</td>
                    <td>Cancha Multiuso</td>
                </tr>

            </tbody>

        </table>

    </section>

    <!-- CONTACTO -->
    <section id="contacto" class="contacto">

    <h2>Contáctenos</h2>

    <p>Email: ADNA1954@adna.cr</p>

    <p>Teléfono: 7967-3457</p>

    <p>Guácima, Alajuela, Costa Rica.</p>

</section>

    <!-- FOOTER -->
    <footer>

        <p>
            © <?php echo date("Y"); ?>
            Asociación de Desarrollo Integral Nuestro Amo.
            Todos los derechos reservados.
        </p>

    </footer>

</body>

</html>