@extends('layout')
@section('title', 'ქვიზის რედაქტირება')
@section('content')

<div class="justify-content-center">


    <form method="POST" action="{{route('user.quizzes.update', $quiz->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input required placeholder="ქვიზის დასახელება" value="{{$quiz->title}}" type="text" name="title" class="form-control">

        <br>
        <textarea name="description" id="" placeholder="აღწერა" class="form-control" cols="30" rows="3">{{$quiz->description}}</textarea>
        <br>
        <input  placeholder="ქვიზის სურათი" value="{{$quiz->image}}" type="text" name="image" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-success" value="განახლება" id="">
    </form>


</div>

@endsection