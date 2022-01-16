@extends('layout')
@section('title', 'ავტორიზაცია')
@section('content')

<div class="row justify-content-center">

    <form action="{{ route('auth') }}" method="POST">
      @csrf
        <div class=" form-group">
          <label for="emailInput">შეიყვანეთ იმეილი:</label>
          <input type="email" id="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="შეიყვანეთ იმეილი">
        </div>
        <hr>
        <div class="form-group">
          <label for="passwordInput">შეიყვანეთ პაროლი:</label>
          <input type="password" id="password" name="password" class="form-control" id="passwordInput" placeholder="შეიყვენეთ პაროლი">
        </div>

    
        <input type="submit" name="submit" class="btn btn-success btn-block fa-lg gradient-custom-2 mb-3" value="ავტორიზაცია" id="">
    </form>

</div>

@section('scripts')
<script src="{{asset('js/login.js')}}" ></script>
@endsection

@endsection