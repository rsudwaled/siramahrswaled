        <!-- Emergency_contact start -->
        <div class="Emergency_contact">
            <div class="conatiner-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-xl-6">
                        <div
                            class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                            <div class="info">
                                <h3>Kontak Layanan IGD</h3>
                                <p>Silahkan hubungi kami.</p>
                            </div>
                            <div class="info_button">
                                <a href="tel:0231661275" class="boxed-btn3-white">0231 661275</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div
                            class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                            <div class="info">
                                <h3>Daftar Online</h3>
                                <p>Layanan daftar online rawat jalan.</p>
                            </div>
                            <div class="info_button">
                                <a href="{{ route('daftar') }}" class="boxed-btn3-white">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Emergency_contact end -->

        <!-- footer start -->
        <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="{{ route('welcome') }}">
                                        <div class="row align-items-center">
                                            <img style="max-height: 50px;" src="{{ asset('rsudwaled/rswaledico.png') }}"
                                                alt="">
                                            <h1 class="ml-3" style="font-weight: 1000; color: white;">RSUD Waled</h1>
                                        </div>
                                        {{-- <img style="max-width: 75px" src="{{ asset('rsudwaled/rswaledico.png') }}" alt=""> --}}
                                    </a>
                                </div>
                                <p>
                                    RSUD Waled adalah rumah sakit umum daerah milik Pemerintah dan merupakan salah satu
                                    rumah sakit
                                    tipe B yang terletak di wilayah Cirebon
                                </p>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/brsudwaled/">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.youtube.com/@rsudwaledkab.cirebon2139">
                                                <i class="ti-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Departments
                                </h3>
                                <ul>
                                    <li><a href="{{ route('daftar') }}">Daftar Rawat Jalan</a></li>
                                    <li><a href="{{ route('check_antrian') }}">Check Antrian</a></li>
                                    <li><a href="#">Dental</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Useful Links
                                </h3>
                                <ul>
                                    <li><a href="{{ route('daftar') }}">Daftar Rawat Jalan</a></li>
                                    <li><a href="{{ route('check_antrian') }}">Check Antrian</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Address
                                </h3>
                                <p>
                                    Jl. Prabu Kiansantang No.4, Kec. Waled, Kab. Cirebon, Jawa Barat 45187
                                    <br><br>
                                    0898-3311-118
                                    <br>
                                    brsud.waled@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | SIRMAH RSUD Waled <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                    href="https://www.youtube.com/@marwandhiaurrahman" target="_blank">IT RSUD Waled</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end  -->
