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
                    <img src="{{ url('public/images/'.$item->foto) }}"style="height: auto; width: auto;">
                @endif
                <div class="card-body">
                    <h4>{{$item->judul}}</h4>
                    <p class="card-text">{{$item->isi}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ url("/artikel/delete/$item->id_artikel") }}"><button type="button" class="btn btn-sm btn-danger">Delete</button></a>
                            <button type="button" class="btn btn-sm btn-success">Edit</button>
                        </div>
                        <small class="text-body-secondary">9 mins</small>
                    </div>
                </div>
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
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>


@endsection