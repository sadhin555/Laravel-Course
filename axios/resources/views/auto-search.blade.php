@extends('layouts.app')

@section('title','Auto Complete Search')
@push('css')
    <style>
        .searchingItems{
            cursor: pointer;
        }
    </style>
@endpush
@section('content')

<h4>Auto Complete Search</h4>
<hr>

<form action="">
    <div class="row">
       <div class="col-md-5">
        <input type="text" class="form-control" placeholder="Enter Anything" id="searchKey"><br>
        <ul id="searchValue">
            {{-- <li><span>Lorem ipsum dolor sit amet.</span></li>
            <li><span>Lorem ipsum dolor sit amet.</span></li>
            <li><span>Lorem ipsum dolor sit amet.</span></li> --}}
        </ul>
       </div>
       <div class="col-md-5">
        <button class="btn btn-sm btn-success">Search</button>
        <button class="btn btn-sm btn-warning" id="clearBtn">Clear</button>
       </div>
    </div>
</form>

@stop


@push('script')
<script>

    const searchKey = $$("#searchKey");
    const searchValue = $$("#searchValue");
    const clearBtn = $$("#clearBtn");

    searchValue.style.display = 'none';
    searchKey.addEventListener("keyup",async function() {
        let key = this.value;
        if(key){
            let url = `${base_url}/auto-search-product/${key}`;
            searchValue.style.display = 'block';
            try{
                const response = await axios.get(url);
                showData(response.data)
            }catch(err){
                log(err)
            }
        }else{
            searchValue.style.display = 'none';
        }
    });

    const showData = (items) => {
        if(items.length === 0){
        let html = `<li><span>No Item Found!</span></li>`;
         searchValue.innerHTML = html;
        }else{
            let html = "";
            items.forEach(element => {
                html += `<li><span class="searchingItems">${element.title}</span></li>`;
                searchValue.innerHTML = html;
            });


            const searchingItems = document.querySelectorAll('.searchingItems');

            searchingItems.forEach(element => {
                element.addEventListener("click", function(){
                    searchKey.value = element.innerText;
                    searchValue.style.display = 'none';
                })
            })
        }

    }

    clearBtn.addEventListener("click",function(e){
        e.preventDefault();

        searchKey.value = "";
        searchValue.style.display = 'none';
    })
</script>
@endpush
