@extends('layout')
@section('title', 'რეგისტრაცია')
@section('content')

<div class="row justify-content-center">

    <form method="POST" action="{{ route('registration') }}">
      @csrf
        <div class=" form-group">
            <label for="nameInput">შეიყვანეთ სახელი:</label>
            <input type="text" id="name" name="name" class="form-control" id="nameInput" placeholder="შეიყვანეთ სახელი">
        </div>
        <hr>
        <div class=" form-group">
          <label for="emailInput">შეიყვანეთ იმეილი:</label>
          <input type="email" id="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="შეიყვანეთ იმეილი">
        </div>
        <hr>
        <div class="form-group">
          <label for="passwordInput">შეიყვანეთ პაროლი:</label>
          <input type="password" id="password" name="password" class="form-control" id="passwordInput" placeholder="შეიყვენეთ პაროლი">
        </div>

        

        <input type="submit" name="button" value="რეგისტრაცია" class="btn btn-success btn-block fa-lg gradient-custom-2 mb-3" id="">

      </form>

</div>
{{-- 
@section('scripts')
<script src="{{asset('js/registration.js')}}" ></script>
@endsection --}}



@endsection