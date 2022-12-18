<h1>Halaman Psyask</h1>
@foreach ($pertanyaan as $p)
    <article>
        <h2><a href="/psyask/{{ $p->slug }}"> {{ $p->body }} </a> </h2>
        <p> {{ $p->jawaban_psikiaters[sizeof($p->jawaban_psikiaters)-1] }}</p>
    </article>
@endforeach
