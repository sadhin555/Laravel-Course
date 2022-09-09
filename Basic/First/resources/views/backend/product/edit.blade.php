@extends('layouts.master')

@section('title','Product')
@section('master_contnet')

 <h3>Product Edit</h3>
 <a href="{{ route('product.index') }}" class="btn btn-sm btn-success">Back</a>

 <div class="card">
    <div class="card-body">
        <form action="{{ route('product.update', $product->slug) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Product Name" value="{{ $product->name}}">
                @error("name")
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Product Price" value="{{$product->price }}">
                @error("price")
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-sm btn-success">Update</button>
            </div>
        </form>
    </div>
 </div>

@stop
