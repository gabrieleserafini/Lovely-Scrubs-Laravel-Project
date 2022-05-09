@extends('layouts.backoffice')

@section('content')
    <div class="pb-3">
        <h2> Products || Creating Products </h2>
    </div>
    <form action="/products" method="POST" class="border mt-5" enctype="multipart/form-data" >
        @csrf
        <div class="form-group p-3">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name" >
            @error('name')
                <div class="alert alert-danger mt-2"> 
                   {{ $message }} 
                </div>
            @enderror

        </div>  
        <div class="form-group p-3">
            <label for="description">Description</label>
            <input class="form-control" id="description" name="description" placeholder="...">
            @error('description')
                <div class="alert alert-danger mt-2"> 
                   {{ $message }} 
                </div>
            @enderror

        </div>
        <div class="form-group p-3">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="...">
            @error('price')
                <div class="alert alert-danger mt-2"> 
                   {{ $message }} 
                </div>
            @enderror

        </div>        
        <div class="form-group p-3">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="...">
            @error('quantity')
                <div class="alert alert-danger mt-2"> 
                   {{ $message }} 
                </div>
            @enderror

        </div>
        <div class="form-group p-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="...">
            @error('image')
                <div class="alert alert-danger mt-2"> 
                   {{ $message }} 
                </div>
            @enderror

        </div>

       <div class="form-group p-3">
            <label for="product-category" class="form-label">Category</label>
                <select id="product-category" name="product-category-id" class="form-select">
                    <option value="">-</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
        </div>
        <div class="p-3" >
        
            
            <button class="btn btn-primary ">Create</button>
            
        </div>
    </form>
@endsection