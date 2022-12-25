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
    <title>Article</title>
</head>

<body>
    @extends('navbar')
    @extends('footer')
    <!-- NAVBAR SEARCH -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: #E5E6FF; padding-bottom: .1rem">
        <div class="container-fluid" style="margin-left: 8.5rem; padding-right: 2rem" id="header">
            <ul class="navbar-nav">
                <li class="nav-item pt-2">
                    <a href="/home" class="nav-link text-muted"> Beranda</a>
                </li>
                <!-- SLASH -->
                <p class="pt-3 text-muted">/</p>
                <!-- SLASH -->

                <li class="nav-item pt-2">
                    <a href="/artikel" class="nav-link text-muted"> Artikel </a>
                </li>

                <!-- SLASH -->
                <p class="pt-3 text-muted">/</p>
                <!-- SLASH -->

                <li class="nav-item pt-2">
                    <a href="/artikel/{{ $artikel->slug }}" class="nav-link text-dark"> {{ $artikel->title }} </a>
                </li>
            </ul>

            <!-- SEARCH BAR -->
            <form action="/artikel">
                <div class="input-box" style="margin-right:5rem">
                    <input type="text" placeholder="Cari Pertanyaan" class = "form-control" name="search" value = "{{ request('search') }}">
                    <i class="bi bi-search"></i>
                </div>
            </form>
            <!-- SEARCH BAR -->
        </div>
    </nav>
    <!-- NAVBAR SEARCH -->

    <!-- ARTIKEL LIST -->
    <div class="container-fluid" style="margin-bottom: 3rem; padding-top: 2rem;">
        <div class="row">
            <!-- ARTICLE -->
            <div class="col-12 col-md-7" style="padding-left: 3.7rem; padding-right: 4rem; margin-left: 7rem;">

                <!--TITLE -->
                <h1 style="font-weight: 600;">{{ $title }}</h1>
                <!--TITLE -->

                <!-- INFO -->
                <P style="margin-bottom: 2rem;">
                    Ditinjau oleh : 
                    <span style="color: #7074E8"> {{ $penulis }} </span> 
                    : {{ $artikel->created_at->diffForHumans() }}
                </P>
                <!-- INFO -->

                <!-- HEADER IMAGE -->
                <img src="{{ $artikel->imgsource }}" style="width: 640px; border-radius : 0.5rem;">
                <!-- HEADER IMAGE -->

                <!-- CONTENT -->
                <p style="margin-top: 2rem;">
                    <span style="font-weight: 600;">Psychore</span>, {{ $artikel->body }}
                </p>

                <!-- CONTENT -->

            </div>
            <!-- ARTICLE -->

            <!-- MORE ARTICLE -->
            <div class="col-6 col-md-4" style="padding: 0; padding-right: 2rem;">
                <!-- Title -->
                <h4 style="font-weight: 600; margin-top: 9.6rem; margin-left: 5px;">Artikel Terkait</h4>
                <!-- Title -->

                <!-- List -->
                <ul class="list-group list-group-flush">

                    @foreach($artikels as $a)
                        <li class="list-group-item">
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4" style="padding: 0; ">
                                    <img src="{{ $a->imgsource }}" style = "border-radius : 0.5rem";>
                                </div>
                                <!-- Image -->

                                <div class="col-8">
                                    <!-- TITLE -->
                                    <a href="#toarticle" style="color: black; text-decoration: none; font-size: 15px; font-weight: 500;">
                                        {{ $a->title }}
                                    </a>
                                    <!-- TITLE -->

                                    <!-- TIME -->
                                    <p class="text-muted" style="font-size: 13px;">{{ $a->created_at->diffForHumans() }}</p>
                                    <!-- TIME -->
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <!-- List -->
            </div>
            <!-- MORE ARTICLE -->
        </div>
    </div>
    <!-- ARTIKEL LIST -->
</body>
</html>