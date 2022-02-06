<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WAR OF ORCS</title>
        <link rel="icon" type="image/x-icon" href="https://i.pinimg.com/originals/17/99/30/179930d4467950b11b8f5dc0b36d6f72.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php
        include "equipamiento.php";
        ?>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">WAR OF THE ORCS</span>
                <span class="site-heading-lower">¡Bienvenid@s a la aplicación de personajes y equipamiento!</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.html">Inicio</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="personajes.php">Personajes</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="armas.php">Armas</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="preguntas.html">Preguntas Frecuentes</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="politicas.html">Politicas de privacidad</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contacto.html">Contacto</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.html" >Cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
                    <?php
                    foreach($equipamientos as $equipamiento){
                        $antiqueness = $equipamiento->antiqueness();
						
                        echo "<section class='page-section clearfix'>";
                        echo "<div class='container'>";
                        echo "<div class='intro'>";
                        echo "<img class='intro-img img-fluid mb-3 mb-lg-0 rounded' src=$equipamiento->image />";
                        echo "<div class='intro-text left-0 text-center bg-faded p-5 rounded'>";
                        echo "<h2 class='section-heading mb-4'>";
                        echo "<span class='section-heading-lower'> $equipamiento->name</span>";
                        echo "<img src=$equipamiento->icon width=8% border= solid black >";
						echo "<span class='section-heading-upper'>Tipo: $equipamiento->type</span>";
                        echo "<span class='section-heading-upper'>Antigüedad: $antiqueness</span>";
                        echo "<span class='section-heading-upper'>Longitud: $equipamiento->length cm</span>";
						echo "<span class='section-heading-upper'>Anchura: $equipamiento->width cm</span>";
                        echo "<span class='section-heading-upper'>Peso: $equipamiento->weight g</span>";
                        echo "<span class='section-heading-upper'>Descripción: $equipamiento->description</span>";
                        if ($equipamiento->type == "Espada")
						{
                            echo "<span class='section-heading-upper'>Filo: $equipamiento->edge</span>";
                            echo "<span class='section-heading-upper'>Curvatura: $equipamiento->curvature</span>";
						}
						else if ($equipamiento->type == "Arco")
						{
							echo "<span class='section-heading-upper'>Nivel de fuerza requerido: $equipamiento->strength_level</span>";
                            echo "<span class='section-heading-upper'>Longitud de las flechas: $equipamiento->arrow_length</span>";
						}
						else if ($equipamiento->type == "Báculo")
						{
							if ($equipamiento->gemstone == true)
							{
								$gemstone = "Sí";
							}
							else
							{
								$gemstone = "No";
							}
							echo "<span class='section-heading-upper'>Elemento: $equipamiento->element</span>";
                            echo "<span class='section-heading-upper'>Gema engastada: $gemstone</span>";
						}
						else if ($equipamiento->type == "Armadura")
						{
							echo "<span class='section-heading-upper'>Tipo: $equipamiento->Wtype</span>";
                            echo "<span class='section-heading-upper'>Modelo para: $equipamiento->gender</span>";
						}
                        echo "</h2>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo  "</section><br>";

                        
                    }
                    ?>
                
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Nuestra responsabilidad</span>
                                    <span class="section-heading-lower">Esta contigo</span>
                                </h2>
                                <p class="mb-0">Lo más importante para nosotros es que te sientas representado y cualificado con algunos de los personajes que te ofrcemos. Si no estas de acuerdo con alguno de ellos puedes contactarnos en nuestro apartado de contacto. No dudes en hablarnos.</p>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
        <div class="container">
                <a href="https://www.facebook.com/"><img src="https://cdn.icon-icons.com/icons2/2429/PNG/512/facebook_logo_icon_147291.png" width=5%></a> 
                <a href="https://www.youtube.com/"><img src="https://cdn-icons-png.flaticon.com/512/174/174883.png" width=5%></a>
                <a href="https://www.instagram.com/?hl=es"><img src="https://i.pinimg.com/originals/3b/21/c7/3b21c7efd2ba9c119fb8d361acacc31d.png" width=5%></a>
                <a href="https://www.linkedin.com/home/?originalSubdomain=es"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" width=5%></a>
                <a href="https://twitter.com/home?lang=es"><img src="https://zafra.es/wp-content/uploads/2016/11/twitter-icon-65.png" width=5%></a>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
