@extends('layout')
@section('title', 'პასუხები')
@section('content')

<div class="row">


  @if(count($question->options) < 4)
    <a class="quiz-add-button btn btn-success" href="{{route('admin.quizzes.questions.options.add', $question->id)}}">პასუხის დამატება</a>
  @else
    <h4>თქვენ შეგიძლიათ დაამატოთ მაქსიმუმ 4 პასუხი</h4>
    <br>
    <br>
  @endif
    
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">კითხვა</th>
            <th scope="col">პასუხი</th>
            <th scope="col">სწორია?</th>
            <th scope="col">შეცვლა</th>
            <th scope="col">წაშლა</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($question->options as $option)
            <tr>
                <td>#{{$option->id}}</td>
                <td>{{$question->question_title}}</td>
                <td>{{$option->option_title}}</td>
                <td>
                  @if($option->is_correct)
                    <b class="btn btn-success">დიახ</b>
                  @else 
                    <b class="btn btn-danger">არა</b>
                  @endif    
                
                </td>

                <td><a class="btn btn-success" href="{{route('admin.quizzes.questions.options.edit', $option->id)}}">რედაქტირება</a></td>
                <td>
                
                  <form action="{{ route('admin.quizzes.questions.options.delete', $option->id)}}" method="post">
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