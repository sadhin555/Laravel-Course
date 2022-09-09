@extends('layouts.master')

@section('title','Product')
@section('master_contnet')

 <h3>Product</h3>
 <a href="{{ route('product.create') }}" class="btn btn-sm btn-success">Create</a>
 @if (session('message'))
 <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
    {{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
 @endif

 <table class="table table-bordered mt-4 text-center">
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('product.view',$product->slug) }}" class="btn btn-sm btn-success">View</a>
                <a href="{{ route('product.edit',$product->slug) }}"" class="btn btn-sm btn-info">Edit</a>
                <form action="{{ route('product.delete',$product->slug) }}" class="d-inline" method="POST">
                    @csrf
                    <button  class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty

        @endforelse

    </tbody>
 </table>
@stop
