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
                    <img class="masthead-avatar mb-5 img-fluid" src="assets/img/avataaars.svg" alt="Avatar" />
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

                            <a class="btn btn-xl btn-outline-light d-flex justify-content-center align-items-center w-100"
                                href="{{ asset('assets/cv/' . $cvFile) }}"
                                target="_blank" download>
                                {{ __('messages.download') }}
                            </a>

                        </div>
                        <div class="col-sm-4 mb-3 text-center">
                            <a class="btn btn-xl btn-outline-light d-flex justify-content-center align-items-center w-100" href="https://web.whatsapp.com/send?phone=13856229878&text=Hi DevPess" target="_blank">
                                {{ __('messages.contact') }}
                            </a>
                        </div>
                        <div class="col-sm-4 mb-3 text-center">
                            <a class="btn btn-xl btn-outline-light d-flex justify-content-center align-items-center w-100" href="https://www.linkedin.com/in/devpess" target="_blank">
                                {{ __('messages.linkedin') }}
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
                    <img class="masthead-avatar mb-4 img-fluid rounded-circle" src="assets/img/avataaars.svg" alt="Avatar" />
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
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="{{ __('form.name_placeholder') }}" data-sb-validations="required" />
                            <label for="name">{{ __('form.name') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">{{ __('form.name_required') }}</div>
                        </div>

                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">{{ __('form.email') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">{{ __('form.email_required') }}</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">{{ __('form.email_invalid') }}</div>
                        </div>

                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="number" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">{{ __('form.phone') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">{{ __('form.phone_required') }}</div>
                        </div>

                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="{{ __('form.message_placeholder') }}" style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">{{ __('form.message') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">{{ __('form.message_required') }}</div>
                        </div>

                        <!-- Success message-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">{{ __('form.success') }}</div>
                                {{ __('form.activate_message') }}<br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>

                        <!-- Error message-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">{{ __('form.error') }}</div>
                        </div>

                        <!-- Submit Button-->
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
                    <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/tuusuario" target="_blank"><i class="fab fa-fw fa-github"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/@tuusuario" target="_blank"><i class="fab fa-fw fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/devpess" target="_blank"><i class="fab fa-fw fa-linkedin"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.figma.com/@tuusuario" target="_blank"><i class="fab fa-fw fa-figma"></i></a>
                </div>
                <!-- Footer About Text-->
                                <!-- Tecnologías más usadas -->
                <div class="col-lg-4">
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

    <div class="tech-row mb-2">
        <div class="d-flex align-items-center mb-1" style="
    border-right-width: 10px;
    width: 160px;
">
            <img src="{{ $tec['icono'] }}" alt="{{ $tec['nombre'] }}" style="width: 24px; margin-right: 8px;">
            <div class="tech-name text-white">{{ $tec['nombre'] }}</div>
        </div>
        <div class="tech-bar d-flex gap-1">
            @for ($i = 0; $i < 10; $i++)
                <div class="bar-segment {{ $i < $cuadrosLlenos ? 'bar-filled ' . $color : '' }}"></div>
            @endfor
        </div>
    </div>
@endforeach

{{-- Tecnologías completas con ícono de check ✅ --}}
@if (count($topCompletas) > 0)
    <div class="mt-4">
        <div class="d-flex flex-wrap gap-3">
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
    <script src="js/scripts.js"></script>
</body>

</html>