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
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark  px-5 py-3 py-lg-0" style="background-color: #091E3E">
            <a href="{{ url('/') }}" class="navbar-brand p-0">
                <h1 class="m-0">Nuriba Academy</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Bosh sahifa</a>
                    <a href="{{('/#about')}}" class="nav-item nav-link">Men haqimda</a>
                    <a href="{{url('/kurslar')}}" class="nav-item nav-link">Kurslar</a>
                    <a type="button" class="nav-item nav-link"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-item nav-link ">Bog'lanish</a>
                </div>
            </div>
        </nav>


    </div>
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

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>

            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5 mt-4">
                    <div class="row g-5">
                        <div class="col-lg-7">
                            <div class="section-title position-relative pb-3 mb-5">
                                <h5 class="fw-bold text-primary text-uppercase">Mutaxassis - Dilorom Qarshiboyeva</h5>
                                <h1 class="mb-0">Notiqlik kursi kimlar uchun?</h1>
                            </div>
                            <p class="mb-4">Avvalo, notiqlik o’zini xurmat qilgan har bir shaxs uchun kerak!</p>
                            <p>Agarda siz ichingizdagilarni gapirishga qiynalayotgan bo’lsangiz, fikringizni o’zingiz istagan tarzda namoyon qila olmayapsizmi? </p>
                            <p>Sizni eshitmasliklaridan charchadingizmi?</p>
                            <p>Omma oldiga chiqib gapirishdan uyalasizmi?</p>
                            <p>O’zingizga bo’lgan bahoyingiz pastmi?</p>
                            <p>Nutqingizdagi kamchiliklar, ovozingiz bilan muammolar sizni qiynab yubordimi? </p>
                            <p>Hayot modelingizni o’zgartishni, time management’ni o’rganmoqchimisiz? </p>
                            <p>U holda sizlarni, notiqlik bo’yicha xalqaro ekspert Dilorom Qarshiboyeva bilan birgalikda 1 oy davom etadigan notiqlik kurslarimizga taklif qilamiz!</p>
                            <h2>Siz bizning kurslarimizda:</h2>
                            <p>Nutq bilan bog’liq har qanday muammolar 100%  barham topadi</p>
                            <p>O’zingizga bo’lgan ishonch qaytadi va siz nafaqat omma oldida, balki har qanday inson qarshisida qo’rqmay, erkin so’zlay boshlaysiz.</p>
                            <p>O’zingizni xurmat qilishni o’rganasiz va shu orqali atrofdagilarni ham hurmat e’tiboriga erishasiz.</p>
                            <p>Fikrlaringizni insonlarga o’zingiz istagandek, qiyinchiliklarsiz yetkazishni o’rganasiz.</p>
                            <div class="d-flex align-items-center mt-2 wow zoomIn mt-4" data-wow-delay="0.6s">
                                <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2">Kurslar haqida batafsil ma’lumot olish, kurslarga yozilish uchun:</h5>
                                    <a href="tel:+998934055950">
                                        <h4 class="text-primary mb-0">+998 93 405 59 50</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{asset('img/kurslar.jpg')}}" alt="jpg" width="350px" height="500px">
                        </div>
                    </div>
                </div>
            </div>
            
    <!-- Pricing Plan Start -->
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
                        <div class="p-5 pt-0" style="height:80vh">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 26px; line-height: 45px;">390 000 SO'M</small>
                                <br>
                                <small class="align-top text-decoration-line-through" style="font-size: 22px; line-height: 45px;">750 000 SO'M</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><b>8 TA DARS</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><b>DARSLARGA 1 OY DOSTUP</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><b>KURATOR NAZORATI</b><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><b>SERTIFIKAT</b><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><b>UMUMIY CHAT</b><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2 mt-4">
                                <a href="https://t.me/Mukhlisichka"  class="btn btn-primary py-2 px-4">Kursni xarid qilish</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h3 class="text-primary mb-1">MUTAXASSIS TARIFI</h3>
                        </div>
                        <div class="p-5 pt-0" style="height:80vh">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 26px; line-height: 45px;">490 000 SO'M</small>
                                <br>
                                <small class="align-top text-decoration-line-through" style="font-size: 22px; line-height: 45px;">1000 000 SO'M</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><b>8 TA DARS</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><b>UMUMIY CHAT</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><b>SERTIFIKAT</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><b>DARSLARGA DOSTUP 2 OY</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><b>KURS BITIRUV MAROSIMIDA ISHTIROK ETISH HUQUQI</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><b>DILOROM QARSHIBOYEVA BILAN KO'RISHIB, SUHBAT QILISH IMKONIYATI</b><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2 mt-4">
                                <a href="https://t.me/Mukhlisichka"  class="btn btn-primary py-2 px-4">Kursni xarid qilish</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h3 class="text-primary mb-1">EKSPERT TARIFI</h3>
                        </div>
                        <div class="p-5 pt-0" style="height:80vh;">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 26px; line-height: 45px;">790 000 SO'M</small>
                                <br>
                                <small class="align-top text-decoration-line-through" style="font-size: 22px; line-height: 45px;">1500 000 SO'M</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><b>8 TA DARS</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><b>UMUMIY CHAT</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><b>DARSLARGA CHEKSIZ DOSTUP</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><b>SERTIFIKAT</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><b>KURS BITIRUV MAROSIMIDA ISHTIROK ETISH HUQUQI</b><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2 mt-4">
                                <a href="https://t.me/Mukhlisichka"  class="btn btn-primary py-2 px-4">Kursni xarid qilish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- Pricing Plan End -->

    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h3 class="fw-bold text-primary text-uppercase">Kursda o’tiladigan dars mavzulari:</h3>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="bordered">
                <h5 class="card-title text-center">1-blok</h5>
                <ol>
                    <li>So’zlarni erkin talaffuz qilishdagi muammolardan xalos bo’lish</li>
                    <li>Ovoz tembrini yaxshilashga oid mashqlar</li>
                    <li>Intonatsiyani yaxshilash</li>
                    <li>Dinamikani ushlash orqali yoqimli va ta'sirli ovozga ega bo'lish</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bordered">
                <h5 class="card-title text-center">2-blok</h5>
                <ol>
                    <li>Chiroyli muomala va munosabatlarga kirishish</li>
                    <li>Insonlarga ochilish va erkin muloqot qilish</li>
                    <li>Odamlarni manipulyatsiya qilish usullari</li>
                    <li>O'zimizga bo'lgan ishonchni oshirishga oid vazifalar</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="bordered">
                <h5 class="card-title text-center">3-blok</h5>
                <ol>
                    <li>Kuchli hayajon va qo'rquvdan xalos bo'lish</li>
                    <li>Nutq orgali insonlarning ishonchini qozonish sirlari</li>
                    <li>Xotira mashqlari</li>
                    <li>Improvizatsiyani rivolantirish usullari: (Amaliy mashg'ulotlar)</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bordered">
                <h5 class="card-title text-center">4-blok</h5>
                <ol>
                    <li>Kamera bilan ishlash</li>
                    <li>Sahna nutqini shakllantirish va rivolantirish</li>
                    <li>So'zga chiqqanda o'zini o'nglab olish sirlari</li>
                    <li>Auditoriyaning diqqat e'tiborini tortish va uni uzoq muddatga saqlab qolish</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="bordered ">
                <h5 class="card-title text-center">5-blok</h5>
                <ol>
                    <li>Omma oldiga chiqishdan avval ko'riladigan tayyorgarlik</li>
                    <li>Katta va kichik auditoriyada nutq so'zlash usullari</li>
                    <li>Estlar, nigoh va tana harakatlari uchun mashqlar</li>
                    <li>Korparativ nutqni shakllantirish va rivojlantirish</li>
                </ol>
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid bg-dark text-light mt-5" data-wow-delay="0.1s">
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
                                    <i class="fa fa-phone-alt me-2"></i><small class="me-3 text-light">+998 93 405 59
                                        50</small>
                                </a>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="https://t.me/diloromqarshiboyeva"
                                    target="_blank"><i class="fab fa-telegram fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2"
                                    href="https://www.facebook.com/dilorom.qarshiboyeva?mibextid=LQQJ4d"
                                    target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2"
                                    href="https://youtube.com/@DiloromQarshiboyeva" target="_blank"><i
                                        class="fab fa-youtube fw-normal"></i></a>
                                <a class="btn btn-primary btn-square"href="https://instagram.com/dilorom_qarshiboyeva?igshid=NTc4MTIwNjQ2YQ=="
                                    target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
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
                                <a class="text-light" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Xabar qoldirish</a>
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
                        <p class="mb-0">&copy; <a class="text-white border-bottom"
                                href="https://nuriba-academy.uz">nuriba-academy.uz</a> Barcha huquqlar himoyalangan.
                            Sayt tuzuvchi <a class="text-white border-bottom" href="https://t.me/ozodbek_shodiboyev">
                                Ozodbek Shodiboyev</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
