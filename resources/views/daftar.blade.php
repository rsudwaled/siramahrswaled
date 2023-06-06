@extends('vendor.docmed.master')
@section('title', 'SIRAMAH-RS Waled')

@section('content')
    {{-- <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Daftar Rawat Jalan</h3>
                        <p><a href="index.html">Home /</a> Daftar Rawat Jalan</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Formulir Pendaftaran</h2>
                    <p>Silahkan isi formulir dibawah ini :</p>

                </div>
                <div class="col-md-8">
                    <form id="formDaftarWeb" name="formDaftarWeb">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nik">
                                        <b>NIK Pasien</b>
                                    </label>
                                    <input type="text" name="nik" id="nik" placeholder="NIK Pasien" required
                                        class="single-input form-control mb-3">
                                </div>
                                <div class="form-group formPasien">
                                    <label for="nama">
                                        <b>Nama Pasien</b>
                                    </label>
                                    <input type="text" name="namapasien" id="namapasien" placeholder="Nama Pasien"
                                        required readonly class="single-input form-control mb-3">
                                </div>
                                <div class="form-group formPasien">
                                    <label for="norm">
                                        <b>No. Rekam Medis</b>
                                    </label>
                                    <input type="text" name="norm" id="norm" placeholder="No RM Pasien" required
                                        readonly class="single-input form-control mb-3">
                                </div>
                                <div class="form-group formPasien">
                                    <label for="nomorkartu">
                                        <b>No. Kartu BPJS</b>
                                    </label>
                                    <input type="text" name="nomorkartu" id="nomorkartu" placeholder="Nomor Kartu BPJS"
                                        required readonly class="single-input form-control mb-3">
                                </div>
                                <div class="form-group formPasien">
                                    <label for="nohp">
                                        <b>No. HP / Whatsapp</b>
                                    </label>
                                    <input type="text" name="nohp" id="nohp" placeholder="No HP Pasien" required
                                        class="single-input form-control mb-3">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group formJenispasien">
                                    <label for="jenispasien">
                                        <b>Jenis Pasien</b>
                                    </label>
                                    <select class="single-input form-control mb-3" id="jenispasien" name="jenispasien">
                                        <option selected disabled>Pilih Jenis Pasien</option>
                                        <option value="JKN">Pasien BPJS</option>
                                        <option value="NON-JKN">Pasien UMUM</option>
                                    </select>
                                </div>
                                <div class="form-group formPoliklinik">
                                    <label for="jenispasien">
                                        <b>Poliklinik</b>
                                    </label>
                                    <select class="single-input form-control mb-3" name="kodepoli" id="kodepoli">
                                        <option selected disabled>Pilih Poliklinik</option>
                                        {{-- @foreach ($polikliniks as $poli)
                                            <option value="{{ $poli->kodesubspesialis }}">{{ $poli->namasubspesialis }}
                                            </option>
                                        @endforeach --}}
                                    </select>
                                </div>
                                <div class="form-group formTanggalPeriksa">
                                    <label for="tanggalperiksa">
                                        <b>Tanggal Periksa</b>
                                    </label>
                                    <input id="tanggalperiksa" name="tanggalperiksa"
                                        class="single-input datepicker form-control mb-3" placeholder="Pick date">
                                </div>
                                <div class="form-group formJenisKunjungan">
                                    <label for="jeniskunjungan">
                                        <b>Jenis Kunjungan</b>
                                    </label>
                                    <select name="jeniskunjungan" id="jeniskunjungan"
                                        class="single-input form-control mb-3">
                                        <option selected disabled>Pilih Jenis Kunjungan</option>
                                        <option value="1">Rujukan FKTP</option>
                                        <option value="3">Surat Kontrol</option>
                                        <option value="4">Rujukan Antar RS</option>
                                    </select>
                                </div>
                                <div class="form-group formNomorReferensi">
                                    <label for="jenispasien">
                                        <b>No. Rujukan / Surat Kontrol</b>
                                    </label>
                                    <select class="single-input form-control mb-3" id="nomorreferensi" name="nomorreferensi">
                                        <option selected disabled>Pilih Nomor Referensi</option>
                                    </select>
                                </div>
                                <div class="form-group formDokter">
                                    <label for="jenispasien">
                                        <b>Jadwal Dokter</b>
                                    </label>
                                    <select name="kodedokter" id="kodedokter" class="single-input form-control mb-3">
                                        <option selected disabled>Pilih Jadwal Dokter</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-2 mb-5">
                            <div class="genric-btn warning circle cekPasien"><i class="ti-search"></i> Cek Pasien
                            </div>
                            <div class="genric-btn info circle btnDaftar"><i class="ti-plus"></i> Daftar</div>
                            <div class="genric-btn warning circle cekJadwalPoli"><i class="ti-search"></i> Cek Jadwal</div>
                            <div class="genric-btn warning circle cekNomorReferensi"><i class="ti-search"></i> Cek Rujukan /
                                Srt. Kontrol
                            </div>
                            <a class="genric-btn danger circle preloader" href="{{ route('daftar') }}"><i
                                    class="ti-reload"></i> Reset Formulir</a>
                        </div>
                    </form>
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
            $(".withLoad").click(function() {
                $.LoadingOverlay("show");
            });
            $(".formPasien").hide();
            $(".formJenispasien").hide();
            $(".formPoliklinik").hide();
            $(".formTanggalPeriksa").hide();
            $(".formJenisKunjungan").hide();
            $(".formNomorReferensi").hide();
            $(".formDokter").hide();
            $(".btnDaftar").hide();
            $(".cekJadwalPoli").hide();
            $(".cekNomorReferensi").hide();
            $(".cekPasien").on("click", function() {
                $.LoadingOverlay("show");
                var nik = $('#nik').val();
                var url = "http://103.158.96.141/siramah/api/cekPasien?nik=" + nik;
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: 'json',
                    success: function(data) {
                        if (data.metadata.code == 200) {
                            var pasien = data.response;
                            $(".formPasien").show();
                            $(".formJenispasien").show();
                            $(".cekPasien").hide();
                            $("#nomorkartu").val(pasien.no_Bpjs);
                            $("#norm").val(pasien.no_rm);
                            $("#namapasien").val(pasien.nama_px);
                            $("#nohp").val(pasien.no_hp);
                            $("#nik").prop("readonly", true);
                            var url = "http://sim.rsudwaled.id/siramah/api/poliklinik_aktif";
                            $.ajax({
                                url: url,
                                type: "GET",
                                dataType: 'json',
                                success: function(data) {
                                    if (data.metadata.code == 200) {
                                        var polikliniks = data.response;
                                        polikliniks.forEach(element => {
                                            $('#kodepoli').append($(
                                                '<option>', {
                                                    value: element
                                                        .kodesubspesialis,
                                                    text: element
                                                        .namasubspesialis
                                                }));
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
                                    alert('Error');
                                    $.LoadingOverlay("hide");
                                },
                            });
                            Swal.fire({
                                title: 'Berhasil',
                                text: 'Data pasien ditemukan atas nama ' + pasien
                                    .nama_px,
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
            // umum
            $(".cekJadwalPoli").on("click", function() {
                $.LoadingOverlay("show");
                var kodepoli = $('#kodepoli').val();
                var tanggal = $('#tanggalperiksa').val();
                var url = "http://103.158.96.141/siramah/api/cekJadwalPoli";
                var data = {
                    kodepoli: kodepoli,
                    tanggal: tanggal,
                };
                $('#kodedokter')
                    .empty()
                    .append('<option selected disabled>Pilih Jadwal Dokter</option>');
                $.ajax({
                    url: url,
                    data: data,
                    type: "GET",
                    dataType: 'json',
                    success: function(data) {
                        if (data.metadata.code == 200) {
                            var jadwal = data.response;
                            $(".formDokter").show();
                            $(".btnDaftar").show();
                            jadwal.forEach(element => {
                                $('#kodedokter').append($('<option>', {
                                    value: element.kodedokter,
                                    text: element.namadokter
                                }));
                            });
                            Swal.fire({
                                title: 'Success',
                                text: 'Jadwal dokter poliklinik ditemukan ada ' + data
                                    .response.length + ' dokter',
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
                        alert('Error');
                        $.LoadingOverlay("hide");
                    },
                });
            });
            // jkn
            $(".cekNomorReferensi").on("click", function() {
                $.LoadingOverlay("show");
                var jeniskunjungan = $('#jeniskunjungan').val();
                var tanggal = $('#tanggalperiksa').val();
                var nomorkartu = $('#nomorkartu').val();
                switch (jeniskunjungan) {
                    case '1':
                        var data = {
                            nomorkartu: nomorkartu,
                            tanggal: tanggal,
                        };
                        $.ajax({
                            url: "http://103.158.96.141/siramah/api/cekRujukanPeserta",
                            data: {
                                nomorkartu: nomorkartu,
                                tanggal: tanggal,
                            },
                            type: "GET",
                            dataType: 'json',
                            success: function(data) {
                                if (data.metadata.code == 200) {
                                    var rujukans = data.response;
                                    rujukans.forEach(element => {
                                        $('#nomorreferensi').append('<option value="' +
                                            element.noKunjungan +
                                            '" data-kodepoli="' + element
                                            .poliRujukan.kode + '" >' + element
                                            .noKunjungan + ' POLI ' + element
                                            .poliRujukan.nama + '</option>');
                                    });
                                    $(".formNomorReferensi").show();
                                    $(".cekNomorReferensi").hide();
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
                                alert('Error');
                                $.LoadingOverlay("hide");

                            },
                        });
                        break;
                    case '4':
                        var data = {
                            nomorkartu: nomorkartu,
                            tanggal: tanggal,
                        };
                        $.ajax({
                            url: "http://103.158.96.141/siramah/api/cekRujukanRSPeserta",
                            data: {
                                nomorkartu: nomorkartu,
                                tanggal: tanggal,
                            },
                            type: "GET",
                            dataType: 'json',
                            success: function(data) {
                                if (data.metadata.code == 200) {
                                    var rujukans = data.response;
                                    rujukans.forEach(element => {
                                        $('#nomorreferensi').append('<option value="' +
                                            element.noKunjungan +
                                            '" data-kodepoli="' + element
                                            .poliRujukan.kode + '" >' + element
                                            .noKunjungan + ' POLI ' + element
                                            .poliRujukan.nama + '</option>');
                                    });
                                    $(".formNomorReferensi").show();
                                    $(".cekNomorReferensi").hide();
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
                                alert('Error');
                                $.LoadingOverlay("hide");
                            },
                        });
                        break;

                    default:
                        alert('Silahkan pilih jenis kunjungan');
                        $.LoadingOverlay("hide");
                        break;
                }
            });
            $("#nomorreferensi").change(function() {
                var kodepoli = $(this).find(':selected').attr('data-kodepoli');
                $(".formPoliklinik").show();
                $("#kodepoli").val(kodepoli).change();
                $(".cekJadwalPoli").show();
            });
            $(".btnDaftar").on("click", function() {
                $.LoadingOverlay("show");
                var url = "http://103.158.96.141/siramah/api/ambilAntrianWeb";
                var data = $('#formDaftarWeb').serialize();
                $.ajax({
                    url: url,
                    data: data,
                    type: "GET",
                    dataType: 'json',
                    success: function(data) {
                        if (data.metadata.code == 200) {
                            Swal.fire({
                                title: 'Success',
                                text: 'Berhasil booking pendaftaran online',
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                window.location.href =
                                    "http://103.158.96.141/siramah/api/checkAntrian?kodebooking=" +
                                    data
                                    .response.kodebooking;
                            })
                        } else if (data.metadata.code == 409) {
                            Swal.fire({
                                title: 'Maaf',
                                text: data.metadata.message,
                                icon: 'error',
                                confirmButtonText: 'Tutup'
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
                        alert('Error');
                        $.LoadingOverlay("hide");
                    },
                });
            });
        });
    </script>
@endsection
