<h1>Halaman Psyask</h1>
@foreach ($pertanyaan as $p)
    <article>
        <h2><a href="/psyask/{{ $p->slug }}"> {{ $p->body }} </a> </h2>
        <p>{{ $jawaban->body }}</p>
    </article>
@endforeach

tes111