@extends('layouts.master')

@section('content')
    <!-- Blog Post -->

    <!-- Title -->
    <h1>{{ $post->title }}</h1>

    <!-- Author -->
    <p class="lead">
        por <a href="#"></a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Publicado {{ $post->created_at->toDayDateTimeString() }}</p>

    <hr>

    <!-- Preview Image
    <img class="img-responsive" src="http://placehold.it/900x300" alt="">

    <hr -->

    <!-- Post Content -->
    <p>{{ $post->body }}</p>
    <hr>

    <!-- Blog Comments -->

    <!-- Posted Comments -->
    @if($post->comments)
        <h4>Comentarios:</h4>
        @foreach($post->comments as $comment)
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{ $comment->user->name }}
                        <small>{{ $comment->created_at->format('F j, Y H:i') }}</small>
                    </h4>
                    <p>{{ $comment->body }}</p>
                </div>
            </div><!-- .media -->
        @endforeach
    @endif


    <!-- Comments Form -->
    <hr>

    @include('layouts.errors')

    <div class="well">
        <form role="form" method="post" action="{{ url('/posts/'.$post->id.'/comments') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea class="form-control" name="body" rows="3" placeholder="Ingresar comentario"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Comentar</button>
        </form>
    </div>

    <hr>


@endsection