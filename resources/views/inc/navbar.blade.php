<nav class="navbar navbar-dark  navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('todo.index')}}">TodoLaravel</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{Route::is('todo.index')?'active':''}}"><a href="{{route('todo.index')}}">Todos</a></li>
                <li class="{{Route::is('todo.create')?'active':''}}"><a href="{{route('todo.create')}}">Create todo</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>