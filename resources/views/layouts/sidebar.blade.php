
    <!-- Blog Search Well -->
    <div class="well">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar en el Blog">
            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
        </div>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Archivos</h4>
        
        <ol class="list-unstyled">
            @foreach($archives as $stats)
            
                <li>
                    <a href="/larav-el/blog/public/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">{{ $stats['month'].' '.$stats['year'].' ('.$stats['published'].')' }}</a>
                </li>
                
            @endforeach
        </ol>

        <!-- /.row -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Etiquetas</h4>

        <ol class="list-unstyled">
            @foreach($tags as $tag)

                <li>
                    <a href=" {{ url('/posts/tags/'. $tag) }}">{{ $tag }}</a>
                </li>

            @endforeach
        </ol>

        <!-- /.row -->
    </div>


    <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>