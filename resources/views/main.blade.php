<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="/favicon.ico" />
    <link rel="stylesheet" href="{{ asset ('app.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/dashboard/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/artikel/artikel.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/artikel/editArtikel.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/layanan/layanan.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans%3A700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C500%2C600%2C700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Display%3A700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans%3A500%2C700" />
    <link rel="stylesheet" href="./styles/artikel-informasi-artikel-gRB.css" />
    <style>
        .base {
            background: #F4F7FE;
            height: 100vh;
        }
    </style>
  </head>
</head>
<body>
    <div class="base">
        @include('sidebar.sidebar') 
        @yield('layanan')
        @yield('artikel')
        @yield('editArtikel')
        @yield('dashboard')
    </div>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>
    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>