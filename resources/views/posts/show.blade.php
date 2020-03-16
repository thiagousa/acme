
@extends ('layout')


@section('content')

    <div class="modal-header">
        <h1> {{$post->title}} </h1>
    </div>

        <div class="row">

            <div class="col-lg-12">
                <h1>{{$post->body}}</h1>
        </div>

         <div class="col-lg-12">

                <div class="row-cols-3">
                    <div class="btn-group btn-group-lg" role="group" aria-label="...">Actions:</div>
                     <div class="btn-group btn-group-lg" role="group" aria-label="..."><a href="{{ route('posts.create')}}"> Add</a></div>
                    <div class="btn-group btn-group-lg" role="group" aria-label="..."><a href="{{ route('posts.edit',$post) }}"> Edit</a></div>
                    <div class="btn-group btn-group-lg" role="group" aria-label="..."><a href="{{ route('posts.destroy',$post) }}"> Delete</a></div>
                </div>
            </div>
            <div class="col-lg-12">
            <div class="row-cols-3">
                <div class="btn-group btn-group-lg" role="group" aria-label="...">Tags:</div>

            </div>
            </div>

@endsection
