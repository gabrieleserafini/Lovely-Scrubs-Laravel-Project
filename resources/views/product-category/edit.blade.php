@extends('layouts.backoffice')

@section('content')
    <div class="pb-3">
        <h2> Product Category || Edit  </h2>
    </div>
    <form action="/product-categories/{{ $productCategory->id }}" method="POST" class="border mt-5" >
        @csrf
        @method('PUT')
        <div class="form-group p-3">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name" value="{{ $productCategory->name }}">
            @error('name')
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
                    @if($category->id === $productCategory->product_category_id) selected @endif
                    >
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="p-3">
            <button class="btn btn-outline-primary ">Edit</button>  
        </div>
    </form>
@endsection