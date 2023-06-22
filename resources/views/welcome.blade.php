@extends('vendor.docmed.master')
@section('title', 'SIRAMAH-RS Waled')

@section('content')
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center"
                style="background-image: linear-gradient(45deg, #f1fdfd, rgba(223, 251, 255, 0.685)), url({{ asset('rsudwaled/img/rsudwaled-depan.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Daftar Rawat Jalan</span> <br>
                                    RSUD Waled </h3>
                                <p>Kini di RSUD Waled dapat mendaftar antrian untuk pasien rawat jalan secara online.</p>
                                <a href="{{ route('daftar') }}" class="boxed-btn3">Daftar Online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center"
                style="background-image: linear-gradient(45deg, #f1fdfd, rgba(223, 251, 255, 0.685)), url({{ asset('rsudwaled/img/rswaled-igd.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Check Antrian</span> <br>
                                    RSUD Waled </h3>
                                <p>
                                    Jika anda sudanh memiliki kode booking antrian ,silahkan cek status antrian anda.
                                    <br>
                                    Anda juga bisa membatalkan antrian dengan klik tombol dibawah ini.
                                </p>
                                <a href="{{ route('check_antrian') }}" class="boxed-btn3">Check Antrian</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center "
                style="background-image: linear-gradient(45deg, #f1fdfd, rgba(223, 251, 255, 0.685)), url({{ asset('rsudwaled/img/rsudwaled-depan.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Surat Kontrol Online</span> <br>
                                    RSUD Waled</h3>
                                <p>
                                    Bagi pasien yang telah memiliki surat kontrol online, silahkan cek disni.
                                    <br>
                                    Anda juga dapat mengajukan perubahan jadwal kontrol anda yang telah terlewat.
                                </p>
                                <a href="#" class="boxed-btn3">Surat Kontrol Online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_start -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-electrocardiogram"></i>
                        </div>
                        <h3>Antrian Online</h3>
                        <p>Memudahkan pasien untuk mendaftar rawat jalan.</p>
                        <a href="{{ route('daftar') }}" class="boxed-btn3-white">Daftar Online</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-emergency-call"></i>
                        </div>
                        <h3>IGD 24 Jam</h3>
                        <p>Layanan Instalasi Gawat Darurat siap sedia 24 jam</p>
                        <a href="tel:0231661275" class="boxed-btn3-white">0231 661275</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-first-aid-kit"></i>
                        </div>
                        <h3>Rawat Jalan</h3>
                        <p>Tersedia beberapa poliklinik untuk pasien rawat jalan.</p>
                        <a href="#" class="boxed-btn3-white">Jadwal Rawat Jalan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/watch?v=oRj04KcUmuU"
                            ></iframe> --}}

                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/8IZ9yfJq_vk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        {{-- <div class="thumb_1">
                            <img src="{{ asset('rsudwaled/img/rswaled-igd.jpg') }}" alt="">
                        </div>
                        <div class="thumb_2">
                            <img src="{{ asset('rsudwaled/img/rsudwaled-depan.jpg') }}" alt="">
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Selamat Datang di RSUD Waled</h2>
                        <h3>Melayani Dengan Sepenuh Hati</h3>
                        <p>RSUD Waled adalah rumah sakit umum daerah milik Pemerintah dan merupakan salah satu rumah sakit
                            tipe B yang terletak di wilayah Cirebon</p>
                        <ul>
                            <li> <i class="flaticon-right"></i> IGD 24 Jam </li>
                            <li> <i class="flaticon-right"></i> Poliklinik Rawat Jalan & Pelayanan Rawat Inap</li>
                            <li> <i class="flaticon-right"></i> Laboratorium & Radiologi</li>
                            <li> <i class="flaticon-right"></i> Instalasi Penunjang Lainnya</li>
                        </ul>
                        {{-- <a href="#" class="boxed-btn3-white-2">Learn More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Our Departments</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. <br>
                            It esteems luckily or picture placing drawing. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('docmed/img/department/1.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Eye Care</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('docmed/img/department/2.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Physical Therapy</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('docmed/img/department/3.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Dental Care</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('docmed/img/department/4.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Diagnostic Test</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('docmed/img/department/5.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Skin Surgery</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('docmed/img/department/6.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Surgery Service</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="business_expert_area">
        <div class="business_tabs_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                    role="tab" aria-controls="home" aria-selected="true">Excellent Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Qualified
                                    Doctors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Emergency
                                    Departments</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or motionless
                                        on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('docmed/img/about/business.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or motionless
                                        on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('docmed/img/about/business.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or motionless
                                        on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('docmed/img/about/business.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="expert_doctors_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="doctors_title mb-55">
                        <h3>Expert Doctors</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="expert_active owl-carousel">
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="{{ asset('docmed/img/experts/1.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="{{ asset('docmed/img/experts/2.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="{{ asset('docmed/img/experts/3.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="{{ asset('docmed/img/experts/4.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="{{ asset('docmed/img/experts/1.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="{{ asset('docmed/img/experts/2.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Alamat dan Kontak</h2>
                </div>
                <div class="col-lg-8 mb-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.250118982125!2d108.7185692!3d-6.9130052!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f08ce7d8c2081%3A0xd5151423db71bc02!2sRSUD%20Waled%20Cirebon!5e0!3m2!1sid!2sid!4v1686207703560!5m2!1sid!2sid"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Name"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form> --}}
                </div>
                <div class="col-md-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>RSUD Waled Kab. Cirebon</h3>
                            <p>Jl. Prabu Kiansantang No.4, Kec. Waled, Kab. Cirebon, Jawa Barat 45187</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>0898-3311-118</h3>
                            <p>Humas RSUD Waled</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>brsud.waled@gmail.com</h3>
                            <p>Email RSUD Waled</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4844580717257089"
        crossorigin="anonymous"></script>
    <!-- iklan dirs waled -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4844580717257089" data-ad-slot="9653112552"
        data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
@endsection
