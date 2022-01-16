@extends('admin.layout')
@section('content')
<div class="row">                
            
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">დადასტურება</th>

            <th scope="col">ქვიზის დასახელება</th>
            <th scope="col">ავტორი</th>

            <th scope="col">დეტალები</th>
            <th scope="col">წაშლა</th>
          </tr>
        </thead>
        <tbody>
          @foreach($quizzes as $quiz)
            <tr>
                <td>#{{$quiz->id}}</td>
                <td>
                 
                  <form action="{{ route('admin.quizzes.approveQuiz', $quiz->id)}}" method="post">
                    @csrf
                    @if($quiz->is_approved)
                    <input class="btn btn-success" type="submit" value="დადასტურებული" />
                    @else 
                    <input class="btn btn-danger" type="submit" value="დაუდასტურებელი" />

                    @endif 
                  </form>
                  
 
                </td>
                <td>{{$quiz->title}}</td>
                <td>{{$quiz->author->name}}</td>

                <td><a class="btn btn-success" href="{{ route('admin.quizzes.quizDetails', $quiz->id)}}">რედაქტირება</a></td>
                <td>
                  
                  <form action="{{ route('admin.quizzes.delete', $quiz->id)}}" method="post">
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