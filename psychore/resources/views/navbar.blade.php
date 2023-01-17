<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Navbar</title>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background: #7074E8;">
        <div class="container-fluid pr-5 pl-5" id="header">
            <a href="/home" class="navbar-brand pr-2"><img src="/images/logo.png" style="width: 70%;" alt=""></a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navmenu"
                >
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/home" class="nav-link text-light pr-5"> Beranda </a>
                    </li>
                    <li class="nav-item">
                        <a href="/psyask" class="nav-link text-light pr-5"> PsyAsk </a>
                    </li>
                    <li class="nav-item">
                        <a href="/artikel" class="nav-link text-light pr-5"> Artikel </a>
                    </li>

                    <!-- ADD ARTIKEL BUAT PSIKIATER -->
                    @if($isLoggedIn)
                        @if($user->is_psikiater)
                            <li class="nav-item">
                                <a href="/artikel/create" class="nav-link text-light pr-5"> Tambah Artikel </a>
                            </li>
                        @endif
                    @endif
                    <!-- ADD ARTIKEL BUAT PSIKIATER -->
                </ul>
            </div>

            <!-- Masuk Button -->
            @if($isLoggedIn)
                {{-- <p id="nama_container" class="d-flex text-center mt-2">Hi, {{ "nama disini" }}</p> --}}
                <div class="dropdown p-0 m-0">
                    <button class="btn btn-secondary dropdown-toggle" style="background: transparent; border-color: transparent;" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/images/user.png" style="width: 18px; margin-right: 10px">
                        {{ $user->name }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                        <a href="/logout" class="dropdown-item" style="background: transparent;">
                            <img src="images/logout.png" style="width: 18px; margin-right: 15px;">
                            <p style="margin-top: 0px; margin-bottom: 0px; text-decoration: none;">Keluar</p>
                        </a>
                    </div>
                </div>
            @else
                <a href="/login"><button class="btn btn-md btn-primary d-none d-sm-block">Masuk</button></a>
            @endif
        </div>
    </nav>
</body>
</html>