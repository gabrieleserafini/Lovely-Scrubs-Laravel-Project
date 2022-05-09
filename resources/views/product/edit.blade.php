@extends('layouts.backoffice')

@section('content')
    <div class="pb-3">
        <h2> Product || Edit </h2>
    </div>
    <form action="/products/{{ $product->id }}" method="POST" class="border mt-5" enctype="multipart/form-data" >
        @csrf
        @method('PUT')

        <div class="form-group p-3">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name" value="{{ $product->name }}">
            @error('name')
                <div class="alert alert-danger mt-2"> 
                   {{ $message }} 
                </div>
            @enderror
        </div>  

        <div class="form-group p-3">
            <label for="description">Description</label>
            <input class="form-control" id="description" name="description" value="{{ $product->description }}">
            @error('description')
                <div class="alert alert-danger mt-2"> 
                   {{ $message }} 
                </div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
            @error('price')
                <div class="alert alert-danger mt-2"> 
                   {{ $message }} 
                </div>
            @enderror
        </div>       

        <div class="form-group p-3">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
            @error('price')
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
            <label for="product-category">Product Category</label>
            <select class="form-control" id="product-category" name="product-category-id">
                    <option value="">-Select Primary Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"\ 
                    @if($category->id === $product->product_category_id) selected @endif
                    >
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="p-3" >
            
            <button class="btn btn-primary ">Edit</button>
            
        </div>
    </form>
@endsection