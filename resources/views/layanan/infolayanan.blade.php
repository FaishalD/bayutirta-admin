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
                <input name="judul" class="form-control" id="exampleFormControlInput1"
                    placeholder="Tulis Nama Layanan...">
            </div>
            <div className="row align-items-center">
                <label for="formFile" class="form-label">
                    Kategori
                </label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="--" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                        data-bs-target="#exampleModal">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="divider w-100"></div>
            <div className="row align-items-center">
                <label for="formFile" class="form-label">
                    Merk Handphone yang dilayani
                </label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Tambahkan Merk
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Merk Handphone</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Merk HP 1
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batalkan</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider w-100"></div>
            <div class="row align-items-center">
                <label for="exampleFormControlTextarea1" class="form-label">
                    Range Harga
                </label>
                <div class="d-flex">     
                    <div class="input-group mb-3">
                        Harga Terendah
                        <span class="input-group-text" id="basic-addon1">Rp</span>
                        <input type="text" class="form-control" placeholder="" aria-label=""
                            aria-describedby="basic-addon1">
                    </div>    
                    <div class="input-group mb-3">
                        Harga Tertinggi
                        <span class="input-group-text" id="basic-addon1">Rp</span>
                        <input type="text" class="form-control" placeholder="" aria-label=""
                            aria-describedby="basic-addon1">
                    </div>
                </div>
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