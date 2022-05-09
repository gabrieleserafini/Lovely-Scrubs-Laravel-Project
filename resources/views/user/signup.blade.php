@extends('layouts.app')

@section('content')

    <form action="/signup" method="POST">
    <div class="form-control">
        @csrf()
            <label for="email">Email:</label>
            <input type="email" name="email">
        </div>
        <div class="form-control">
            <label for="name">Name:</label>
            <input type="text" name="name">
        </div>
        <div class="form-control">
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <div class="form-control">
            <label for="password_confirmation">Password Confirm::</label>
            <input type="password" name="password_confirmation">
        </div>
        <div class="row">
            <div class="col-lg-12 text-end">
                <button class="btn btn-primary">Signup</button>
            </div>
        </div>

        
    </form>

@endsection