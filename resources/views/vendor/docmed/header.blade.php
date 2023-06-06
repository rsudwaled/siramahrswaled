    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <div class="row align-items-center">
                                        <img style="max-height: 50px;" src="{{ asset('rsudwaled/rswaledico.png') }}"
                                            alt="">
                                        <h2 style="font-weight: 1000;">RSUD Waled</h2>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">home</a></li>
                                        <li><a href="Department.html">Department</a></li>
                                        <li><a href="#">Antrian <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('daftar') }}">Daftar Antrian</a></li>
                                                <li><a href="{{ route('check_antrian') }}">Check Antrian</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Jadwal <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Jadwal Rawat Jalan</a></li>
                                                <li><a href="about.html">Jadwal Operasi</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="Doctors.html">Doctors</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Daftar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
