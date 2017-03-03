
    <!-- Title -->
    <h2><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a></h2>

    <!-- Tag -->
    @if(count($post->tags))
        <ul>
            @foreach($post->tags as $tag)

                <li><a href="{{ url('/posts/tags/'.$tag->name) }}">
                    {{ $tag->name }}</a></li>

            @endforeach
        </ul>
    @endif

    <!-- Author -->
    <p class="lead">
        por {{ $post->user->name }}
    </p>

    <!-- Created at -->
    <h5><span class="glyphicon glyphicon-time"></span> Publicado {{ $post->created_at->toDayDateTimeString() }}.</h5>
    <hr>

    <!-- Body -->
    <p>{{ $post->body }}</p>
    <a class="btn btn-primary" href="{{ url('/posts', $post->id) }}">Leer Mas <span class="glyphicon glyphicon-chevron-right"></span></a>
    <hr>
    <br>
