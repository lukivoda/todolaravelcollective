@if(count($errors)> 0)
    <br>
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif