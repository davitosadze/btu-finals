@extends('layout')

@section('content')

<div class="row">

    @foreach ($quizzes as $quiz)

    <div class="mx-auto quiz-card col-sm-4">
        <div class="card">
            <img class="card-img-top" src="{{$quiz->image}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{$quiz->title}}</h5>
            <p class="card-text">{{$quiz->description}}</p>
            <p class="card-text">ავტორი: <b>{{$quiz->author->name}}</b></p>
            <p class="card-text">კითხვები: <b>{{$quiz->questions_count}}</b></p>

            <a href="{{route('quiz.details', $quiz->id)}}" class="btn btn-success btn-block">დეტალურად</a>
            </div>
        </div>
    </div>
    
    @endforeach
    
</div>

@endsection