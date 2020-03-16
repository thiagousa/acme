@extends ('layout')


@section('content')
<h1>Create a Post</h1>
    <form method="POST" action="/posts">
    @csrf
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="textfield" name="title" id="title" value="{{ old('title') }}">
            @error('title')
            <p class="alert alert-danger" >{{$errors->first('title')}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Body</label>
            <textarea class="form-control"  rows="3" name="body" id="body">{{ old('body') }}</textarea>
            @error('body')
            <p class="alert alert-danger" >{{$errors->first('body')}}</p>
            @enderror
        </div>

     
       <input type="hidden" name="user_id" value="1">
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


@endsection
