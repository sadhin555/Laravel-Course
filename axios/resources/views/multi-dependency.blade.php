@extends('layouts.app')

@section('title','Multi Dependency Select')
@push('css')
    <style>

    </style>
@endpush
@section('content')

<h4>Multi Dependency Select</h4>
<hr>

<form action="">
    <div class="row">
        <div class="col-md-4">
            <label for="">Division:</label>
            <select name="" id="division_id" class="form-control">
                <option value="">Select A Division</option>
                @foreach ($divisions as $division)
                <option value="{{ $division->id }}">{{ $division->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label for="">District:</label>
            <select name="" id="district_id" class="form-control">
                <option value="">Select A Discrict</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="">Upazila:</label>
            <select name="" id="upazila_id" class="form-control">
                <option value="">Select A Upazila</option>
            </select>
        </div>
    </div>
</form>

@stop


@push('script')
<script>

const division_id = $$('#division_id');
const district_id = $$('#district_id');
const upazila_id = $$('#upazila_id');


division_id.addEventListener("change",async function(){

    upazila_id.innerHTML = `<option value="">Select A Upazila</option>`;
    let url = `${base_url}/districts/${this.value}`
    const res = await axios.get(url)


    let html = `<option value="">Select A Discrict</option>`;
    res.data.districts.forEach(element => {
        html += `<option value="${element.id}">${element.name}</option>`;
    });

    district_id.innerHTML = html;

})


district_id.addEventListener("change",async function(){

let url = `${base_url}/upazilas/${this.value}`
const res = await axios.get(url)

// log(res.data.upazilas)
let html = `<option value="">Select A Upazila</option>`;
res.data.upazilas.forEach(element => {
    html += `<option value="${element.id}">${element.name}</option>`;
});

upazila_id.innerHTML = html;

})
</script>
@endpush
