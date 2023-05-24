<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nuriba Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset("lib/owlcarousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("lib/animate/animate.min.css")}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="https://maps.google.com/maps?q=41.296556,69.229149&ll=41.296556,69.229149&z=16" target="_blank">
                        <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>7 Bunyodkor shoh ko'chasi</small>
                    </a>
                    <a href="tel:+998934055950">
                     <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+998 93 405 59 50</small>   
                    </a>
                    
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://t.me/diloromqarshiboyeva" target="_blank"><i class="fab fa-telegram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/dilorom.qarshiboyeva?mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://instagram.com/dilorom_qarshiboyeva?igshid=NTc4MTIwNjQ2YQ==" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://youtube.com/@DiloromQarshiboyeva" target="_blank"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Xabaringizni qoldiring:</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('telegram.send') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input class="form-control" name="name"  placeholder="Ismingizni kiriting">
                    </div>
                    <div class="mb-3">
                        <input name="telefon" class="form-control" placeholder="Telefon raqamingizni kiriting">
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" placeholder="Xabaringizni kiriting"></textarea>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Bekor qilish</button>
                        <button type="submit" class="btn btn-primary">Yuborish</button>
                      </div>
                </form>
            </div>
          </div>
        </div>
    </div>

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{url('/')}}" class="navbar-brand p-0 text-primary">
                <h1 class="m-0">Nuriba Academy</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Bosh sahifa</a>
                    <a href="#about" class="nav-item nav-link">Men haqimda</a>
                    <a href="{{url('/kurslar')}}" class="nav-item nav-link">Kurslar</a>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-item nav-link">Bog'lanish</a>
                </div>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-2.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Notiqlik bo'yicha ekspert</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Dilorom Qarshiboyeva</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Men haqimda</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Bog'lanish</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Notiqlik bo'yicha ekspert</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Dilorom Qarshiboyeva</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Men haqimda</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Bog'lanish</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Reportajlar</h5>
                            <div class="d-flex">
                                <h1 class="text-white mb-0" data-toggle="counter-up">5000</h1><h1 class="text-white">+</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Shogirdlar</h5>
                            <div class="d-flex">
                               <h1 class="mb-0" data-toggle="counter-up">10000</h1><h1 class="mb-0">+</h1> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Jurnalist shogirdlar</h5>
                            <div class="d-flex">
                                 <h1 class="text-white mb-0" data-toggle="counter-up">800</h1><h1 class="text-white mb-0">+</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="about" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Men haqimda</h5>
                        <h1 class="mb-0">Dilorom Qarshiboyeva - notiqlik bo’yicha ekspert</h1>
                    </div>
                    <h4>Tajriba:</h4>
                    <p class="mb-4">"Mening yurtim" telekanali muxbiri. 5 000 dan ortiq ijtimoiy, siyosiy, tanqidiy va tahliliy reportajlar muallifi. 10 000 dan ortiq o’quvchilarga notiqlik san’atidan ilm bergan.
                        Toshkent viloyati Nurafshon Yosh jurnalistlar maktabi rahbarligi ostida viloyatning 800 ga yaqin yoshlari media va jurnalistika sohasida ta’lim olishgan. Toshkent viloyatida “Yoshlar kundaligi” nomli ijtimoiy media loyihasi asoschisi. "INTERNATIONAL SCHOOL OF FINANCE AND TECHNOLOGY" universiteti bitiruvchisi</p>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Bog'lanish</h5>
                            <a href="tel:+998934055950">
                                <h4 class="text-primary mb-0">+998 93 405 59 50</h4>
                            </a>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Savol va takliflarni yo'llang</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Vendor Start -->
     {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.png" alt="nuriba">
                    <img src="img/vendor-2.png" alt="my-5">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Vendor End -->

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Online kurslar</h5>
                <h1 class="mb-0">"SIFAT VA NATIJA" kursi</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 col-md-4 col-sm-12 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h3 class="text-primary mb-1">Boshlang'ich tarifi</h3>
                        </div>
                        <div class="p-5 pt-0" style="height:550px">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 26px; line-height: 45px;">390 000 SO'M</small>
                                <br>
                                <small class="align-top text-decoration-line-through" style="font-size: 22px; line-height: 45px;">750 000 SO'M</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>8 TA DARS</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>DARSLARGA 1 OY DOSTUP</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>KURATOR NAZORATI</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>SERTIFIKAT</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>UMUMIY CHAT</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="https://t.me/Mukhlisichka" style="position: relative; top:140px" class="btn btn-primary py-2 px-4 mt-4">Kursni xarid qilish</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h3 class="text-primary mb-1">MUTAXASIS TARIFI</h3>
                        </div>
                        <div class="p-5 pt-0" style="height:550px">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 26px; line-height: 45px;">490 000 SO'M</small>
                                <br>
                                <small class="align-top text-decoration-line-through" style="font-size: 22px; line-height: 45px;">1000 000 SO'M</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>8 TA DARS</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>UMUMIY CHAT</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>SERTIFIKAT</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>DARSLARGA DOSTUP 2 OY</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>KURS BITIRUV MAROSIMIDA ISHTIROK ETISH HUQUQI</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>DILOROM QARSHIBOYEVA BILAN KO'RISHIB, SUHBAT QILISH IMKONIYATI</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="https://t.me/Mukhlisichka" style="position: relative; top:20px" class="btn btn-primary py-2 px-4 mt-4">Kursni xarid qilish</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h3 class="text-primary mb-1">EKSPERT TARIFI</h3>
                        </div>
                        <div class="p-5 pt-0" style="height:550px">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 26px; line-height: 45px;">790 000 SO'M</small>
                                <br>
                                <small class="align-top text-decoration-line-through" style="font-size: 22px; line-height: 45px;">1500 000 SO'M</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>8 TA DARS</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>UMUMIY CHAT</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>DARSLARGA CHEKSIZ DOSTUP</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>SERTIFIKAT</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>KURS BITIRUV MAROSIMIDA ISHTIROK ETISH HUQUQI</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="https://t.me/Mukhlisichka" style="position: relative; top:110px" class="btn btn-primary py-2 px-4 mt-4">Kursni xarid qilish</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

       <!-- Team Start -->
       <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-primary text-uppercase">Notiqlik kursi bitiruvchilari</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="w-100" src="img/team-1.jpg" alt="" height="300px">
                        </div>
                        <div class="text-center py-4" style="height:220px">
                            <h4 class="text-primary">Umidjon Razikov</h4>
                            <h5>Treder va Investor</h5>
                            <p class="text-uppercase m-0">
                                "SHARK TREDING" trederlik maktabi asoschisi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class=" w-100" src="img/team-2.jpg" alt="" height="300px">
                        </div>
                        <div class="text-center py-4" style="height:220px">
                            <h4 class="text-primary">Bahrom Abduqayumov</h4>
                            <h5>Tadbirkor</h5>
                            <p class="text-uppercase m-0">"TOY BOLA" o’yinchoqlar ishlab chiqarish fabrikasi, "AFIYET&PURO" restoranlari moliya direktori</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class=" w-100" src="img/team-3.jpg" alt="" height="300px">
                        </div>
                        <div class="text-center py-4" style="height:220px">
                            <h4 class="text-primary">Dilshod Shamsiddinov</h4>
                            <h5>Tadbirkor</h5>
                            <p class="text-uppercase m-0">"BIG DATA" biznes akademiyasi, "MEGA START" aksessuarlar showrumi, "DID MOTORS" avto saloni asoschisi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class=" w-100" src="img/team-4.jpg" alt="" height="300px">
                        </div>
                        <div class="text-center py-4" style="height:220px">
                            <h4 class="text-primary">Habibulla Yusuphodjayev</h4>
                            <h5>Tadbirkor</h5>
                            <p class="text-uppercase m-0">"MELEROS" yumshoq mebel, oshxona mebellari, eshiklar, darvozalar ishlab chiqaruvchi kompaniya asoschisi va rahbari</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-6 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Bog'lanish</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <a href="">
                                    <i class="bi bi-geo-alt text-primary me-2"></i>
                                    <small class="mb-0 text-light">7 Bunyodkor shoh ko'chasi</small>
                                </a>
                            </div>
                            <div class="d-flex mb-2">
                                <a href="tel:+998934055950">
                                    <i class="fa fa-phone-alt me-2"></i><small class="me-3 text-light">+998 93 405 59 50</small>   
                                </a>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="https://t.me/diloromqarshiboyeva" target="_blank"><i class="fab fa-telegram fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/dilorom.qarshiboyeva?mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://youtube.com/@DiloromQarshiboyeva" target="_blank"><i class="fab fa-youtube fw-normal"></i></a>
                                <a class="btn btn-primary btn-square"href="https://instagram.com/dilorom_qarshiboyeva?igshid=NTc4MTIwNjQ2YQ==" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Tezkor havolalar</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{url('/')}}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Bosh sahifa</a>
                                <a class="text-light mb-2" href="{{url('/#about')}}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Men haqimda</a>
                                <a class="text-light" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Bog'lanish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-12 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="https://nuriba-academy.uz">nuriba-academy.uz</a> Barcha huquqlar himoyalangan.
						Sayt tuzuvchi <a class="text-white border-bottom" href="https://t.me/ozodbek_shodiboyev"> Ozodbek Shodiboyev</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset("lib/wow/wow.min.js")}}"></script>
    <script src="{{asset("lib/easing/easing.min.js")}}"></script>
    <script src="{{asset("lib/waypoints/waypoints.min.js")}}"></script>
    <script src="{{asset("lib/counterup/counterup.min.js")}}"></script>
    <script src="{{asset("lib/owlcarousel/owl.carousel.min.js")}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset("js/main.js")}}"></script>
</body>

</html>