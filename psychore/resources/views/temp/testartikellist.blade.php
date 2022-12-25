<h1 class = "mb-5"> Halaman Artikel List </h1>
<div class = "row justify-content-center">
    <div class = "col-md-6">
        <form action="/artikel">
            <div class = "input-group">
                <input type="text" class = "form-control" placeholder = "Search disini" name="search" value = " {{ request('search') }}">
                <button class = "btn btn-danger" type = "submit"> Search </button>
            </div>
        </form>
    </div> 
</div>


@extends('navbar')
@foreach( $artikel as $a)
    <article>
        <h2><a href="/artikel/{{ $a->slug }}"> {{ $a->title }} </a> </h2>
        <p>ditinjau oleh : {{ $a->psikiater->name }}</p>
        <p>{{ $a->excerpt }}  <a href="/artikel/{{ $a->slug }}"> read more.. </a> </p>
    </article>
@endforeach

<div class = "d-flex justify-content-end">
    {{ $artikel->links() }}
</div>
