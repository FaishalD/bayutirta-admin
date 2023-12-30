@extends('mainLayanan')
@section('content')
<div class="editArtikel">
    <div class="title">Untitled Layanan</div>
        <div class="info-container">
            <form action="addArtikel" class="info" method="POST" enctype="multipart/form-data">
                    <h4>Detail Informasi Layanan</h4>
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Upload Thumbnail Layanan
                    </label>
                    <input class="form1 form-control" type="file" name="foto" id="formFile">
                </div>
                
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Nama Layanan
                    </label>
                    <input
                        name="judul"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Tulis Nama Layanan...">
                </div>
                <div className="row align-items-center cat">
                    <label for="formFile" class="form-label">
                        Kategori
                    </label>
                    <input
                        name="nama_penulis"
                        class="form-control" 
                        id="exampleFormControlInput1"
                        placeholder="--">
                </div>
                <div class="divider w-100"></div>
                <div className="row align-items-center">
                    <label for="formFile" class="form-label">
                        Merk Handphone yang dilayani
                    </label>
                    <input
                        name="title_penulis"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Tulis Title Penulis">
                </div>
                <div class="divider w-100"></div>
                <div class="row align-items-center">
                    <label for="exampleFormControlTextarea1" class="form-label">
                        Range Harga
                    </label>
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
@endsection