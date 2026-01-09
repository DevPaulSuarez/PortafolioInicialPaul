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
    <link href="css/styles.css?v=0.1" rel="stylesheet" />
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
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">{{ __('messages.projects') }}</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#skills">{{ __('messages.skills') }}</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">{{ __('messages.about') }}</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">{{ __('messages.contact') }}</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#experiencia">{{ __('messages.experience') }}</a>
                    </li>
                    <x-language-switch />
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
                    <img
                        src="https://res.cloudinary.com/dtscjqe7r/image/upload/v1744848031/pess/tdq58gurkjnaxrfr3rbn.jpg"
                        alt="Avatar"
                        class="img-fluid mb-4 rounded-circle shadow"
                        style="max-width: 500px; width: 100%; height: auto; aspect-ratio: 1 / 1; object-fit: cover;" />
                </div>
                <!-- Columna del texto -->
                <div class="col-md-6 text-md-start text-center">
                    <h2 class="masthead-heading text-uppercase mb-3">{{ __('messages.presentacion_titulo') }}</h2>
                    <h3 class="text-justify">{{ __('messages.presentacion_descripcion') }}</h3>
                    <!-- Icon Divider -->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-comment-dots"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Descripción -->
                    <p class="masthead-subheading font-weight-light text-center">
                        {{ __('messages.lema') }}
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-sm-4 mb-3 text-center">
                            @php
                            $locale = app()->getLocale();
                            $cvFile = $locale === 'en' ? 'DevPess_en.pdf' : 'DevPess_es.pdf';
                            @endphp

                            <a
                                class="btn btn-xl btn-outline-light d-flex justify-content-center align-items-center w-100"
                                href="{{ asset('assets/cv/' . $cvFile) }}"
                                target="_blank"
                                download
                                aria-label="Descargar CV DevPess">
                                <!-- Icono SVG incluido dentro del botón -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50" fill="currentColor">
                                    <path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z" />
                                </svg>
                            </a>
                        </div>

                        <div class="col-sm-4 mb-3 text-center">
                            <a
                                class="btn btn-xl btn-outline-light d-flex justify-content-center align-items-center w-100"
                                href="https://api.whatsapp.com/send?phone=13856229878&text=Hi%20DevPess"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Enviar mensaje por WhatsApp a DevPess">
                                <!-- Icono de WhatsApp SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="50" height="50" fill="currentColor">
                                    <path d="M92.1 254.6c0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6L152 365.2l4.8 2.9c20.2 12 
            43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8c0-35.2-15.2-68.3-40.1-93.2c-25-25-58-38.7-93.2-38.7
            c-72.7 0-131.8 59.1-131.9 131.8zM274.8 330c-12.6 1.9-22.4 .9-47.5-9.9c-36.8-15.9-61.8-51.5-66.9-58.7
            c-.4-.6-.7-.9-.8-1.1c-2-2.6-16.2-21.5-16.2-41c0-18.4 9-27.9 13.2-32.3c.3-.3 .5-.5 .7-.8c3.6-4 7.9-5 10.6-5
            c2.6 0 5.3 0 7.6 .1c.3 0 .5 0 .8 0c2.3 0 5.2 0 8.1 6.8c1.2 2.9 3 7.3 4.9 11.8c3.3 8 6.7 16.3 7.3 17.6
            c1 2 1.7 4.3 .3 6.9c-3.4 6.8-6.9 10.4-9.3 13c-3.1 3.2-4.5 4.7-2.3 8.6c15.3 26.3 30.6 35.4 53.9 47.1
            c4 2 6.3 1.7 8.6-1c2.3-2.6 9.9-11.6 12.5-15.5c2.6-4 5.3-3.3 8.9-2s23.1 10.9 27.1 12.9c.8 .4 1.5 .7 2.1 1
            c2.8 1.4 4.7 2.3 5.5 3.6c.9 1.9 .9 9.9-2.4 19.1c-3.3 9.3-19.1 17.7-26.7 18.8zM448 96c0-35.3-28.7-64-64-64H64
            C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM148.1 393.9L64 416l22.5-82.2
            c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5c29.9 30 47.9 69.8
            47.9 112.2c0 87.4-72.7 158.5-160.1 158.5c-26.6 0-52.7-6.7-75.8-19.3z" />
                                </svg>
                            </a>
                        </div>




                        <div class="col-sm-4 mb-3 text-center">
                            <a
                                class="btn btn-xl btn-outline-light d-flex justify-content-center align-items-center w-100"
                                href="https://www.linkedin.com/in/devpess"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Ir al perfil de LinkedIn de DevPess">
                                <!-- Icono de LinkedIn SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="50" height="50" fill="currentColor">
                                    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 
            32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 
            0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 
            38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 
            30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                                </svg>
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
                    {{ __('messages.seccion_proyecto_titulo') }}
                </h2>
                <div class="container">
                    <h3 class="text-justify custom-justify">
                        {{ __('messages.seccion_proyecto_descripcion') }}
                        {{ __('messages.seccion_proyecto_github') }} <a href="https://github.com/DevPaulSuarez" target="_blank">GitHub</a>."
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
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('messages.skills') }}</h2>
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
            <h2 class="page-section-heading text-center text-uppercase text-white mb-4">{{ __('messages.about') }}</h2>
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
                    <p class="lead">{{ __('messages.intro_1') }}</p>
                    <p class="lead">{{ __('messages.intro_2') }}</p>
                    <p class="lead">{{ __('messages.intro_3') }}</p>
                    <p class="lead">{{ __('messages.intro_4') }}</p>
                    <p class="lead fw-bold text-center">{{ __('messages.intro_5') }}</p>
                </div>
                <!-- Avatar Section -->
                <div class="col-md-4 text-center">
                    <img
                        src="https://res.cloudinary.com/dtscjqe7r/image/upload/v1744848032/pess/ai9ajbsrqv9u3oncdg7o.jpg"
                        alt="Avatar"
                        class="img-fluid mb-4 rounded-circle shadow"
                        style="max-width: 500px; width: 100%; height: auto; aspect-ratio: 1 / 1; object-fit: cover;" />
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('messages.contact') }}</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-comments"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <!-- Formulario de contacto -->
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf <!-- Protección CSRF -->

                         <!-- Honeypot anti-bots -->
                        <input type="text" name="company" style="display:none">
                        <!-- Nombre -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="{{ __('form.name_placeholder') }}" name="name" required />
                            <label for="name">{{ __('form.name') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">{{ __('form.name_required') }}</div>
                        </div>

                        <!-- Correo electrónico -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" name="email" required />
                            <label for="email">{{ __('form.email') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">{{ __('form.email_required') }}</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">{{ __('form.email_invalid') }}</div>
                        </div>

                        <!-- Teléfono -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="number" placeholder="(123) 456-7890" name="phone" required />
                            <label for="phone">{{ __('form.phone') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">{{ __('form.phone_required') }}</div>
                        </div>

                        <!-- Mensaje -->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" placeholder="{{ __('form.message_placeholder') }}" required style="height: 10rem"></textarea>
                            <label for="message">{{ __('form.message') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">{{ __('form.message_required') }}</div>
                        </div>

                        <!-- Mensaje de éxito (opcional)-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">{{ __('form.success') }}</div>
                                {{ __('form.activate_message') }}<br />
                            </div>
                        </div>

                        <!-- Mensaje de error (opcional)-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">{{ __('form.error') }}</div>
                        </div>

                        <!-- Botón de envío -->
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">{{ __('form.send') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Exp Section-->
    <section class="page-section bg-primary text-white mb-0" id="experiencia">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">{{ __('messages.experience') }}</h2>
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
                <!-- Contacto -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">{{ __('messages.direccionElectronica') }}</h4>
                    <p class="lead mb-0">
                        <a href="mailto:paulsuarez018@gmail.com" class="text-white">paulsuarez018@gmail.com</a><br>
                        {{ __('messages.direccionTexto') }}
                    </p>
                </div>
                <!-- Redes Sociales -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">{{ __('messages.mis_redes_sociales') }}</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/DevPaulSuarez" target="_blank"><i class="fab fa-fw fa-github"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/@DevPess2025" target="_blank"><i class="fab fa-fw fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/devpess" target="_blank"><i class="fab fa-fw fa-linkedin"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.figma.com/@DevPess" target="_blank"><i class="fab fa-fw fa-figma"></i></a>
                </div>
                <div class="col-lg-4 mx-auto text-center">
                    <h4 class="text-uppercase mb-4">{{ __('messages.topTecnologias') }}</h4>

                    @php
                    $omitidas = ['HTML', 'CSS', 'JavaScript', 'TypeScript'];
                    $topNormales = [];
                    $topCompletas = [];
                    @endphp

                    {{-- Clasificamos tecnologías: completas vs. incompletas --}}
                    @foreach ($topTecnologias as $tec)
                    @php
                    $cuadrosLlenos = min(10, $tec['conteo']);
                    if ($cuadrosLlenos >= 10 || in_array($tec['nombre'], $omitidas)) {
                    $topCompletas[] = $tec;
                    } else {
                    $topNormales[] = $tec;
                    }
                    @endphp
                    @endforeach

                    {{-- Barras de tecnologías incompletas --}}
                    @foreach ($topNormales as $tec)
                    @php
                    $cuadrosLlenos = min(10, $tec['conteo']);
                    $color = 'red';

                    if ($cuadrosLlenos >= 7) $color = 'green';
                    elseif ($cuadrosLlenos >= 4) $color = 'yellow';
                    elseif ($cuadrosLlenos >= 1) $color = 'orange';
                    @endphp

                    <div class="tech-row mb-2 d-flex justify-content-center">
                        <div class="d-flex align-items-center mb-1" style="border-right-width: 10px; width: 160px;">
                            <img src="{{ $tec['icono'] }}" alt="{{ $tec['nombre'] }}" style="width: 24px; margin-right: 8px;">
                            <div class="tech-name text-white">{{ $tec['nombre'] }}</div>
                        </div>
                        <div class="tech-bar d-flex gap-1 justify-content-center">
                            @for ($i = 0; $i < 10; $i++)
                                <div class="bar-segment {{ $i < $cuadrosLlenos ? 'bar-filled ' . $color : '' }}">
                        </div>
                        @endfor
                    </div>
                </div>
                @endforeach

                {{-- Tecnologías completas con ícono de check ✅ --}}
                @if (count($topCompletas) > 0)
                <div class="mt-4">
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        @foreach ($topCompletas as $tec)
                        <div class="d-flex align-items-center bg-success px-3 py-2 rounded" style="gap: 8px;">
                            <img src="{{ $tec['icono'] }}" alt="{{ $tec['nombre'] }}" style="width: 24px;">
                            <i class="fas fa-check-circle text-white ms-1"></i>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

        </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; 2021 DevPess. {{ __('messages.derechos') }}</small></div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js?v=0.1"></script>
</body>

</html>