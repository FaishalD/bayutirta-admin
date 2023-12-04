<div class="side">
    <div class="logo d-flex w-100 align-items-center gap-3">
        <img class= "logo-1"src="/img/Vector.png" alt="Logo" />
        Bayu Tirta 
    </div>
    <div class="divider w-100"></div>
    <div class="menu w-100 gap-2">
        <a
            href="/dashboard"
            class=" menu-col d-flex w-100 align-items-center gap-3 p-3
            {{ Request::is('dashboard') ? 'active' : '' }} ">
            <ion-icon name="grid"></ion-icon>
            Dashboard
        </a>
        <a
            href="/layanan"
            class="menu-col d-flex w-100 align-items-center gap-3 p-3
            {{ Request::is('layanan') ? 'active' : '' }}">
            <ion-icon name="bookmarks"></ion-icon>
            Layanan
        </a>
        <a href="/reservasi" class="menu-col d-flex w-100 align-items-center gap-3 p-3">
            <ion-icon name="calendar-number"></ion-icon>
            Reservasi
        </a>
        <a href="/artikel" class="menu-col d-flex w-100 align-items-center gap-3 p-3
            {{ Request::is('artikel') ? 'active' : '' }}">
            <ion-icon name="document-text"></ion-icon>
            Artikel
        </a>
        <a href="/ulasan" class="menu-col d-flex w-100 align-items-center gap-3 p-3">
            <ion-icon name="ticket"></ion-icon>
            Ulasan
        </a>
    </div>
    <div class="logout">
        <a href="/" class="btn btn-danger" role="button">
            LogOut
        </a>
    </div>
    <div class="acc d-flex position-relative w-100">
        <div class="role d-flex flex-column w-100 align-items-center position-absolute bottom-0 start-0">
            <div class="position-absolute top-0 start-50 translate-middle">
                <img class="logo-2" src="/img/Vector.png" alt="logo">            
            </div>
            <h5> {{ auth()->user()->name }} </h5>
            <p> {{ auth()->user()->role }} </p>       
        </div>
    </div>
</div>