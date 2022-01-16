@extends('layout')

@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10 col-lg-10">
            <div class="border">
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row justify-content-between align-items-center mcq">
                        <h4>{{$quiz->title}}</h4><span>0 - {{$quiz->questions_count}} დან</span>
                    </div>
                </div>

                <form action="">
                @foreach($quiz->questions as $question)
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row align-items-center question-title">
                        <h3 class="text-danger">კ.</h3>
                        <h5 class="mt-1 ml-2">{{$question->question_title}}</h5>
                    </div>

                    @foreach($question->options as $option)
                    <div class="ans ml-2">
                        <label class="radio"> <input type="radio" name="brazil" value="brazil"> <span>{{$option->option_title}}</span>
                        </label>
                    </div>
                    @endforeach
                </div>
                @endforeach
                
                <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i class="fa fa-angle-right ml-2"></i></button></div>
            
                </form>
            </div>
        </div>
    </div>
</div>

<style>

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 4px 0px;
    border: 1px solid red;
    display: inline-block;
    color: red;
    width: 100px;
    text-align: center;
    border-radius: 3px;
    margin-top: 7px;
    text-transform: uppercase
}

label.radio input:checked+span {
    border-color: red;
    background-color: red;
    color: #fff
}

.ans {
    margin-left: 36px !important
}

.btn:focus {
    outline: 0 !important;
    box-shadow: none !important
}

.btn:active {
    outline: 0 !important;
    box-shadow: none !important
}
</style>

@endsection