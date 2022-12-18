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
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #7074E8;">
        <div class="container-fluid pr-5 pl-5" id="header">
            <a href="home" class="navbar-brand pr-2"><img src="images/logo.png" style="width: 75%;" alt=""></a>
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

            <div class="dropdown p-0 m-0">
                <button class="btn btn-secondary dropdown-toggle" style="background: transparent; border-color: transparent;" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images/user.png" style="width: 18px; margin-right: 10px">
                    Nama User
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <a href="#" class="dropdown-item" style="background: transparent;">
                        <img src="images/logout.png" style="width: 18px; margin-right: 15px;">
                        <p style="margin-top: 0px; margin-bottom: 0px; text-decoration: none;">Keluar</p>
                    </a>
                </div>
            </div>
            <!-- Profile
            <div onclick="toggleMenu()">
                <p class="text-light p">
                    <img src="images/user.png" class="user-pic" style="width: 24px; margin-right: 15px;" alt="">
                    User Name
                </p>
            </div>

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <a href="#" class="sub-menu-link">
                        <img src="images/logout.png">
                        <p>Keluar</p>
                        <span>></span>
                    </a>
                </div>
            </div>
            Profile -->
        </div>
    </nav>

</body>
</html>