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
    <title>Article List</title>
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
                    <a href="/artikel" class="nav-link text-dark"> Artikel </a>
                </li>
            </ul>

            <!-- SEARCH BAR -->
            <form action="/artikel">
                <div class="input-box">
                    <input type="text" placeholder="Cari Artikel" class = "form-control" name="search" value = "{{ request('search') }}">
                    <i class="bi bi-search"></i>
                </div>
            </form>
            
            <!-- SEARCH BAR -->
        </div>
    </nav>
    <!-- NAVBAR SEARCH -->

    <!-- ARTIKEL LIST -->
    <div class="container-fluid" style="background-color: #F6F7FF; padding-top: 2rem; padding-bottom: 3rem;">
        <div class="row">
            <!-- LEFT SIDE -->
            <div class="col-12 col-md-6" style="margin-left: 9.8rem;">
                <h2 style="font-weight: 600;">Baca Juga Artikel Kami</h2>
                <div class="parent" style="background-image: url({{ $artikel[0]->imgsource }}); border-radius: 1rem;">
                    <div class="parent-box">
                        <a href="/artikel/{{ $artikel[0]->slug }}"style="text-decoration: none;"> {{ $artikel[0]->title }} </a>
                    </div>
                </div>
            </div>
            <!-- LEFT SIDE -->

            <!-- RIGHT SIDE -->
            <div class="col-6 col-md-4" style="margin-top: 2.9rem; margin-left: 1rem;">
                <ul class="list-group-l list-group-flush">
                    <!-- CONTENTS -->

                    @foreach($artikel as $a)
                        <li class="list-group-item-l">
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4" style="padding: 0; ">
                                    <img src="{{ $a->imgsource }}">
                                </div>
                                <!-- Image -->

                                <div class="col-8">
                                    <!-- TITLE -->
                                    <a href="/artikel/{{ $a->slug }}" style="color: black; text-decoration: none; font-size: 15px; font-weight: 500;">
                                        {{ $a->title }}
                                    </a>
                                    <p class="text-muted" style="font-size: 13px;">Created {{ $a->created_at->diffForHumans() }}</p>
                                    <p class="text-muted" style="font-size: 13px; padding: 0;">by {{ $a->user->name }}</p>
                                    <!-- TITLE -->
                                </div>
                            </div>
                        </li>
                    @endforeach

                    <!-- CONTENTS -->
                  </ul>
            </div>
            <!-- RIGHT SIDE -->
        </div>
    </div>
    <!-- ARTIKEL LIST -->
</body>
</html>