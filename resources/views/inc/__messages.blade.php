<div class="alerts container">
    @if(count($errors) > 0)
    {{-- @dump($errors); --}}
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>     
        @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>

@endif

@if(session('error'))
    <div class="alert alert-warning">
        {{session('error')}}
    </div>
@endif

@if ($errors->has('throttle'))
    <strong>{{ $errors->first('throttle') }}</strong>
@endif

</div>