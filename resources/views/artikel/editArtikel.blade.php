@extends('main')
@section('content')
<div class="editArtikel">
    <div class="title">Untitled Artikel</div>
        <div class="info-container">
            <div class="info">
                <form action="addArtikel" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h4>Detail Informasi Artikel</h4>
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Upload Thumbnail Artikel
                    </label>
                    <input class="form1 form-control" type="file" name="foto" id="formFile">
                </div>
                
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Judul Artikel
                    </label>
                    <input
                        name="judul"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Tulis Judul Artikel">
                </div>
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Nama Penulis
                    </label>
                    <input
                        name="nama_penulis"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Tulis Nama Penulis">
                </div>
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Title Penulis
                    </label>
                    <input
                        name="title_penulis"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Tulis Title Penulis">
                </div>
                <div class="row align-items-center">
                    <label for="exampleFormControlTextarea1" class="form-label">
                        Isi Artikel
                    </label>
                    <textarea
                        name="isi"
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="buttonGroup">
                    <a href="/artikel" class="btn btn btn-outline-danger" role="button">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-outline-success">
                        Simpan</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection