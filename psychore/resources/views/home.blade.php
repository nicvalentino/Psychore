<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>PsyChore</title>

</head>

    @extends('navbar')
<body>


    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div style="background-image: url(../images/bgTopNav.png); background-size:cover; height: 480px;">
    <!-- NAVBAR -->    
        <nav class="navbar navbar-expand-lg bg-transparent navbar-dark">
            <div class="container">
                <a href="#" class="navbar-brand">PsyChore</a>

                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navmenu"
                    >
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse justify-content-center" id="navmenu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#beranda" class="nav-link"> Beranda </a>
                        </li>
                        <li class="nav-item">
                            <a href="#konsultasi" class="nav-link"> Konsultasi </a>
                        </li>
                        <li class="nav-item">
                            <a href="#konten" class="nav-link"> Konten </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    <!-- NAVBAR -->    

    <!-- SHOWCASE -->
        <section class="bg-transparent text-light p-5 text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1>Improve Your Mental Health</h1>
                        <p class="lead my-4">
                            We provides consultation services for mental health problems. We help people to improve their mental health.
                        </p>
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#daftarModal">
                            Konsultasi Sekarang <!--Daftar-->
                        </button>
                    </div>
                    <img class="img-fluid w-60 d-none d-sm-block" src="../images/Doctor.png" alt="">
                </div>
            </div>
        </section>
    <!-- SHOWCASE -->
    </div>

<!-- LAYANAN BOXES -->
    <section class="p-5">
        <div class="container">
            <h1 class="text-center text-dark">Our Services</h1>
            <div class="row text-center">
                <!-- Card 1-->
                <div class="col-md">
                    <div class="card bg-transparent text-dark border-0">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <img class="img-fluid" src="images/iconClock.png" style="max-width:25%;" alt="">
                            </div>
                            <h3 class="card-title">Praktis</h3>
                            <p>Lorem ipsum dolor sit amet, elite consectetur adipiscing, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2-->
                <div class="col-md">
                    <div class="card bg-transparent text-dark border-0">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <img class="img-fluid" src="images/iconDoct.png" style="max-width:25%;" alt="">
                            </div>
                            <h3 class="card-title">Professional</h3>
                            <p>Lorem ipsum dolor sit amet, elite consectetur adipiscing, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>

                <!-- Card 1-->
                <div class="col-md">
                    <div class="card bg-transparent text-dark border-0">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <img class="img-fluid" src="images/iconCoin.png" style="max-width:25%;" alt="">
                            </div>
                            <h3 class="card-title">Harga Terjangkau</h3>
                            <p>Lorem ipsum dolor sit amet, elite consectetur adipiscing, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- LAYANAN BOXES -->

<!-- PROFESSIONAL -->
    <div class="bg text-dark p-5 text-sm-start" style="background-color: #F0F1FE;">
        <h1 class="text-center">Our Professionals</h1>
        <div id="carouselProfessional" class="carousel" data-ride="carousel">
            <div class="carousel-inner">
                <!-- 1 -->
                <div class="carousel-item active">
                    <div class="card">
                        <img src="images/slide-1.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="carousel-item">
                    <div class="card">
                        <img src="images/slide-2.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="carousel-item">
                    <div class="card">
                        <img src="images/slide-3.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="carousel-item">
                    <div class="card">
                        <img src="images/slide-4.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="carousel-item">
                    <div class="card">
                        <img src="images/slide-5.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="carousel-item">
                    <div class="card">
                        <img src="images/slide-6.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- 7 -->
                <div class="carousel-item">
                    <div class="card">
                        <img src="images/slide-7.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- 8 -->
                <div class="carousel-item">
                    <div class="card">
                        <img src="images/slide-8.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselProfessional" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselProfessional" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>       
    </div>
<!-- PROFESSIONAL -->

