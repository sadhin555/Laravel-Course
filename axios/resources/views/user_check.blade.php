@extends('layouts.app')

@section('title','User Check')

@section('content')

<h4>User Check</h4>
<form action="">
    <input type="text" class="form-control" placeholder="Enter Your email" id="email">
    <span id="alert"></span>
</form>
@stop


@push('script')
<script>
const emailFiled = $$("#email");
const alert = $$("#alert");
log(emailFiled)
emailFiled.addEventListener('focusout', async (e) => {

    let email = e.currentTarget.value;
    alert.innerText = "";
    if(emailFiled.value != ""){
        const response = await axios.post("{{ route('user-exists') }}",{
            email
        })
        if(response.data == "EXISTS"){
            alert.innerText = "User Exists!";
            alert.classList.add('text-danger');
            alert.classList.remove('text-success');
        }else{
            alert.innerText = "User Not Exists!";
            alert.classList.add('text-success');
            alert.classList.remove('text-danger');
        }
    }
    // log(email)
});
</script>
@endpush
