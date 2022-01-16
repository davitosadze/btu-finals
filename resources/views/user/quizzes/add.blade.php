@extends('layout')
@section('title', 'ქვიზის დამატება')
@section('content')

<div class="justify-content-center">


    <form method="POST" action="{{route('user.quizzes.insert')}}" enctype="multipart/form-data">
        @csrf
        <input required placeholder="ქვიზის დასახელება" type="text" name="quiz_name" class="form-control">

        <br>
        <textarea name="description" id="" placeholder="აღწერა" class="form-control" cols="30" rows="3"></textarea>
        <br>
        <input  placeholder="ქვიზის სურათი" type="text" name="image" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-success" value="დამატება" id="">
    </form>


</div>

@endsection