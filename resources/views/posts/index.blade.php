@extends('layouts.master')

@section('content')

        <h4><small>ULTIMOS POSTS</small></h4>
        <hr>
        @foreach($posts as $post)

            @include('layouts.post')

        @endforeach

@endsection