<!-- REVIEW -->
    <div class="bg-transparent text-dark p-5 text-sm-start"> 
        <div class="container">
            <h1 class="text-dark text-center p-3">What Our Customers Say</h1>
            <div class="row">
                <!--Review 1-->
                <div class="col-sm-4">
                    <div class="card flex-row shadow" style="margin: 0 .2em; border-width: 0cm;">
                        <img class="card-img-left example-card-img-responsive rounded-circle pt-3 pb-3 pl-3" src="https://randomuser.me/api/portraits/women/71.jpg" style="width: 30%; height: 30%;"/>
                        <div class="card-body">
                            <h5 class="card-title mb-1">Mira</h5>
                            <h6 class="mb-1" style="opacity: .4;">Patient</h6>
                            <img class="mb-1" src="images/stars-5.png" style="width:60%;" alt="">
                            <h6 class="card-text mt-1" style="font-weight:400;">Thanks for all the services, no doubt this is the best consultation place.</h6>
                        </div>
                    </div>
                </div>
                <!--Review 2-->
                <div class="col-sm-4">
                    <div class="card flex-row shadow" style="margin: 0 .2em; border-width: 0cm;">
                        <img class="card-img-left example-card-img-responsive pt-3 pb-3 pl-3 rounded-circle" src="https://randomuser.me/api/portraits/women/0.jpg" style="width: 30%; height: 30%;"/>
                        <div class="card-body">
                            <h5 class="card-title mb-1">Mel</h5>
                            <h6 class="mb-1" style="opacity: .4;">Patient</h6>
                            <img class="mb-1" src="images/stars-5.png" style="width:60%;" alt="">
                            <h6 class="card-text mt-1" style="font-weight:400;">Thanks for all the services, no doubt this is the best consultation place.</h6>
                        </div>
                    </div>
                </div>
                <!--Review 3-->
                <div class="col-sm-4">
                    <div class="card flex-row shadow" style="margin: 0 .2em; border-width: 0cm;">
                        <img class="card-img-left example-card-img-responsive rounded-circle pt-3 pb-3 pl-3" src="https://randomuser.me/api/portraits/men/71.jpg" style="width: 30%; height: 30%;"/>
                        <div class="card-body">
                            <h5 class="card-title mb-1">Bob</h5>
                            <h6 class="mb-1" style="opacity: .4;">Patient</h6>
                            <img class="mb-1" src="images/stars-5.png" style="width:60%;" alt="">
                            <h6 class="card-text mt-1" style="font-weight:400;">Thanks for all the services, no doubt this is the best consultation place.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- REVIEW -->

<!-- KONTEN -->
    <div class="bg text-dark p-5 text-sm-start" style="background-color: #F0F1FE;">
        <div class="container">
            <h1 class="text-dark text-center p-3">Check Out Our Latest Contents</h1>
            <div class="row">
                <div class="col col-sm-4">
                    <img src="https://img.freepik.com/free-vector/personality-disorder-concept-illustration_114360-3560.jpg?w=1060&t=st=1668508171~exp=1668508771~hmac=5c2491f1745407c407715108c794ace09375935f0fa04adedb3b38da07f16722" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: #ffff;">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <img src="https://img.freepik.com/free-vector/people-connecting-jigsaw-pieces-head-together_53876-59847.jpg?w=996&t=st=1668508180~exp=1668508780~hmac=1c00ffdff1085b68d0bc8c84d2f67915a112511174838d1f62440c5ad3b43bc0" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: #ffff;">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col col-sm-4" style="background-color: #ffff;">
                    <img src="https://img.freepik.com/free-vector/collection-different-mental-disorders_52683-47234.jpg?w=1060&t=st=1668508208~exp=1668508808~hmac=83b2e5e8152194f5995a17c1df7ca2809c798d2bde3e38095400e44db1c1583c" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- KONTEN -->

<!-- FOOTER -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                    Products
                    </h6>
                    <p>
                    <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Laravel</a>
                    </p>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                    Useful links
                    </h6>
                    <p>
                    <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                    <i class="fas fa-envelope me-3"></i>
                    info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
  
    <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">PsyChore</a>
        </div>
        <!-- Copyright -->
    </footer>
<!-- FOOTER -->

<!-- MASUK -->
    <!-- Modal -->
    <div class="modal fade" id="masukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog signin_dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="signin_body">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="signin_img p-0">
                                    <img src="images/Banner.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="signup_content">
                                    <h3 class="text-center mt-5">Masuk</h3>
                                    <form>
                                        <div class="form-group col-md-8">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control " id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-secondary btn-lg-2">Masuk</button>
                                        <p class="text-dark pl-3">Belum memiliki akun? <a href="#">Daftar</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- MASUK -->

<!-- DAFTAR -->
    <!-- Modal -->
    <div class="modal fade" id="daftarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog signin_dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="signin_body">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="signin_img p-0">
                                    <img src="images/Banner.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="signup_content">
                                    <h3 class="text-center mt-5">Daftar</h3>
                                    <form>
                                        <div class="form-group col-md-8">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="exampleInputPassword1">Username</label>
                                            <input type="text" class="form-control " id="exampleInputUsername1" placeholder="Username">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control " id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-secondary btn-lg-2">Masuk</button>
                                        <p class="text-dark pl-3">Sudah memiliki akun? <a href="#masukModal" data-bs-target="#masukModal">Daftar</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- DAFTAR -->


    <script src="js/jQuery/jquery.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"
    ></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"> </script>
</body>
</html>