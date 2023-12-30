<div class="pengaturan col-3">
    <div class="row gap-4">
        <div class="basic">
            <h5>Pengaturan Dasar</h5>
            <div class="list-group">
                <a href="/layanan/general" class="list-group-item list-group-item-action active
                        {{ Request::is('layanan.infolayanan') ? 'active' : '' }}">
                    Informasi Umum
                </a>
                <a href="/layanan/deskripsi" class="list-group-item list-group-item-action
                        {{ Request::is('layanan.editLayanan') ? 'active' : '' }}">
                    Deskripsi Layanan
                </a>
            </div>
        </div>
        <div class="additional">
            <h5>Pengaturan Tambahan</h5>
            <ul class="list-group">
                <li class="list-group-item form-check form-switch form-check-reverse">
                    <a href='#' class="form-check-label" for="firstCheckboxStretched">Additional Info</a>
                    <input class="form-check-input" type="checkbox" value="" id="firstCheckboxStretched">
                </li>
                <li class="list-group-item form-check form-switch form-check-reverse">
                    <label class="form-check-label" for="firstCheckboxStretched">Review</label>
                    <input class="form-check-input" type="checkbox" value="" id="firstCheckboxStretched">
                </li>
                <li class="list-group-item form-check form-switch form-check-reverse">
                    <label class="form-check-label" for="firstCheckboxStretched">QNA</label>
                    <input class="form-check-input" type="checkbox" value="" id="firstCheckboxStretched">
                </li>
            </ul>
        </div>
        <div class="divider w-100"></div>
        <a href="" class="btn btn-primary btn-1" role="button">
            Publish Layanan
        </a>
    </div>
</div>