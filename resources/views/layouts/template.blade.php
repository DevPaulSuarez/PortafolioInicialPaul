<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!-- <meta name="google" content="notranslate" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Pagina creada por pess" />
        <meta name="author" content="PESSDEV" />
        <title>Portafolio_PESS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Paul E. Suarez</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">PROYECTOS</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#skills">HABILIDADES</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">SOBRE MI</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">CONTACTEME</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#experiencia">EXPERIENCIA</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center" style="padding-top: 115px;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Columna de la imagen -->
                    <div class="col-md-6 text-center">
                        <img class="masthead-avatar mb-5 img-fluid" src="assets/img/avataaars.svg" alt="Avatar" />
                    </div>
                    <!-- Columna del texto -->
                    <div class="col-md-6 text-md-start text-center">
                        <h2 class="masthead-heading text-uppercase mb-3">¡Hola! Soy Paul Suarez,</h2>
                        <h3 class="text-justify">un desarrollador fullstack apasionado por la tecnología y la creación de soluciones efectivas.</h3>
                        <!-- Icon Divider -->
                        <div class="divider-custom divider-light">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-comment-dots"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <!-- Descripción -->
                        <p class="masthead-subheading font-weight-light text-center">
                        "Código limpio, soluciones efectivas. Siempre aprendiendo para tu éxito." 🚀
                        </p>
                        <div class="row justify-content-center">
    <div class="col-sm-4 mb-3 text-center">
        <a class="btn btn-xl btn-outline-light d-flex justify-content-center align-items-center w-100" href="https://drive.google.com/file/d/1qecJEOP1jMpUJVG5lqQRkpMG3CQkGZw3/view?usp=sharing" target="_blank">
            DESCARGAR
        </a>
    </div>
    <div class="col-sm-4 mb-3 text-center">
        <a class="btn btn-xl btn-outline-light d-flex justify-content-center align-items-center w-100" href="mailto:tuemail@example.com">
            CONTACTO
        </a>
    </div>
    <div class="col-sm-4 mb-3 text-center">
        <a class="btn btn-xl btn-outline-light d-flex justify-content-center align-items-center w-100" href="https://www.linkedin.com/in/tuusuario" target="_blank">
            LINKEDIN
        </a>
    </div>
</div>

                    </div>
                </div>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <section class="text-center">
    <h2 class="page-section-heading text-uppercase text-secondary mb-3">
        PROYECTOS
    </h2>
    <div class="container">
        <h3 class="text-justify custom-justify">
            "Descubre algunos de mis proyectos más recientes, donde la innovación y el código limpio se combinan.  
            Si te impresionan, encuentra más en mi <a href="https://github.com/tuusuario" target="_blank">GitHub</a>."
        </h3>
    </div>
</section>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-folder-open"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    @yield('content')
                </div>
            </div>
        </section>
                <!-- About skills-->
        <section class="page-section" id="skills">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Skills</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-laptop-code"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row justify-content-center">
                    @yield('tecnologias')
                </div>
        </section>

        <!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about" style="padding: 25px 0 50px;">
    <div class="container">
        <!-- About Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-white mb-4">Sobre mí</h2>
        <!-- Icon Divider -->
        <div class="divider-custom divider-light mb-4">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-id-badge"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content -->
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-8">
                <p class="lead">
                    Soy un desarrollador fullstack con un enfoque equilibrado entre frontend y backend. Trabajo con TypeScript, C++, Angular, Laravel, JavaScript, Java, Dart y Flutter.
                </p>
                <p class="lead">
                    He desarrollado un sistema de escritorio en Java para la gestión de almacenamiento en una tienda textil y una aplicación móvil de control de gastos personales con Flutter y Firebase. También participé en el desarrollo de sistemas clínicos con jQuery, Laravel, C++ y TypeScript.
                </p>
                <p class="lead">
                    Me encanta aprender explorando documentación y creando pequeños proyectos. Para mí, programar es como magia: el tiempo se detiene cuando estoy resolviendo retos y buscando soluciones eficientes.
                </p>
                <p class="lead">
                    Cuando no estoy programando, disfruto leer libros y ver anime. En el futuro, quiero especializarme más en el backend.
                </p>
                <p class="lead fw-bold text-center">
                    ¿Colaboramos en algo increíble? ¡Hablemos! 🚀
                </p>
            </div>
            <!-- Avatar Section -->
            <div class="col-md-4 text-center">
                <img class="masthead-avatar mb-4 img-fluid rounded-circle" src="assets/img/avataaars.svg" alt="Avatar" />
            </div>
        </div>
    </div>
</section>


        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">CONTACTEME</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-comments"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Correo Electronico</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="number" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Numero Celular</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Motivo de Consulta</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error al Enviar Mensaje contacteme 940602652 Peru!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Exp Section-->
        <section class="page-section bg-primary text-white mb-0" id="experiencia">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">EXPERIENCIA</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-suitcase"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row justify-content-center">
                    @yield('experiencias')
                </div>
                <div class="container">
        <!-- Timeline Section -->

        </section>                                    
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Ubicacion</h4>
                        <p class="lead mb-0">
                            AV. Siempre viva 245
                            <br />
                            Tercer piso 
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Mis Redes Sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-figma"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Proyectos con CMS</h4>
                        <p class="lead mb-0">
                            Levante Proyectos de Tiendas Virtuales con <a href="https://pe.wordpress.org/" target="_blank">Wordpress</a>  
                            <b>Y Sistemas de puntos de venta con</b>
                            <a href="https://www.odoo.com/es_ES" target="_blank">Oddo</a>.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>