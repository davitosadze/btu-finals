@extends('layout')
@section('title', 'კითხვის დამატება')
@section('content')

<div class="justify-content-center">


    <form method="POST" action="{{route('user.quizzes.questions.insert', $quiz_id)}}" enctype="multipart/form-data">
        @csrf
        <input required placeholder="კითხვა?" type="text" name="question_title" class="form-control">
        <br>
        <input  placeholder="ქვიზის სურათი" type="text" name="image" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-success" value="დამატება" id="">
    </form>


</div>

@endsection