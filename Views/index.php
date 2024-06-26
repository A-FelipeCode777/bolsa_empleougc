<?php include_once 'Views/template-principal/header.php'; ?>

<!-- START HOME -->
<section class="bg-home2" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="mb-4 pb-3 me-lg-5">
                    <h6 class="sub-title">Bolsa de Empleo Universidad La Gran Colombia </h6>
                    <h1 class="display-5 fw-semibold mb-3">Conectamos tu talento con <span class="text-primary fw-bold">Oportunidades</span></h1>
                    <p class="lead text-muted mb-0">Nuestra aplicación de bolsa de empleo te conecta con tu trabajo ideal. Encuentra oportunidades emocionantes o talento excepcional con facilidad y rapidez. ¡Tu futuro comienza aquí!</p>
                </div>
                <form action="#">
                    <div class="registration-form">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="filter-search-form filter-border mt-3 mt-md-0">
                                    <i class="uil uil-briefcase-alt"></i>
                                    <input type="search" id="job-title" class="form-control filter-input-box" placeholder="Busca Trabajo,Empresa">
                                </div>
                            </div><!--end col-->
                            <div class="col-md-4">
                                <div class="filter-search-form mt-3 mt-md-0">
                                    <i class="uil uil-map-marker"></i>
                                    <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                        <option value="BO">Bogotá DC</option>
                                        <option value="AR">Armenia-Quindio</option>
                                        <option value="CU">Cumaral-Meta</option>
                                        <option value="ME">Medellin-Antioquia</option>
                                        <option value="TU">Tunja</option>
                                        <option value="YO">Yopal</option>
                                        <option value="CA">Cali-Valle Del Cauca</option>
                                        <option value="CA">Cartagena</option>
                                        <option value="BA">Barranquilla-Atalnti</option>
                                        <option value="BU">Bucaramanga</option>
                                        <option value="CU">Cucuta</option>
                                        <option value="PI">Pitalito</option>
                                        <option value="IB">Ibague</option>
                                        <option value="FL">Flandes</option>
                                        <option value="PO">Popayan</option>
                                        <option value="CH">Choco</option>
                                        <option value="FU">Funza -Cundinamarca</option>
                                        <option value="FU">Fusagasuga -Cundinmrca</option>
                                        <option value="CH">Chia -Cundinamarca</option>
                                        <option value="SA">Santa Marta</option>
                                        <option value="ZI">Zipaquira -Cundinamarca</option>
                                        <option value="MA">Manizales</option>
                                        <option value="CU">Cundinamarca</option>
                                        <option value="SA">San Andres islas</option>
                                        <option value="NU">Nueva York -Estados Unidos</option>
                                        <option value="MA">Madrid -España</option>
                                        <option value="QU">Quebec -Canada</option>
                                        <option value="CA">Canada</option>
                                        <option value="CO">Colombia</option>
                                        <option value="ME">Mexico</option>
                                        <option value="BO">Boyaca</option>

                                    </select>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-4">
                                <div class="mt-3 mt-md-0 h-100">
                                    <button class="btn btn-primary submit-btn w-100 h-100" type="submit"><i class="uil uil-search me-1"></i> Buscar Trabajo</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </form>
            </div>
            <!--end col-->
            <div class="col-lg-5">
                <div class="mt-5 mt-md-0">
                    <img src="<?php echo BASE_URL; ?>assets/images/process-02.png" alt="" class="home-img" />
                </div>
            </div><!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- End Home -->

<!-- START CATEGORY -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h3 class="title">Categorias Más Buscadas </h3>
                    <p class="text-muted">Estas son las categorias más apetecida por nuestros usuarios, estas a un clik de tu trabajo deseado
                        Vamos ¡Con Toda!.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <?php foreach ($data['categorias'] as $categoria) { ?>
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="popu-category-box rounded text-center">
                    <div class="popu-category-icon icons-md">
                        <i class="uim uim-layers-alt" ></i>
                    </div>
                    <div class="popu-category-content mt-4">
                        <a href="job-categories.html" class="text-dark stretched-link">
                            <h5 class="fs-18"><?php echo $categoria['categoria']; ?></h5>
                        </a>
                        <p class="text-muted mb-0">Vacantes Disponibles</p>
                    </div>
                </div><!--end popu-category-box-->
                
            </div>
           <?php } ?>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5 text-center">
                    <a href="job-categories.html" class="btn btn-primary btn-hover">Explorar Todas<i class="uil uil-arrow-right ms-1"></i></a>
                </div>
            </div><!--end col-->
        
        </div><!--end row-->
        
    </div>
    <!--end container-->
