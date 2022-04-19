@extends('layouts.app')

@section('content')
<div class="wrapper juice-details">
   <div class= "show-header">
   <h1>Order for {{ $juice->name }}</h1>
   </div>
   <div class="show">
   <p class="type">Type - {{$juice->type }}</p>
   <p class="texture">Texture - {{ $juice->texture }}</p>
   <p class="toppings">Extra toppings:</p>
   <ul>
      @foreach($juice->toppings as $topping)
      <li>{{ $topping }}</li> 
      @endforeach
   </ul>
   </div>
   <form action="{{ route('juices.destory', $juice->id) }}" method="POST" class="sho-btn">
     @csrf
     @method('DELETE')
     <button>Complete Order</button>
     
   </form>
</div>
<a href="/juices" class="back"><- Back to all juices</a>
@endsection  
