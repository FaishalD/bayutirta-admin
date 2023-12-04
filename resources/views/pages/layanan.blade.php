@extends('main')
@section('layanan')

<div class="layanan">
    <div class="titleWarp">
        <div class="layananTitle">Layanan</div>
        <button type="button" class="btn btn-primary btn-1">
            <ion-icon name="add-circle" class="icon-1"></ion-icon>
            Tambah Layanan
        </button>
    </div>
    <div class="catSort">
        <button type="button" class="btn btn-primary btn-2">
            <ion-icon name="library"></ion-icon>
            Category
        </button>
        <button type="button" class="btn btn-primary btn-2">
            <ion-icon name="funnel"></ion-icon>
            Sort by
        </button>
    </div>
    <div class="katalog">
        <div class="picture">
            <img src="/img/ALT 4.png" alt="noservice">
        </div>
        <div class="message text-center">
            <h3 class="fw-bold">Belum ada layanan yang dibuat</h3>
            <p>Buat dan atur layanan yang bisa diakses pelangganmu!</p>
            <p>Klik button “Tambah Layanan” di atas kanan halaman ini</p>
        </div>
    </div>
</div>


@endsection