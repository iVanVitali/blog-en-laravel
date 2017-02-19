@extends('layouts.master')


@section('content')

    <h1>Crear el Post</h1>
    <hr>
    <form class="form-horizontal" method="post" action="{{ url('/posts') }}">
        {{ csrf_field() }}

        @include('layouts.errors')

        <fieldset>
            <legend>Publicar nuevo Post</legend>
            <div class="form-group">
                <label for="title" class="col-lg-2 control-label">Titulo</label>
                <div class="col-lg-10">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Ingrese el titulo para el Post">
                </div>
            </div>
            <div class="form-group">
                <label for="body" class="col-lg-2 control-label">Texto</label>
                <div class="col-lg-10">
                    <textarea id="body" name="body" rows="3" class="form-control" placeholder="Ingrese el texto"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Publicar</button>
                </div>
            </div>
        </fieldset>
    </form>

@endsection