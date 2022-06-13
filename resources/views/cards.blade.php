@extends('layout.app')

@section('content')
<div class="container">
        <div class="row row-cols-3 justify-content-center py-4">
            @foreach ($movies as $movie)
                <div class="col bg-col">
                    <div class="my-card text-white">
                        <div class="card-body">
                            <h2>{{$movie->title}}</h2>
                            <p class="text-success">{{$movie->original_title}}</p>
                            <p class="text-danger">{{$movie->nationality}}</p>
                            <p class="text-info">{{$movie->date}}</p>
                            <p class="text-warning">{{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection