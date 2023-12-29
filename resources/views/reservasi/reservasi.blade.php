@extends('main')
@section('content')
<div class="dashboard-admin">
    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-s-9">
                <div class="content">
                    <div class="titleWarp">
                        <div class="layananTitle">Reservasi</div>
                    </div>
                    <div class="catSort">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-primary
                            {{ Request::is('reservasi') ? 'active' : '' }}">Semua</button>
                            <button type="button" class="btn btn-outline-primary">Hari ini</button>
                            <button type="button" class="btn btn-outline-primary">Minggu ini</button>
                            <button type="button" class="btn btn-outline-primary">Bulan ini</button>
                        </div>
                    </div>
                        <div class="content-order">
                            <h5 class="font-jakarta">19 Desember 2023</h5>
                            <div class="service">
                                <div class="time">
                                    <p>16.30 WIB</p>
                                    <h5>Layanan Service Layar Handphone Android</h5>
                                </div>
                                <div class="desc">
                                    <div class="type">
                                        <p>Tipe handphone</p>
                                        <h5>Sony Experia E34</h5>
                                    </div>
                                    <div class="status">
                                        <p>Status Layanan</p>
                                        <h5>Belum Dikonfirmasi</h5>
                                    </div>
                                    <button type="button" class="btn confirm" data-bs-toggle="modal" data-bs-target="#exampleModal">Beri Konfirmasi</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reservasi Layanan</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-4">.col-md-4</div>
                                                                <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                                                                <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-9">
                                                                    Level 1: .col-sm-9
                                                                    <div class="row">
                                                                        <div class="col-8 col-sm-6">
                                                                            Level 2: .col-8 .col-sm-6
                                                                        </div>
                                                                        <div class="col-4 col-sm-6">
                                                                            Level 2: .col-4 .col-sm-6
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger">Tolak</button>
                                                    <button type="button" class="btn btn-primary">Terima</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection