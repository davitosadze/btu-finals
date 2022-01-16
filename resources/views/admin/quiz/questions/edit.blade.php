@extends('layout')
@section('title', 'კითხვის რედაქტირება')
@section('content')

<div class="justify-content-center">


    <form method="POST" action="{{route('admin.quizzes.questions.update', $question->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input required placeholder="კითხვა?" value="{{$question->question_title}}" type="text" name="question_title" class="form-control">
        <br>
        <input  placeholder="კითხვის სურათი" value="{{$question->image}}" type="text" name="image" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-success" value="განახლება" id="">
    </form>


</div>

@endsection