@extends('layouts.app')

@section('title','Multiple Image Upload')
@push('css')
    <style>

    </style>
@endpush
@section('content')

<h4>Multiple Image Upload</h4>
<hr>

<form action="{{ route('multiple-upload') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group d-flex dynamic_field">
        <input type="file" class="form-control" name="images[]">
        <div>
            <button class="btn btn-sm btn-success" id="addNewBtn">+</button>
        </div>
    </div>

    <br>
    <button class="btn btn-sm btn-success">Submit</button>
</form>

@stop


@push('script')
<script>

$('body').on('click',"#addNewBtn",function(e){
    e.preventDefault();

    let html = `
    <div class="form-group my-2 d-flex">
        <input type="file" class="form-control" name="images[]">
        <div>
            <button class="btn btn-sm btn-danger deleteRow">-</button>
        </div>
    </div>
    `

    $('.dynamic_field').after(html);
});

// Delete Row

$('body').on('click',".deleteRow",function(e){
    e.preventDefault();
    $(this).parents(".form-group").remove();
})
</script>
@endpush
