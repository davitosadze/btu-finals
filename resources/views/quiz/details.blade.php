@extends('layout')
@section('title', $quiz->title)
@section('content')

<center>
<h3>{{$quiz->title}}</h3>
<h4>კითხვების რაოდენობა: {{$quiz->questions_count}}</h4>
<br>
<img style="width: 50%; border-radius:10px;" src="{{$quiz->image}}" alt="">
<br>
<br>
<p>აღწერა: {{$quiz->description}}</p>

<a style="width: 100%; padding:15px; font-size:30px;" class="btn btn-success" href="{{route('quiz.play', $quiz->id)}}">ქვიზის დაწყება</a>
</center>

@endsection