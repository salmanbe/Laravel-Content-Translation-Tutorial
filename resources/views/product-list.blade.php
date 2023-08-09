
@extends('layout')

@section('content')

<div class="float-end">
    <a href="{{ url('/') }}">English</a> | <a href="{{ url('/nl') }}">Nederlands</a> | <a href="{{ url('/fr') }}">Français</a>
</div>    
  <br />
  <h1>Products</h1>
  <br />
<div class="row">

  @foreach($products as $product)

  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
      <img src="https://picsum.photos/id/{{ $product->id }}/200" class="card-img-top" alt="{{ $product->heading }}">
          <br /><br />  
          <h5 class="card-title">{{ $product->heading }}</h5>
          <p class="card-text">{{ $product->meta_description }}</p>
          <a href="{{ url($product->locale . '/' . $product->slug) }}" class="btn btn-primary btn-sm btn-rounded">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
          </a>
      </div>
    </div>
  </div>  

  @endforeach

</div>

@stop