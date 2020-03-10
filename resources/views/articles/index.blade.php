@extends ('layout')


@section('content')
    <div class="modal-header">
    <h1>ARTICLES</h1>
    </div>
@forelse($articles as $article)

    <div class="row">

        <div class="col-lg-12">
            <h1><a href="/articles/{{$article->id}}"> {{$article->title}}</a></h1>
        </div>

        <div class="col-lg-12">
            <h6>{{$article->created_at}}</h6>
        </div>

        <div class="col-lg-12">
            <p> {{ $article->excerpt }}</p>
        </div>

    </div>
@empty
    <p> No relevant artiicles yet.</p>

@endforelse
@endsection

