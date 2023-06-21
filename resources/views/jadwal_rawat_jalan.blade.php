@extends('vendor.docmed.master')
@section('title', 'Check Antrian')

@section('content')
    <div class="business_expert_area">
        <div class="business_tabs_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link preloader {{ $request->hari == 1 ? 'active' : '' }}"
                                    href="?hari=1">Senin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link preloader {{ $request->hari == 2 ? 'active' : '' }}"
                                    href="?hari=2">Selasa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link preloader {{ $request->hari == 3 ? 'active' : '' }}"
                                    href="?hari=3">Rabu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link preloader {{ $request->hari == 4 ? 'active' : '' }}"
                                    href="?hari=4">Kamis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link preloader {{ $request->hari == 5 ? 'active' : '' }}"
                                    href="?hari=5">Jumat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link preloader {{ $request->hari == 6 ? 'active' : '' }}"
                                    href="?hari=6">Sabtu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-md-12">
                                <div class="business_info">

                                    @if ($jadwals)
                                        <div class="icon">
                                            <i class="flaticon-first-aid-kit"></i>
                                        </div>
                                        <h3>Jadwal Poliklinik</h3>
                                        <p>
                                            Jadwal libur mengikuti kalender nasional dan jadwal dokter dapat berubah
                                            sewaktu-waktu sesuai kondisi.
                                        </p>
                                        <table class="table table-hover mt-3">
                                            <thead>
                                                <tr class="table-secondary">
                                                    <th scope="col">Poliklinik</th>
                                                    <th scope="col">Dokter</th>
                                                    <th scope="col">Jam Praktek</th>
                                                    <th scope="col">Kapasitas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($jadwals as $item)
                                                    <tr class="{{ $item->libur ? 'table-danger' : '' }}">
                                                        <td>{{ strtoupper($item->namasubspesialis) }}</td>
                                                        <td>{{ $item->namadokter }}</td>
                                                        <td>{{ $item->jadwal }}</td>
                                                        <td>{{ $item->kapasitaspasien }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
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
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(function() {
            $(".preloader").on("click", function() {
                $.LoadingOverlay("show");
            });
        });
    </script>
@endsection
