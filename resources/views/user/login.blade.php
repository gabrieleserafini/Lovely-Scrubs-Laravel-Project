@extends('layouts.app')

@section('content')
    <form action="/login" method="POST">
        @csrf()
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email" name="email">
        </div>
        <div class="form-group">
            <label for="">Password:</label>
            <input type="password" name="password">
        </div>
        <div class="row">
           <div class="">
               <button class="btn btn-primary">Login</button>
           </div>
        </div>

        
    </form>
@endsection