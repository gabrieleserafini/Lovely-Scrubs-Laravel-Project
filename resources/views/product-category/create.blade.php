@extends('layouts.backoffice')

@section('content')
    <div class="pb-3">
        <h2> Product Category || Creating Category </h2>
    </div>
    <form action="/product-categories" method="POST" class="border mt-5" >
        @csrf
        <div class="form-group p-3">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name" placeholder="...">
            @error('name')
               <div class="alert alert-danger mt-2"> {{ $message }} </div>
            @enderror

        </div>
        <div class="form-group p-3">
            <label for="product-category">Product Category</label>
            <select class="form-control" id="product-category" name="product-category-id">
                    <option value="">-Select Primary Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="p-3">
            <button class="btn btn-outline-primary ">Create</button>  
        </div>
    </form>
@endsection