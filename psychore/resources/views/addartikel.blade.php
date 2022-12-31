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
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Add Artikel</title>
</head>
<body>
    @extends('navbar')
    @extends('footer')

    <div class="container-fluid" style="background: #F6F7FF; padding: 2.3rem;">
        <div class="box mx-auto" style="background-color: rgb(112, 116, 232, 0.8); width: 900px; height: auto; margin-bottom:250px; border-radius: .5rem; padding-bottom: 2rem">
            <h2 class="text-center p-4 text-light">
                Tambah Artikel
            </h2>
            <div class="box mx-auto" style="background-color: #ffffff; width: 870px; height: auto; border-radius: .5rem; padding-bottom: 3rem">
                <!-- JUDUL -->
                <form method="POST" action="/artikel/create">
                    @csrf
                    <div class="form-group" style="padding: 1.2rem; padding-bottom: 0;">
                        <input type="text" name="title" class="form-control" id="#" placeholder="Judul">
                        <input type="hidden" name="user_id" class="form-control" value="{{ Auth::id() }}">
                    </div>
                <!-- JUDUL -->

                <!-- IMG URL -->
                    <div class="form-group" style="padding: 1.2rem; padding-bottom: 0; padding-top: 0;">
                        <input type="text" name="imgsource" class="form-control" id="#" placeholder="Img URL">
                <!-- IMG URL -->

                <!-- BODY -->
                    <div class="form-group" style="padding: 1rem; padding-top: 0; padding-bottom: 0;">
                        <h5>Content</h5>
                        <textarea class="form-control" name="body" rows="10" id="#"></textarea>
                    </div>
                <!-- BODY -->

                <!-- PUBLISH BUTTON -->
                    <div class="float-right" style="margin-right: 0.6rem">
                        <button type="submit" class="btn btn-primary btn-sm" style="background-color: #7074E8; border-color: transparent; color: #fff; width: relative; height: 20px; font-size: 12px; margin-right: .4rem; padding-bottom: 1.2rem; padding-top: .2rem; padding-left: .5rem; padding-right: .5rem; border-radius: 0.4rem;">
                            <i class="bi bi-send"></i>
                            Publish
                        </button>
                    </div>
                </form>
                <!-- PUBLISH BUTTON -->


            </div>
        </div>
    </div>
</body>
</html>