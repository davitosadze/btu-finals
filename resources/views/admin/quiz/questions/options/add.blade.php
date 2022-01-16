@extends('layout')
@section('title', 'პასუხის დამატება')
@section('content')

<div class="justify-content-center">


    <form method="POST" action="{{route('admin.quizzes.questions.options.insert', $question_id)}}" enctype="multipart/form-data">
        @csrf
        <input type="checkbox" name="is_correct" value="1" name="" id=""> სწორი
        <input required placeholder="შეიყვანეთ პასუხი" type="text" name="option_title" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-success" value="დამატება" id="">
    </form>


</div>

@endsection