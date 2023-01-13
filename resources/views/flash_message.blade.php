@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
<button class="close" type="button" data-dimiss="alert" aria-hidden="true">x</button>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
    
@endif

@if (session()->has('message'))
    <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dimiss="alert" aria-hidden="true">x</button>
        {{ session()->get('message')}}        
    </div>
    
@endif