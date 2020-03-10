@extends ('layout')


@section('content')
<h1>Create a Article</h1>
    <form method="POST" action="/articles">
    @csrf
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="textfield" name="title" id="title" value="{{ old('title') }}">
            @error('title')
            <p class="alert alert-danger" >{{$errors->first('title')}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Excerpt</label>
            <textarea class="form-control" rows="3" name="excerpt" id="except">{{ old('excerpt') }}</textarea>
            @error('excerpt')
            <p class="alert alert-danger" >{{$errors->first('excerpt')}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Body</label>
            <textarea class="form-control"  rows="3" name="body" id="body">{{ old('body') }}</textarea>
            @error('body')
            <p class="alert alert-danger" >{{$errors->first('body')}}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


@endsection
