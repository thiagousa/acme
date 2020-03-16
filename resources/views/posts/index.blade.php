@extends ('layout')


@section('content')
    <div class="modal-header">
    <h1>ARTICLES</h1>
    </div>
@forelse($posts as $post)

    <div class="row">

    <div class="col-lg-12">
            <h1><a href="/posts/{{$post->id}}"> {{$post->id}}</a></h1>
        </div>

        <div class="col-lg-12">
            <h1> {{$post->title}}</h1>
        </div>
<hr>
        </div>
@empty
    <p> No relevant artiicles yet.</p>

@endforelse
@endsection

