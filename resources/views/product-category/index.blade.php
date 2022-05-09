@extends('layouts.backoffice')

@section('content')
    @if(session('hasError'))
        <div class="alert alert-danger mt-2">
            @if(session('action') === 'destroy')
                Delete action not allowed: check if the selected category has child
            @endif
        </div>
    
    @endif
    <div class="pb-3">
        <h1>Home || Product Categories Managment</h1>
    </div>

    <table class="table mt-5">
        <thread>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Primary Category</th>
                <th>Edit/Delete</th>
            </tr>
        </thread>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->product_category_id }}</td>
                    <td>
                        <a href="/product-categories/{{ $category->id }}/edit" class="btn btn-outline-primary">Edit</a>
                        <form class="d-inline" method="POST" action="/product-categories/{{ $category->id }}">
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
        <a href="http://homestead.test/product-categories/create" class="btn btn-outline-primary"> Create New Category</a>
    </div>

@endsection