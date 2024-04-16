<!doctype html>
<html lang="en">

<head>
    <title><?php echo TITLE . ' - ' . $data['title']; ?></title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico">

    <!-- Choise Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/libs/choices.js/public/assets/styles/choices.min.css">

     <!-- Light Box Css -->
     <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/libs/glightbox/css/glightbox.min.css">

    <!-- Nouislider Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/libs/nouislider/nouislider.min.css">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/libs/swiper/swiper-bundle.min.css">

    <!-- Bootstrap Css -->
    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="<?php echo BASE_URL; ?>assets/css/icons.min.css" rel="stylesheet" />
    <!-- App Css-->
    <link href="<?php echo BASE_URL; ?>assets/css/app.min.css" id="app-style" rel="stylesheet" />
    <!--Custom Css-->

  

</head>

<body>
    <!--start page Loader -->
    <div id="preloader">
        <div id="status">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <!--end page Loader -->

    <!-- Begin page -->
    <div>

        <!-- START TOP-BAR -->
        <div class="top-bar">
            <div class="container-fluid custom-container">
                <div class="row g-0 align-items-center">
                    <div class="col-md-7">
                        <ul class="list-inline mb-0 text-center text-md-start">
                            <li class="list-inline-item">
                                <p class="fs-13 mb-0"> <i class="mdi mdi-map-marker"></i> Tu localizacón: <a href="javascript:void(0)" class="text-dark">Universidad La Gran Colombia</a></p>
                            </li>
                            <li class="list-inline-item">
                                <ul class="topbar-social-menu list-inline mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i class="uil uil-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i class="uil uil-facebook-messenger-alt"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i class="uil uil-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i class="uil uil-envelope"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--end col-->
                    <div class="col-md-5">
                        <ul class="list-inline mb-0 text-center text-md-end">
                            <li class="list-inline-item py-2 me-2 align-middle">
                                <a href="#signupModal" class="text-dark fw-medium fs-13" data-bs-toggle="modal"><i class="uil uil-lock"></i>
                                    Registra tu Empresa</a>
                            </li>
                            <li class="list-inline-item align-middle">
                                <div class="dropdown d-inline-block language-switch">
                                    <button type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img id="header-lang-img" src="<?php echo BASE_URL; ?>assets/images/flags/us.jpg" alt="Header Language" height="16" />
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                            <img src="<?php echo BASE_URL; ?>assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12" />
                                            <span class="align-middle">English</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                            <img src="<?php echo BASE_URL; ?>assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12" />
                                            <span class="align-middle">Spanish</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                            <img src="<?php echo BASE_URL; ?>assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12" />
                                            <span class="align-middle">German</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                            <img src="<?php echo BASE_URL; ?>assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12" />
                                            <span class="align-middle">Italian</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                            <img src="<?php echo BASE_URL; ?>assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12" />
                                            <span class="align-middle">Russian</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!-- END TOP-BAR -->

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
            <div class="container-fluid custom-container">
                <a class="navbar-brand text-dark fw-bold me-auto" href="<?php echo BASE_URL . 'home/index' ?>">
                    <img src="<?php echo BASE_URL; ?>assets/images/logoJobink mod1-dark.png" height="22" alt="" class="logo-dark" />
                    <img src="<?php echo BASE_URL; ?>assets/images/logo-light.png" height="22" alt="" class="logo-light" />
                </a>
                <div>
                    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center">
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL . 'home/index' ?>" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link" href="javascript:void(0)" id="jobsdropdown" role="button" data-bs-toggle="dropdown">
                                Mi cuenta <div class="arrow-down"></div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="jobsdropdown">
                                <li><a class="dropdown-item" href="<?php echo BASE_URL . 'principal/about' ?>">Plataforma</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL . 'principal/Hoja' ?>">Hoja de vida</a></li>
                                <li><a class="dropdown-item" href="team.html">Mis Procesos</a></li>
                                <li><a class="dropdown-item" href="pricing.html">Cursos</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link" href="javascript:void(0)" id="pagesdoropdown" role="button" data-bs-toggle="dropdown">
                                Empleos
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center" aria-labelledby="pagesdoropdown">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span class="dropdown-header">Jobs</span>
                                        <div>
                                            <a class="dropdown-item" href="<?php echo BASE_URL . 'principal/trabajos' ?>">Ver Empleos</a>
                                            <a class="dropdown-item" href="<?php echo BASE_URL . 'principal/details' ?>">Detalles</a>
                                            <a class="dropdown-item" href="job-categories.html">Categorias</a>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-4">
                                        <span class="dropdown-header">Candidates / Companys</span>
                                        <div>
                                            <a class="dropdown-item" href="candidate-list.html">Candidate List</a>
                                            <a class="dropdown-item" href="candidate-grid.html">Candidate Grid</a>
                                            <a class="dropdown-item" href="candidate-details.html">Candidate Details</a>
                                            <a class="dropdown-item" href="company-list.html">Company List</a>
                                            <a class="dropdown-item" href="company-details.html">Company Details</a>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-4">
                                        <span class="dropdown-header">Extra Pages</span>
                                        <div>
                                            <a class="dropdown-item" href="sign-up.html">Sign Up</a>
                                            <a class="dropdown-item" href="sign-in.html">Sign In</a>
                                            <a class="dropdown-item" href="sign-out.html">Sign Out</a>
                                            <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                            <a class="dropdown-item" href="404-error.html">404 Error</a>
                                            <a class="dropdown-item" href="components.html">Components</a>
                                        </div>
                                    </div><!--end col-->
                                </div>
                            </div>
                        </li><!--end dropdown-->
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link" href="javascript:void(0)" id="productdropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Noticias
                                <div class="arrow-down"></div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="productdropdown">
                                <li><a class="dropdown-item" href="blog.html">Noticias</a></li>
                                
                            </ul>
                        </li><!--end dropdown-->
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL . 'principal/Contactos' ?>" class="nav-link">Contact</a>
                        </li>
                    </ul><!--end navbar-nav-->
                </div>
                <!--end navabar-collapse-->
                <ul class="header-menu list-inline d-flex align-items-center mb-0">
                    <li class="list-inline-item dropdown me-4">
                        <a href="javascript:void(0)" class="header-item noti-icon position-relative" id="notification" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-bell fs-22"></i>
                            <div class="count position-absolute">3</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end p-0" aria-labelledby="notification">
                            <div class="notification-header border-bottom bg-light">
                                <h6 class="mb-1"> Notification </h6>
                                <p class="text-muted fs-13 mb-0">You have 4 unread Notification</p>
                            </div>
                            <div class="notification-wrapper dropdown-scroll">
                                <a href="javascript:void(0)" class="text-dark notification-item d-block active">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs bg-primary text-white rounded-circle text-center">
                                                <i class="uil uil-user-check"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">22 verified registrations</h6>
                                            <p class="mb-0 fs-12 text-muted"><i class="mdi mdi-clock-outline"></i> <span>3 min
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a><!--end notification-item-->
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="<?php echo BASE_URL; ?>assets/images/user/img-02.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">James Lemire</h6>
                                            <p class="text-muted fs-12 mb-0"><i class="mdi mdi-clock-outline"></i> <span>15 min
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a><!--end notification-item-->
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-04.png" class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">Applications has been approved</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i> <span>45 min
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a><!--end notification-item-->
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="<?php echo BASE_URL; ?>assets/images/user/img-01.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">Kevin Stewart</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i> <span>1 hour
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a><!--end notification-item-->
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-01.png" class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-15">Creative Agency</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i> <span>2 hour
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a><!--end notification-item-->
                            </div><!--end notification-wrapper-->
                            <div class="notification-footer border-top text-center">
                                <a class="primary-link fs-13" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item dropdown">
                        <a href="javascript:void(0)" class="header-item" id="userdropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo BASE_URL; ?>assets/images/profile.jpg" alt="mdo" width="35" height="35" class="rounded-circle me-1"> <span class="d-none d-md-inline-block fw-medium">Hola, Laura</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                            <li><a class="dropdown-item" href="manage-jobs.html">Gestiona tu trabajos</a></li>
                            <li><a class="dropdown-item" href="bookmark-jobs.html">Ofertas Guardadas</a></li>
                            <li><a class="dropdown-item" href="profile.html">My Perfil</a></li>
                            <li><a class="dropdown-item" href="sign-out.html">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul><!--end header-menu-->
            </div>
            <!--end container-->
        </nav>
        <!-- Navbar End -->


        <!-- START SIGN-UP MODAL -->
        <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-5">
                        <div class="position-absolute end-0 top-0 p-3">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="auth-content">
                            <div class="w-100">
                                <div class="text-center mb-4">
                                    <h5>Registra tu Empresa</h5>
                                    <p class="text-muted">Sign Up and get access to all the features of Jobcy</p>
                                </div>
                                <form action="#" class="auth-form">
                                    <div class="mb-3">
                                        <label for="usernameInput" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="usernameInput" placeholder="Enter your username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="passwordInput" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="text-primary form-text text-decoration-underline">Terms and conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                    </div>
                                </form>
                                <div class="mt-3 text-center">
                                    <p class="mb-0">Already a member ? <a href="sign-in.html" class="form-text text-primary text-decoration-underline"> Sign-in </a></p>
                                </div>
                            </div>
                        </div>
                    </div><!--end modal-body-->
                </div><!--end modal-content-->
            </div><!--end modal-dialog-->
        </div>
        <!-- END SIGN-UP MODAL -->

        <div class="main-content">

            <div class="page-content">

              

                <!-- START SHAPE -->
                <div class="position-relative">
                    <div class="shape">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="150" preserveAspectRatio="none" viewBox="0 0 1440 220">
                            <g mask="url(&quot;#SvgjsMask1004&quot;)" fill="none">
                                <path d="M 0,213 C 288,186.4 1152,106.6 1440,80L1440 250L0 250z" fill="rgba(255, 255, 255, 1)"></path>
                            </g>
                            <defs>
                                <mask id="SvgjsMask1004">
                                    <rect width="1440" height="250" fill="#ffffff"></rect>
                                </mask>
                            </defs>
                        </svg>
                    </div>
                </div>
                <!-- END SHAPE -->