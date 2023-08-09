
@extends('layout')

@section('content')

<div class="float-end">
    <a href="{{ url('/en/' . $product->translate('en')->slug) }}">English</a> | 
    <a href="{{ url('/nl/' . $product->translate('nl')->slug) }}">Nederlands</a> | 
    <a href="{{ url('/fr/' . $product->translate('fr')->slug) }}">Français</a>
</div>    
  <br />
  <h1>{{ $product->heading }}</h1>
  <br />
<div class="row">
  
  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
      <img src="https://picsum.photos/id/{{ $product->id }}/200" class="card-img-top" alt="{{ $product->heading }}">
          <br /><br />  
          <p class="card-text">Code: {{ $product->item_code }}</p>
          <p class="card-text">€{{ $product->price }}</p>          
      </div>
    </div>
  </div>  

  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">{{ $product->description }}</p>
      </div>
    </div>
  </div>  

</div>
<br />
    <a href="{{ url($locale) }}" class="btn btn-primary btn-sm btn-rounded">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
      </svg>
    </a>

@stop