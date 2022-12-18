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
    <link rel="stylesheet" href="css/style.css">
    <title>Navbar</title>
</head>
<body>
    
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background: #7074E8;">
        <div class="container" id="header">
            <a href="home" class="navbar-brand pr-2"><img src="images/logo.png" style="width: 80%;" alt=""></a>
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
                        <a href="home" class="nav-link text-light pr-5"> Beranda </a>
                    </li>
                    <li class="nav-item">
                        <a href="#PsyAsk" class="nav-link text-light pr-5"> PsyAsk </a>
                    </li>
                    <li class="nav-item">
                        <a href="#Artikel" class="nav-link text-light pr-5"> Artikel </a>
                    </li>
                </ul>
            </div>
            <!-- Masuk Button -->
            @if($isLoggedIn)
                <p>Hi, {{ "nama disini" }}</p>
            @else
                <a href="login"><button class="btn btn-md btn-primary d-none d-sm-block">Masuk</button></a>
            @endif
        </div>
    </nav>
</body>
</html>