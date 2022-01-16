@extends('layout')
@section('title', 'პასუხის რედაქტირება')
@section('content')

<div class="justify-content-center">


    <form method="POST" action="{{route('admin.quizzes.questions.options.update', $option->id)}}" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <input type="checkbox" name="is_correct" @if($option->is_correct) checked @endif value="1" name="" id=""> სწორი
        <input required placeholder="შეიყვანეთ პასუხი" value="{{$option->option_title}}" type="text" name="option_title" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-success" value="განახლება" id="">
    </form>


</div>

@endsection