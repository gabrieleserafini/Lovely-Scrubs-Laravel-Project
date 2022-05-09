@extends('layouts.backoffice')

@section('content')

@if(session('hasError'))
        <div class="alert alert-danger mt-2">
            @if(session('action') === 'destroy')
                Delete action not allowed
            @endif
        </div>
    
@endif

<div class="pb-3">
    <h1>Home || Products Managment </h1>
</div>

<table class="table mt-5">
    <thread>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thread>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>
                    <img src="{{ $product->image }}" width="70">
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>€ {{ $product->price }}</td>
                <td>{{ $product->quantity }} pieces</td>
                <td>
                    <a href="/products/{{ $product->id }}/edit" class="btn btn-outline-primary">Edit </a>
                </td>
                <td>
                   <form method="POST" action="/products/{{ $product->id }}">
                        @method('DELETE')
                        @csrf()
                        
                        <button class="btn btn-outline-danger">Delete</button>
                    </form> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    <div class="form-group p-3">
        <a href="http://homestead.test/products/create" class="btn btn-outline-primary "> Create New Product</a>
    </div>

@endsection