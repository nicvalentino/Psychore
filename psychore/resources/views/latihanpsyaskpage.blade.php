<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styleforum.css">
    <title>PsyAsk</title>
</head>
<body>
    {{-- @extends('navbar')
    @extends('footer') --}}
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
                    <a href="/psyask#" class="nav-link text-dark"> PsyAsk </a>
                </li>
            </ul>

            <!-- SEARCH BAR -->
            <form action="/psyask">
                <div class="input-box" style="margin-right:5rem">
                    <input type="text" placeholder="Cari Pertanyaan" class = "form-control" name="search" value = "{{ request('search') }}">
                    <i class="bi bi-search"></i>
                </div>
            </form>
            <!-- SEARCH BAR -->
        </div>
    </nav>
    <!-- NAVBAR SEARCH -->

    <!-- FORUM -->
    <div class="container-fluid" style="background-color: #F6F7FF; padding-top: 2rem; padding-bottom: 8rem">
        <!-- TYPE -->
        <div class="row" style="margin-left: 23.5rem">
            <a href="/addask">
                <div class="btn" style="background: #EAEAEA; width: relative; height: 20px; font-size: 12px; margin-right: .4rem; padding-bottom: 1.3rem; padding-top: .2rem; padding-left: .5rem; padding-right: .5rem; border-radius: 0.8rem;">
                    <i class="bi bi-plus-circle"></i>
                    Pertanyaan Baru
                </div>
            </a>
            
        </div>
        <!-- TYPE -->

        <!-- QUESTIONS -->
        @foreach ($pertanyaan as $tanya)
            
            <div class="card mx-auto p-4" style="width: 750px; margin-top: 1.8rem">
                <p style="margin-bottom: 0;">{{ $tanya->user->name }}</p>
                <p class="text-muted" style="font-size: smaller;"> {{ $tanya->created_at->diffForHumans() }} </p>
                <h6> {{ $tanya->body }}</h6>
                
                {{-- <p style="padding-top:1rem" > Dijawab oleh {{ $tanya->jawaban_psikiaters[sizeof($tanya->jawaban_psikiaters)-1]->psikiater->name }}</p>
                <p> {{ $tanya->jawaban_psikiaters[sizeof($tanya->jawaban_psikiaters)-1]->body }}</p> --}}

                <div class="row">

                    <div class="col">
                        <!-- COMMENTS BUTTON -->
                        <div class="text-muted small text-center align-self-center">
                            <button 
                                class="btn" type="button" data-toggle="collapse" data-target=".comment{{ $tanya->id }}" aria-expanded="false" aria-controls="comments{{ $tanya->id }}"
                                style="background-color: transparent; margin-left: 41rem; font-size: 12px;">
                                <i class="bi bi-chat-left mr-1"></i>
                                {{ $tanya->comments_count }}
                            </button>
                        </div>
                        <!-- COMMENTS BUTTON -->
                    </div>
                </div>

                <!-- COMMENTS -->
                <div class="collapse comment{{ $tanya->id }}" id="comments{{ $tanya->id }}">

                    <!-- COMMENT INPUT -->
                    <div class="card-footer py-3 border-0" style="background-color: #FFFFFF;">
                        <span style="font-weight: 500;">Comments</span>
                        <!-- FORM  -->
                        <form>
                            <div class="d-flex flex-start w-100">
                                <div class="form-outline w-100">
                                    <textarea class="form-control" id="textAreaExample" name="body" rows="3" style="background: #fff; font-size: 12px;">
                                    </textarea>
                                </div>
                            </div>
                            <input type="hidden" name="user_id" class="form-control" value="{{ Auth::id() }}">
                            <input type="hidden" name="pertanyaan_id" class="form-control" value="{{ $tanya->id }}">
                            <div class="float-end mt-2 pt-1">
                                <button type="submit" class="btn btn-primary btn-sm" style="background-color: #7074E8; border-color: transparent; color: #fff; width: relative; height: 20px; font-size: 12px; margin-right: .4rem; padding-bottom: 1.2rem; padding-top: .2rem; padding-left: .5rem; padding-right: .5rem; border-radius: 0.4rem;">
                                    Post comment
                                </button>
                            </div>
                        </form>
                        <!-- FORM  -->

                        <!-- BUTTON POST COMMENT -->
                        {{-- <div class="float-end mt-2 pt-1">
                            <button type="button" class="btn btn-primary btn-sm" style="background-color: #7074E8; border-color: transparent; color: #fff; width: relative; height: 20px; font-size: 12px; margin-right: .4rem; padding-bottom: 1.2rem; padding-top: .2rem; padding-left: .5rem; padding-right: .5rem; border-radius: 0.4rem;">
                                Post comment
                            </button>
                        </div> --}}
                        <!-- BUTTON POST COMMENT -->
                    </div>
                    <!-- COMMENT INPUT -->

                    <!-- PPL COMMENTS -->

                    @foreach($tanya->comments as $comment)
                        <div class="card-body" style="padding-top: 0; padding-bottom: 0;">
                            <hr>
                            @if($comment->user->is_psikiater)
                                <p style="margin-bottom: 0;">{{ $comment->user->name }} <!-- Verif Icon --> <i class="bi bi-check-circle-fill" style="color: #7074E8; margin-left: 3px"></i><!-- Verif Icon --></p>
                                <p class="text-muted" style="font-size: smaller;">{{ $comment->created_at->diffForHumans() }}</p>
                                <p>{{ $comment->body }}</p>
                            @else
                                <p style="margin-bottom: 0;">{{ $comment->user->name }}</p>
                                <p class="text-muted" style="font-size: smaller;">{{ $comment->created_at->diffForHumans() }}</p>
                                <p>{{ $comment->body }}</p>
                            @endif
                        </div>
                    @endforeach
                    <!-- PPL COMMENTS -->
                </div>
                <!-- COMMENTS -->
            </div>
        @endforeach
        
        <!-- QUESTIONS -->
    </div>
    <!-- FORUM -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>