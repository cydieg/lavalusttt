
<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Goco Dental Clinic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>public/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .img-color a img {
            width: 60px;
            height: auto;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">

 
        <!-- Header Start -->
        <div class="img-color container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="<?= site_url('/home') ?> "
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url() ?>public/img/logo.png">
                        <h4 class="m-0 text-primary text-uppercase">Goco Dental Clinic</h4>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">gocodentalclinic@gmail.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">0921 507 4378</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Clinic</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
    <div class="navbar-nav mx-auto py-0"> <!-- Use mx-auto to center -->
        <a href="<?= site_url('index.php/home') ?>" class="nav-item nav-link ">Home</a>
        <a href="<?= site_url('index.php/bago') ?>" class="nav-item nav-link">About</a>
        <a href="<?= site_url('index.php/service') ?>" class="nav-item nav-link active">Services</a>
        <a href="<?= site_url('index.php/contact') ?>" class="nav-item nav-link">Contact</a>
    </div>
    <button class="btn btn-primary text-dark logout-logo-btn">
        <i class="fas fa-power-off logout-icon"><a href="<?= site_url('/logout'); ?>">Logout</a></i>
    </button>
</div>

                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../public/images/BACK.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->





<!-- Service Start -->
<div class="container-xxl py-5">
		<div class="container">
			<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
				<h6 class="section-title text-center text-primary text-uppercase">
					Our Services
				</h6>
				<h1 class="mb-5">
					Explore Our
					<span class="text-primary text-uppercase">
						Services
					</span>
				</h1>
			</div>
			<div class="row g-4">
				<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
					<a class="service-item rounded" href="">
						<div class="service-icon bg-transparent border rounded p-1">
							<div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
								<i class="fa fa-tooth fa-2x text-primary">
								</i>
							</div>
						</div>
						<h5 class="mb-3">
                        Dentures
						</h5>
						<p class="text-body mb-0">
                        Dentures are removable appliances used to replace missing teeth and surrounding tissues. 
                        They can be full (replacing all teeth) or partial (replacing some teeth).
						</p>
					</a>
				</div>
				<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
					<a class="service-item rounded" href="">
						<div class="service-icon bg-transparent border rounded p-1">
							<div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
								<i class="fa fa-tooth fa-2x text-primary">
								</i>
							</div>
						</div>
						<h5 class="mb-3">
                        Root Canal Therapy
						</h5>
						<p class="text-body mb-0">
                        Root canal treatment involves removing infected or damaged pulp from the tooth, 
                        cleaning and disinfecting the root canal, and sealing it to prevent further infection.
						</p>
					</a>
				</div>
			</div>
			<br>
			<div class="row g-4">
				<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
					<a class="service-item rounded" href="">
						<div class="service-icon bg-transparent border rounded p-1">
							<div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
								<i class="fa fa-tooth fa-2x text-primary">
								</i>
							</div>
						</div>
						<h5 class="mb-3">
                        Oral Surgery
						</h5>
						<p class="text-body mb-0">
                        Oral surgeons perform various surgical procedures, 
                        including tooth extractions, wisdom teeth removal, and corrective jaw surgery.
						</p>
					</a>
				</div>
				<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
					<a class="service-item rounded" href="">
						<div class="service-icon bg-transparent border rounded p-1">
							<div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
								<i class="fa fa-tooth fa-2x text-primary">
								</i>
							</div>
						</div>
						<h5 class="mb-3">
                        Cosmetic Dentistry
						</h5>
						<p class="text-body mb-0">
                        Cosmetic services focus on improving the 
                        appearance of the teeth and smile, including teeth whitening, veneers, and cosmetic bonding.
						</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Service End -->


        <!-- Testimonial Start -->
        <!-- Testimonial Start -->
        <div class="container-xxl BACK mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
    <div class="container">
        <div id="BACK-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if ($data && is_array($data)) : ?>
                    <?php $first = true; ?>
                    <?php foreach ($data as $datas) : ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="BACK-item position-relative bg-white rounded overflow-hidden p-4">
                                <p class="mb-3"><?= $datas['username']; ?></p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded me-3" src="images/BACK.jpg" style="width: 60px; height: 60px;">
                                    <div>
                                        <h6 class="fw-bold mb-1"><?= $datas['feedback']; ?></h6>
                                    </div>
                                </div>
                                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                            </div>
                        </div>
                        <?php $first = false; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <!-- Handle the case when $data is null or not an array -->
                    <p class="text-white">No feedback available</p>
                <?php endif; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#BACK-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#BACK-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
        <!-- Testimonial End -->

   <!-- Newsletter Start -->
   <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->
        

       
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html">
                                <h1 class="text-white text-uppercase mb-3">Goco</h1>
                            </a>
                         All Right Reserved. Designed By Goco
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Calero, Calapan City, Oriental Mindoro, Philippines</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0921 507 4378</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>
gocodentalclinic@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">Dentures</a>
                                <a class="btn btn-link" href="">Root Canal Therapy</a>
                                <a class="btn btn-link" href="">Oral Surgery</a>
                                <a class="btn btn-link" href="">Cosmetic Dentistry</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
 
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

         <!-- Back to Top -->
         <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->

    <script src="<?= base_url() ?>public/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>public/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>public/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>public/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>public/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url() ?>public/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url() ?>public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>public/js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function (event) {
                    navLinks.forEach(item => item.classList.remove('active'));
                    link.classList.add('active');
                });
            });
        });
    </script>

</body>

</html>