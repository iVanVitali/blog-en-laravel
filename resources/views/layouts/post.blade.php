
    <h2><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a></h2>
    <p class="lead">
        por <a href="#"></a>
    </p>
    <h5><span class="glyphicon glyphicon-time"></span> Publicado {{ $post->created_at->toDayDateTimeString() }}.</h5>
    <hr>
    <p>{{ $post->body }}</p>
    <a class="btn btn-primary" href="{{ url('/posts', $post->id) }}">Leer Mas <span class="glyphicon glyphicon-chevron-right"></span></a>
    <hr>
    <br>
