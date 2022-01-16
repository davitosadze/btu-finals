@extends('layout')
@section('title', $quiz->title)
@section('content')
<div class="d-flex flex-row justify-content-between align-items-center mcq">
    <h4>{{$quiz->title}}</h4><span><b id="currentId"> 0</b> - <b id="questionsCount">{{$quiz->questions_count}}</b> დან</span>
</div>
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10 col-lg-10">
            <div class="border">
                
                <br>
                <center><div id="results" class="hide result">
                    <h1>თქვენი შედეგი: <b id="correctAnswers"> 0</b> - {{$quiz->questions_count}} დან </h1>
                </div></center>

                <form action="#">
                @foreach($quiz->questions as $key => $question)
                
                
                <div id="question-{{$key}}" class="@if($key>0) hide @endif question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row align-items-center question-title">
                        <h3 class="text-danger">კ.</h3>
                        <h5 class="mt-1 ml-2">{{$question->question_title}}</h5>
                    </div>

                    <center>
                        <img style="width: 50%; border-radius:10px;" src="{{$question->image}}" alt="">
                    </center>

                    <div class="d-flex justify-content-center row">
                    @foreach($question->options as $option)
                    <div class="ans ml-2">
                        <label class="radio-inline radio" data-id="{{$key}}" data-option="{{$option->id}}" > <input type="radio" name="option" value="{{$option->id}}"> <span>{{$option->option_title}}</span>
                        </label>
                    </div>
                    @endforeach
                    
                    </div>
                </div>
                @endforeach
                
                <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button id="next" style="padding:10px; font-size:20px;" class="hide btn border-success align-items-center btn-success btn-block" type="button">შემდეგი კითხვა<i class="fa fa-angle-right ml-2"></i></button></div>
                <button type="submit" id="submit" style="padding:10px; font-size:20px;" class="btn btn-primary align-items-center btn-block  hide">შედეგის გამოთვლა</button>

                </form>

            </div>
        </div>
    </div>
</div>


@section('scripts')
<script src="{{asset('js/quiz.js')}}"></script>
<link rel="stylesheet" href="/style/quiz.css">
@endsection


@endsection