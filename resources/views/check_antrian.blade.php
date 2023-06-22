@extends('vendor.docmed.master')
@section('title', 'Check Antrian')

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
                        <form action="" method="GET">
                            <div class="department_content">
                                <label for="kodebooking">
                                    <b>Kode Boking</b>
                                </label>
                                <div class="input-group mb-3">
                                    <input type="text" name="kodebooking" id="kodebooking"
                                        value="{{ $request->kodebooking }}" placeholder="Kode Booking Antrian" required
                                        class="form-control">
                                    <div class="input-group-append">
                                        <button type="submit" class="genric-btn primary cekKodebooking"><i
                                                class="ti-search"></i> Cek</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if ($antrian)
                    <div class="col-xl-8 col-md-8 col-lg-8 formAntrian">
                        <div class="single_department">

                            <div class="department_content">
                                <h3>Status Antrian</h3>
                                <br>
                                <div class="alert alert-success" role="alert">
                                    Silahkan screenshot QR Code dibawah ini untuk memudahkan saat checkin.
                                </div>
                                {!! QrCode::size(250)->generate($antrian->kodebooking) !!}
                                <br>
                                <dl class="row">
                                    <dt class="col-sm-3">Kode Booking</dt>
                                    <dd class="col-sm-9 kodebooking">{{ $antrian->kodebooking }}</dd>
                                    <dt class="col-sm-3">Antrian</dt>
                                    <dd class="col-sm-9 antrian">{{ $antrian->angkaantrean }} / {{ $antrian->nomorantrean }}
                                    </dd>
                                    <dt class="col-sm-3">Pasien</dt>
                                    <dd class="col-sm-9 pasien">{{ $antrian->namapasien }}</dd>
                                    <dt class="col-sm-3">No RM</dt>
                                    <dd class="col-sm-9 norm">{{ $antrian->norm }}</dd>
                                    <dt class="col-sm-3">Poliklinik</dt>
                                    <dd class="col-sm-9 poliklinik">{{ $antrian->namapoli }}</dd>
                                    <dt class="col-sm-3">Dokter</dt>
                                    <dd class="col-sm-9 dokter">{{ $antrian->namadokter }}</dd>
                                    <dt class="col-sm-3">Status</dt>
                                    <dd class="col-sm-9 status">{{ $antrian->status }}</dd>
                                    <dt class="col-sm-3">Keterangan</dt>
                                    <dd class="col-sm-9 keterangan">{{ $antrian->keterangan }}</dd>
                                </dl>
                                <div class="genric-btn danger btnBatal">Batal Antrian</div>
                                {{-- <div class="genric-btn warning circle cekJadwalPoli"><i class="ti-search"></i> Cek Jadwal</div> --}}

                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4844580717257089"
        crossorigin="anonymous"></script>
    <!-- iklan dirs waled -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4844580717257089" data-ad-slot="9653112552"
        data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    {{-- <div class="whole-wrap">
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
    </div> --}}
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
            $(".cekKodebooking").on("click", function() {
                $.LoadingOverlay("show");
            });
            $(".btnBatal").on("click", function() {
                // Swal.fire({
                //     title: 'Apakah anda yakin ?',
                //     text: "Anda akan membatalkan antrian ?",
                //     icon: 'warning',
                //     showCancelButton: true,
                //     confirmButtonColor: '#3085d6',
                //     cancelButtonColor: '#d33',
                //     confirmButtonText: 'Yes, delete it!'
                // }).then((result) => {
                //     if (result.isConfirmed) {
                //         $.ajax({
                //             url: url,
                //             data: data,
                //             type: "GET",
                //             dataType: 'json',
                //             success: function(data) {
                //                 if (data.metadata.code == 200) {
                //                     Swal.fire({
                //                         title: 'Success',
                //                         text: 'Berhasil booking pendaftaran online',
                //                         icon: 'success',
                //                         confirmButtonText: 'Ok'
                //                     }).then((result) => {
                //                         window.location.href =
                //                             "{{ route('check_antrian') }}" +
                //                             "?kodebooking=" +
                //                             data
                //                             .response.kodebooking;
                //                     })
                //                 } else if (data.metadata.code == 409) {
                //                     Swal.fire({
                //                         title: 'Maaf',
                //                         text: data.metadata.message,
                //                         icon: 'error',
                //                         confirmButtonText: 'Tutup'
                //                     });
                //                 } else {
                //                     Swal.fire({
                //                         title: 'Maaf',
                //                         text: data.metadata.message,
                //                         icon: 'error',
                //                         confirmButtonText: 'Tutup'
                //                     });
                //                 }
                //                 $.LoadingOverlay("hide");
                //             },
                //             error: function(data) {
                //                 alert('Error');
                //                 $.LoadingOverlay("hide");
                //             },
                //         });
                //         Swal.fire(
                //             'Deleted!',
                //             'Your file has been deleted.',
                //             'success'
                //         )
                //     }
                // })


                Swal.fire({
                    title: 'Apa alasan anda ingin membatalkan antrian ?',
                    input: 'text',
                    inputAttributes: {
                        autocapitalize: 'off'
                    },
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Batalkan Antrian',
                    showLoaderOnConfirm: true,
                    preConfirm: (keterangan) => {
                        var keterangan = keterangan;
                        var kodebooking = $('#kodebooking').val();
                        return {
                            keterangan: keterangan,
                            kodebooking: kodebooking,
                        }
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.LoadingOverlay("show");
                        var kodebooking = result.value.kodebooking;
                        var keterangan = result.value.keterangan;
                        $.ajax({
                            url: "{{ route('batal_antrian') }}",
                            data: {
                                kodebooking: kodebooking,
                                keterangan: keterangan,
                            },
                            type: "GET",
                            dataType: 'json',
                            success: function(data) {
                                if (data.metadata.code == 200) {
                                    Swal.fire({
                                        title: 'Success',
                                        text: data.metadata.message,
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                    }).then((result) => {
                                        $.LoadingOverlay("show");
                                        window.location.href =
                                            "{{ route('check_antrian') }}" +
                                            "?kodebooking=" +
                                            kodebooking;
                                    })
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
                    }
                })
            });


        });
    </script>
@endsection
