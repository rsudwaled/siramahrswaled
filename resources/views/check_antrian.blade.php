@extends('vendor.docmed.master')
@section('title', 'SIRAMAH-RS Waled')

@section('content')
    {{-- <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Check Antrian</h3>
                        <p><a href="index.html">Home /</a> Check Antrian</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Check Status Antrian</h3>
                        <p>Silahkan lakukan pengecekan antrian dengan memasukan kodebooking</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="single_department">
                        <div class="department_content">
                            <label for="kodebooking">
                                <b>Kode Boking</b>
                            </label>
                            <div class="input-group mb-3">
                                <input type="text" name="kodebooking" id="kodebooking" placeholder="Kode Booking Antrian"
                                    required class="form-control">
                                <div class="input-group-append">
                                    <button href="#" class="genric-btn primary cekKodebooking"><i
                                            class="ti-search"></i> Cek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8 col-lg-8 formAntrian">
                    <div class="single_department">
                        {{-- <div class="department_thumb">
                            <img src="img/department/1.png" alt="">
                        </div> --}}
                        <div class="department_content">
                            <h3>Status Antrian</h3>
                            <br>
                            <dl class="row">
                                <dt class="col-sm-3">Kode Booking</dt>
                                <dd class="col-sm-9 kodebooking"></dd>
                                <dt class="col-sm-3">Antrian</dt>
                                <dd class="col-sm-9 antrian"></dd>
                                <dt class="col-sm-3">Pasien</dt>
                                <dd class="col-sm-9 pasien"></dd>
                                <dt class="col-sm-3">No RM</dt>
                                <dd class="col-sm-9 norm"></dd>
                                <dt class="col-sm-3">Poliklinik</dt>
                                <dd class="col-sm-9 poliklinik"></dd>
                                <dt class="col-sm-3">Dokter</dt>
                                <dd class="col-sm-9 dokter"></dd>
                                <dt class="col-sm-3">Status</dt>
                                <dd class="col-sm-9 status"></dd>
                                <dt class="col-sm-3">Keterangan</dt>
                                <dd class="col-sm-9 keterangan"></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="mb-30">Daftar Antrian</h3>
                <div class="single_department">
                    <div class="department_content">
                        <label for="kodebooking">
                            <b>Berdasarkan Tanggal</b>
                        </label>
                        <div class="input-group mb-3">
                            <input type="text" name="kodebooking" id="kodebooking" placeholder="Kode Booking Antrian"
                                required class="form-control">
                            <div class="input-group-append">
                                <button href="#" class="genric-btn primary"><i class="ti-search"></i> Cek</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Countries</div>
                            <div class="visit">Visits</div>
                            <div class="percentage">Percentages</div>
                        </div>
                        <div class="table-row">
                            <div class="serial">01</div>
                            <div class="country">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $(".formAntrian").hide();
            $(".cekKodebooking").on("click", function() {
                $.LoadingOverlay("show");
                $(".formAntrian").hide();
                var kodebooking = $('#kodebooking').val();
                var url = "http://103.158.96.141/siramah/api/cekKodebooking?kodebooking=" + kodebooking;
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if (data.metadata.code == 200) {
                            var antrian = data.response;
                            $(".formAntrian").show();
                            $(".kodebooking").html(antrian.kodebooking);
                            $(".antrian").html(antrian.angkaantrean + ' / ' + antrian
                                .nomorantrean);
                            $(".pasien").html(antrian.namapasien);
                            $(".status").html(antrian.status);
                            $(".norm").html(antrian.norm);
                            $(".poliklinik").html(antrian.namapoli);
                            $(".dokter").html(antrian.namadokter);
                            $(".keterangan").html(antrian.keterangan);
                            Swal.fire({
                                title: 'Berhasil',
                                text: 'Kodebooking berhasil ditemukan ' + antrian
                                    .kodebooking,
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            });
                        } else {
                            Swal.fire({
                                title: 'Maaf',
                                text: data.metadata.message,
                                icon: 'error',
                                confirmButtonText: 'Tutup'
                            });
                        }
                        $.LoadingOverlay("hide");

                    },
                    error: function(data) {
                        console.log(data);
                        alert('Error');
                        $.LoadingOverlay("hide");
                    },
                });
            });
            $("#jenispasien").on("change", function() {
                var jenispasien = $(this).val();
                if (jenispasien == 'JKN') {
                    $(".formPoliklinik").hide()
                    $(".formTanggalPeriksa").show()
                    $(".formJenisKunjungan").show();
                    $(".cekJadwalPoli").hide();
                    $(".cekNomorReferensi").show();
                } else {
                    $(".formPoliklinik").show()
                    $(".formTanggalPeriksa").show()
                    $(".formJenisKunjungan").hide();
                    $(".cekJadwalPoli").show();
                    $(".cekNomorReferensi").hide();
                }
            });
        });
    </script>
@endsection
