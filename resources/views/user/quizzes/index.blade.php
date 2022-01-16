@extends('layout')
@section('title', 'ქვიზები')
@section('content')

<div class="row">


    <a class="quiz-add-button btn btn-success" href="{{route('user.quizzes.add')}}">ქვიზის დამატება</a>
    
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">დადასტურებულია?</th>

            <th scope="col">ქვიზის დასახელება</th>
            <th scope="col">კითხვები</th>
            <th scope="col">შეცვლა</th>
            <th scope="col">წაშლა</th>
          </tr>
        </thead>
        <tbody>
          @foreach($quizzes as $quiz)
            <tr>
                <td>#{{$quiz->id}}</td>
                <td>
                  @if($quiz->is_approved)
                    <b class="btn btn-success">დიახ</b>
                  @else 
                    <b class="btn btn-danger">არა</b>
                  @endif  
                </td>
                <td>{{$quiz->title}}</td>
                <td><a class="btn btn-success" href="{{route('user.quizzes.questions', $quiz->id)}}">კითხვები</a></td>
                <td><a class="btn btn-success" href="{{ route('user.quizzes.edit', $quiz->id)}}">რედაქტირება</a></td>
                <td>
                  
                  <form action="{{ route('user.quizzes.delete', $quiz->id)}}" method="post">
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