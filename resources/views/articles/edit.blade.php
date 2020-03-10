@extends ('layout')


@section('content')
<h1> Update Article</h1>
    <form method="POST" action="/articles/{{$article->id}}">

        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="textfield"class="form-control" name="title" id="title" value="{{$article->title}}">
            @error('title')
            <p class="alert alert-danger" >{{$errors->first('title')}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Excerpt</label>
            <textarea class="form-control" rows="3" name="excerpt" id="except">{{$article->excerpt}}</textarea>
            @error('excerpt')
            <p class="alert alert-danger" >{{$errors->first('excerpt')}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Body</label>
            <textarea class="form-control" rows="3" name="body" id="body">{{$article->body}}</textarea>
            @error('body')
            <p class="alert alert-danger" >{{$errors->first('body')}}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


@endsection