</section>
<!-- END CATEGORY -->

<!-- START JOB-LIST -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title">Nuevos trabajos Publicados</h4>
                    <p class="text-muted mb-1">En la plataforma de empleo de 
                        la Universidad La Gran Colombia, encontrarás oportunidades que te llevarán a alcanzar tus metas y hacer realidad tus sueños. ¡Tu futuro laboral comienza aquí!.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <ul class="job-list-menu nav nav-pills nav-justified flex-column flex-sm-row mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="recent-jobs-tab" data-bs-toggle="pill" data-bs-target="#recent-jobs" type="button" role="tab" aria-controls="recent-jobs" aria-selected="true">Recientes</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="featured-jobs-tab" data-bs-toggle="pill" data-bs-target="#featured-jobs" type="button" role="tab" aria-controls="featured-jobs" aria-selected="false">Destacados</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="freelancer-tab" data-bs-toggle="pill" data-bs-target="#freelancer" type="button" role="tab" aria-controls="freelancer" aria-selected="false">Freelancer</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="part-time-tab" data-bs-toggle="pill" data-bs-target="#part-time" type="button" role="tab" aria-controls="part-time" aria-selected="false">Remoto</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="full-time-tab" data-bs-toggle="pill" data-bs-target="#full-time" type="button" role="tab" aria-controls="full-time" aria-selected="false">Presencial</button>
                    </li>
                </ul>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <?php foreach ($data['nuevoTrabajos'] as $trabajo) { ?>
            <div class="col-lg-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="recent-jobs" role="tabpanel" aria-labelledby="recent-jobs-tab">
                        <div class="job-box card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="<?php echo BASE_URL . 'Principal/details/' . $trabajo['id']; ?>" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo $trabajo['imagen']; ?>" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="<?php echo BASE_URL . 'Principal/details/' . $trabajo['id']; ?>" class="text-dark"><?php echo $trabajo['nombre']; ?></a>
                                            </h5>
                                            <p class="text-muted fs-14 mb-0"><?php echo $trabajo['empresa']; ?></p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0"><?php echo $trabajo['ciudad']; ?></p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$ </span><?php echo $trabajo['salario']; ?></p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-success-subtle text-success fs-13 mt-1">Full Time</span>
                                            <span class="badge bg-info-subtle text-info fs-13 mt-1">Private</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 1
                                                - 2 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 col-md-5">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                languages only differ in their grammar. </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <?php } ?>
                        <div class="text-center mt-4 pt-2">
                            <a href="job-list.html" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                        </div>

                    </div>
                    <!--end recent-jobs-tab-->

                    <div class="tab-pane fade" id="featured-jobs" role="tabpanel" aria-labelledby="featured-jobs-tab">
                        

                        <div class="job-box card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Business
                                                    Associate</a></h5>
                                            <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>800-1800/m </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-danger-subtle text-danger fs-13 mt-1">Part Time</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 0
                                                - 1 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 col-md-5">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                languages only differ in their grammar. </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box bookmark-post card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital Marketing
                                                    Manager</a></h5>
                                            <p class="text-muted fs-14 mb-0">Jobcy Technology Pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Phoenix, Arizona</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-primary-subtle text-primary fs-13 mt-1">Freelancer</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span>
                                                4+ years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-lg-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Product
                                                    Director</a></h5>
                                            <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Escondido, California</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-success-subtle text-success fs-13 mt-1">Full Time</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 2
                                                - 3 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="text-center mt-4 pt-2">
                            <a href="job-list.html" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--end featured-jobs-tab-->

                    <div class="tab-pane fade" id="freelancer" role="tabpanel" aria-labelledby="freelancer-tab">
                        <div class="job-box card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web Developer</a>
                                            </h5>
                                            <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1000-1200/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-primary-subtle text-primary fs-13 mt-1">Freelancer</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 1
                                                - 2 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 col-md-5">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                languages only differ in their grammar. </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Business
                                                    Associate</a></h5>
                                            <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>800-1800/m
                                            </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-primary-subtle text-primary fs-13 mt-1">Freelancer</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 0
                                                - 1 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 col-md-5">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                languages only differ in their grammar. </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box bookmark-post card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital Marketing
                                                    Manager</a></h5>
                                            <p class="text-muted fs-14 mb-0">Jobcy Technology Pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Phoenix, Arizona</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-primary-subtle text-primary fs-13 mt-1">Freelancer</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span>
                                                4+ years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box bookmark-post card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-lg-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Product
                                                    Director</a></h5>
                                            <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Escondido, California</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-primary-subtle text-primary fs-13 mt-1">Freelancer</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 2
                                                - 3 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="text-center mt-4 pt-2">
                            <a href="job-list.html" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--end freelancer-tab-->

                    <div class="tab-pane fade" id="part-time" role="tabpanel" aria-labelledby="part-time-tab">
                        <div class="job-box bookmark-post card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web Developer</a>
                                            </h5>
                                            <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1000-1200/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-danger-subtle text-danger fs-13 mt-1">Part Time</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 1
                                                - 2 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 col-md-5">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                languages only differ in their grammar. </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Business
                                                    Associate</a></h5>
                                            <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>800-1800/m
                                            </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-danger-subtle text-danger fs-13 mt-1">Part Time</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 0
                                                - 1 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 col-md-5">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                languages only differ in their grammar. </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box bookmark-post card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital Marketing
                                                    Manager</a></h5>
                                            <p class="text-muted fs-14 mb-0">Jobcy Technology Pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0"> Phoenix, Arizona</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-danger-subtle text-danger fs-13 mt-1">Part Time</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span>
                                                4+ years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-lg-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Product
                                                    Director</a></h5>
                                            <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Escondido, California</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-danger-subtle text-danger fs-13 mt-1">Part Time</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 2
                                                - 3 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="text-center mt-4 pt-2">
                            <a href="job-list.html" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--end part-time-tab-->

                    <div class="tab-pane fade" id="full-time" role="tabpanel" aria-labelledby="full-time-tab">
                        <div class="job-box bookmark-post card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Web Developer</a>
                                            </h5>
                                            <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1000-1200/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-success-subtle text-success fs-13 mt-1">Full Time</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 1
                                                - 2 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 col-md-5">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                languages only differ in their grammar. </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box bookmark-post card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Business
                                                    Associate</a></h5>
                                            <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>800-1800/m
                                            </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-success-subtle text-success fs-13 mt-1">Full Time</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 0
                                                - 1 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 col-md-5">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Notes :</span>
                                                languages only differ in their grammar. </p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-md-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Digital Marketing
                                                    Manager</a></h5>
                                            <p class="text-muted fs-14 mb-0">Jobcy Technology Pvt.Ltd</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Phoenix, Arizona</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-success-subtle text-success fs-13 mt-1">Full Time</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span>
                                                4+ years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="job-box card mt-4">
                            <div class="bookmark-label text-center">
                                <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            <div class="p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <div class="text-center mb-4 mb-lg-0">
                                            <a href="company-details.html"><img src="<?php echo BASE_URL; ?>assets/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="fs-18 mb-1"><a href="job-details.html" class="text-dark">Product
                                                    Director</a></h5>
                                            <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-map-marker text-primary me-1"></i>
                                            </div>
                                            <p class="text-muted mb-0">Escondido, California</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <p class="text-muted mb-2"><span class="text-primary">$</span>1500-2400/m</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">
                                        <div>
                                            <span class="badge bg-success-subtle text-success fs-13 mt-1">Full Time</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-muted mb-0"><span class="text-dark">Experience :</span> 2
                                                - 3 years</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-2 col-md-3">
                                        <div class="text-start text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end job-box-->

                        <div class="text-center mt-4 pt-2">
                            <a href="job-list.html" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--end full-time-tab-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END JOB-LIST -->

<!-- START PROCESS -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title me-5">
                    <h3 class="title">How It Work</h3>
                    <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the
                        right freelancers.</p>
                    <div class="process-menu nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="d-flex">
                                <div class="number flex-shrink-0">
                                    1
                                </div>
                                <div class="flex-grow-1 text-start ms-3">
                                    <h5 class="fs-18">Register an account</h5>
                                    <p class="text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability
                                        is of great importance.</p>
                                </div>
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <div class="d-flex">
                                <div class="number flex-shrink-0">
                                    2
                                </div>
                                <div class="flex-grow-1 text-start ms-3">
                                    <h5 class="fs-18">Find your job</h5>
                                    <p class="text-muted mb-0">There are many variations of passages of avaibookmark-label, but the majority
                                        alteration in some form.</p>
                                </div>
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <div class=" d-flex">
                                <div class="number flex-shrink-0">
                                    3
                                </div>
                                <div class="flex-grow-1 text-start ms-3">
                                    <h5 class="fs-18">Apply for job</h5>
                                    <p class="text-muted mb-0">It is a long established fact that a reader will be distracted by the
                                        readable content of a page.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-6">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <img src="<?php echo BASE_URL; ?>assets/images/process-01.png" alt="" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <img src="<?php echo BASE_URL; ?>assets/images/process-02.png" alt="" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <img src="<?php echo BASE_URL; ?>assets/images/process-03.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div> <!--end row-->
    </div><!--end container-->
</section>
<!-- END PROCESS -->

<!--START CTA-->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h2 class="text-primary mb-4">Browse Our <span class="text-warning fw-bold">5,000+</span> Latest
                        Jobs</h2>
                    <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with
                        the right freelancers.</p>
                    <div class="mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-primary btn-hover">Started Now <i class="uil uil-rocket align-middle ms-1"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!--END CTA-->

<!-- START TESTIMONIAL -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-4 pb-2">
                    <h3 class="title mb-3">Happy Candidates</h3>
                    <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the
                        right freelancers.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="swiper testimonialSlider pb-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card testi-box">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img src="<?php echo BASE_URL; ?>assets/images/logo/mailchimp.svg" height="50" alt="" />
                                    </div>
                                    <p class="testi-content lead text-muted mb-4">" Very well thought out and articulate communication.
                                        Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                        shortcuts. Even if the client is being careless. "</p>
                                    <h5 class="mb-0">Jeffrey Montgomery</h5>
                                    <p class="text-muted mb-0">Product Manager</p>
                                </div>
                            </div>
                        </div><!--end swiper-slide-->
                        <div class="swiper-slide">
                            <div class="card testi-box">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img src="<?php echo BASE_URL; ?>assets/images/logo/wordpress.svg" height="50" alt="" />
                                    </div>
                                    <p class="testi-content lead text-muted mb-4">" Very well thought out and articulate communication.
                                        Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                        shortcuts. Even if the client is being careless. "</p>
                                    <h5 class="mb-0">Rebecca Swartz</h5>
                                    <p class="text-muted mb-0">Creative Designer</p>
                                </div>
                            </div>
                        </div><!--end swiper-slide-->
                        <div class="swiper-slide">
                            <div class="card testi-box">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img src="<?php echo BASE_URL; ?>assets/images/logo/instagram.svg" height="50" alt="" />
                                    </div>
                                    <p class="testi-content lead text-muted mb-4">" Very well thought out and articulate communication.
                                        Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                        shortcuts. Even if the client is being careless. "</p>
                                    <h5 class="mb-0">Charles Dickens</h5>
                                    <p class="text-muted mb-0">Store Assistant</p>
                                </div>
                            </div>
                        </div><!--end swiper-slide-->
                    </div>
                    <!--end swiper-wrapper-->
                    <div class="swiper-pagination"></div>
                </div>
                <!--end swiper-container  -->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</section>
<!-- END TESTIMONIAL -->

<!-- START BLOG -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-5">
                    <h3 class="title mb-3">Quick Career Tips</h3>
                    <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the
                        right freelancers.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-box card p-2 mt-3">
                    <div class="blog-img position-relative overflow-hidden">
                        <img src="<?php echo BASE_URL; ?>assets/images/blog/img-01.jpg" alt="" class="img-fluid">
                        <div class="bg-overlay"></div>
                        <div class="author">
                            <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                            <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 01 July, 2021</p>
                        </div>
                        <div class="likes">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="blog-details.html" class="primary-link">
                            <h5 class="fs-17">How apps is the IT world ?</h5>
                        </a>
                        <p class="text-muted">The final text is not yet avaibookmark-label. Dummy texts have Internet tend
                            been in use by typesetters.</p>
                        <a href="blog-details.html" class="form-text text-primary">Read more <i class="mdi mdi-chevron-right align-middle"></i></a>
                    </div>
                </div><!--end blog-box-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-6">
                <div class="blog-box card p-2 mt-3">
                    <div class="blog-img position-relative overflow-hidden">
                        <img src="<?php echo BASE_URL; ?>assets/images/blog/img-02.jpg" alt="" class="img-fluid">
                        <div class="bg-overlay"></div>
                        <div class="author">
                            <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Brandon Carney</a></p>
                            <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 June, 2021</p>
                        </div>
                        <div class="likes">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 44</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 25</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="blog-details.html" class="primary-link">
                            <h5 class="fs-17">Smartest Applications for Business ?</h5>
                        </a>
                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability
                            is of great importance: human perception.</p>
                        <a href="blog-details.html" class="form-text text-primary">Read more <i class="mdi mdi-chevron-right align-middle"></i></a>
                    </div>
                </div><!--end blog-box-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-6">
                <div class="blog-box card p-2 mt-3">
                    <div class="blog-img position-relative overflow-hidden">
                        <img src="<?php echo BASE_URL; ?>assets/images/blog/img-03.jpg" alt="" class="img-fluid">
                        <div class="bg-overlay"></div>
                        <div class="author">
                            <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">William Mooneyhan</a></p>
                            <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 16 March, 2021
                            </p>
                        </div>
                        <div class="likes">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 68</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 20</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="blog-details.html" class="primary-link">
                            <h5 class="fs-17">Design your apps in your own way ?</h5>
                        </a>
                        <p class="text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters
                            appear more frequently than others.</p>
                        <a href="blog-details.html" class="form-text text-primary">Read more <i class="mdi mdi-chevron-right align-middle"></i></a>
                    </div>
                </div><!--end blog-box-->
            </div><!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END BLOG -->

<!-- START CLIENT -->
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Woocommerce">
                        <img src="<?php echo BASE_URL; ?>assets/images/logo/logo-01.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Envato">
                        <img src="<?php echo BASE_URL; ?>assets/images/logo/logo-02.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Magento">
                        <img src="<?php echo BASE_URL; ?>assets/images/logo/logo-03.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wordpress">
                        <img src="<?php echo BASE_URL; ?>assets/images/logo/logo-04.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Generic">
                        <img src="<?php echo BASE_URL; ?>assets/images/logo/logo-05.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="text-center p-3">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Reveal">
                        <img src="<?php echo BASE_URL; ?>assets/images/logo/logo-06.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
<!-- END CLIENT -->

<!-- START APPLY MODAL -->
<div class="modal fade" id="applyNow" tabindex="-1" aria-labelledby="applyNow" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <div class="text-center mb-4">
                    <h5 class="modal-title" id="staticBackdropLabel">Apply For This Job</h5>
                </div>
                <div class="position-absolute end-0 top-0 p-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="mb-3">
                    <label for="nameControlInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameControlInput" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="emailControlInput2" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="emailControlInput2" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="messageControlTextarea" class="form-label">Message</label>
                    <textarea class="form-control" id="messageControlTextarea" rows="4" placeholder="Enter your message"></textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="inputGroupFile01">Resume Upload</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Application</button>
            </div>
        </div>
    </div>
</div><!-- END APPLY MODAL -->

</div>
<!-- End Page-content -->



<?php include_once 'Views/template-principal/footer.php'; ?>

</body>

</html>