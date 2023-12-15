@extends('main')
@section('artikel')

<div class="artikel">
    <div class="titleWarp">
        <div class="artikelTitle">Artikel</div>
        <a href="/artikel/edit" class="btn btn-primary btn-1" role="button">
            <ion-icon name="add-circle" class="icon-1"></ion-icon>
            Tambah Artikel
        </a>
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
        @if (isset($artikel))
            @foreach ($artikel as $item)
                <div >
                    <h1>{{$item->judul}}</h1>
                    <p>{{$item->nama_penulis}}</p>
                    <p>{{$item->title_penulis}}</p>
                    <p>{{$item->isi}}</p>
                </div>
            @endforeach
        @else
            <div class="picture">
                <img src="/img/ALT 4.png" alt="noservice">
            </div>
            <div class="message text-center">
                <h3 class="fw-bold">Belum ada artikel yang dibuat</h3>
                <p>Buat dan atur artikel yang bisa diakses pelangganmu!</p>
                <p>Klik button “Tambah artikel” di atas kanan halaman ini</p>
            </div>
        @endif
    </div>
</div>


@endsection