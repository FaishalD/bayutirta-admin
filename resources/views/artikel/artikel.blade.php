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
                <div class="row row-cols-1 row-cols-md-3 g-4 katalog-1">
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->judul}}</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                                        content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!-- <p>{{$item->nama_penulis}}</p>
                    <p>{{$item->title_penulis}}</p>
                    <p>{{$item->isi}}</p> -->
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