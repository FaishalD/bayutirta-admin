@extends('main')
@section('content')
<div class="editArtikel">
    <div class="title">Untitled Layanan</div>
        <div class="info-container">
            <div class="info">
                <h4>Detail Informasi Layanan</h4>
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Upload Thumbnail Artikel
                    </label>
                    <input class="form1 form-control" type="file" id="formFile">
                </div>
                
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Judul Artikel
                    </label>
                    <input
                        type="email"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Tulis Judul Artikel">
                </div>
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Nama Penulis
                    </label>
                    <input
                        type="email"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Tulis Nama Penulis">
                </div>
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Title Penulis
                    </label>
                    <input
                        type="email"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Tulis Title Penulis">
                </div>
                <div class="row align-items-center">
                    <label for="exampleFormControlTextarea1" class="form-label">
                        Isi Artikel
                    </label>
                    <textarea
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="buttonGroup">
                    <a href="/artikel" class="btn btn btn-outline-danger" role="button">
                        Batal
                    </a>
                    <button type="button" class="btn btn-outline-success">
                        Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection