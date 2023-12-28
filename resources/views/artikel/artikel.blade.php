@extends('main')
@section('content')

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
    <div class="card-list">
        @if (isset($artikel)AND $artikel->count()>0)
            @foreach ($artikel as $item)
            <div class="card" style="width: 18rem;">
                @if ($item->foto)
                    <img src="{{ url('public/Image/'.$item->foto) }}"style="height: auto; width: auto;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$item->judul}}</h5>
                    <p class="card-text">{{$item->isi}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            
                    <!-- <p>{{$item->nama_penulis}}</p>
                    <p>{{$item->title_penulis}}</p>
                    <p>{{$item->isi}}</p> -->

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