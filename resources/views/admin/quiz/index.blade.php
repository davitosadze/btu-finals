@extends('admin.layout')
@section('title', 'ქვიზის რედაქტირება')
@section('content')

<div class="justify-content-center">


    <form method="POST" action="{{route('admin.quizzes.update', $quiz->id)}}" enctype="multipart/form-data">
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


    <br>
    <h2>კითხვები: </h2>
    <a class="quiz-add-button btn btn-success" href="{{route('admin.quizzes.questions.add', $quiz->id)}}">კითხვის დამატება</a>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">კითხვის დასახელება</th>
            <th scope="col">ქვიზი</th>
            <th scope="col">პასუხები</th>
            <th scope="col">შეცვლა</th>
            <th scope="col">წაშლა</th>
          </tr>
        </thead>
        <tbody>
          @foreach($quiz->questions as $question)
            <tr>
                <td>#{{$question->id}}</td>
                <td>{{$question->question_title}}</td>
                <td>{{$quiz->title}}</td>
                <td><a class="btn btn-success" href="{{route('admin.quizzes.questions.options', $question->id)}}">პასუხები</a></td>
                <td><a class="btn btn-success" href="{{ route('admin.quizzes.questions.edit', $question->id)}}">რედაქტირება</a></td>
                <td>
                  
                  <form action="{{ route('admin.quizzes.questions.delete', $question->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="წაშლა" />

                  </form>

                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    


</div>

@endsection