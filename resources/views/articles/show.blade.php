@extends ('layout')


@section('content')

    <div class="modal-header">
        <h1> {{$article->title}} </h1>
    </div>

        <div class="row">

            <div class="col-lg-12">
                <h1>{{$article->body}}</h1>
        </div>

        <div class="col-lg-12">
            <h6>{{$article->created_at}}</h6>
        </div>

                <div class="row-cols-3">
                    <div class="btn-group btn-group-lg" role="group" aria-label="..."><a href="{{ url('/articles/create') }}"> Add</a></div>
                    <div class="btn-group btn-group-lg" role="group" aria-label="..."><a href="{{ url('/articles/'.$article->id.'/edit') }}"> Edit</a></div>
                    <div class="btn-group btn-group-lg" role="group" aria-label="..."><a href="{{ url('/articles/'.$article->id.'/delete') }}"> Delete</a></div>
                </div>



@endsection
