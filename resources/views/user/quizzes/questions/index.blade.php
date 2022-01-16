@extends('layout')
@section('title', 'კითხვები')
@section('content')

<div class="row">


    <a class="quiz-add-button btn btn-success" href="{{route('user.quizzes.questions.add', $quiz->id)}}">კითხვის დამატება</a>
    
    
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
                <td><a class="btn btn-success" href="{{route('user.quizzes.questions.options', $question->id)}}">პასუხები</a></td>
                <td><a class="btn btn-success" href="{{ route('user.quizzes.questions.edit', $question->id)}}">რედაქტირება</a></td>
                <td>
                  
                  <form action="{{ route('user.quizzes.questions.delete', $question->id)}}" method="post">
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