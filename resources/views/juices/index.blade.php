@extends('layouts.app')

@section('content')
<div class="wrapper juice-index">
    <div class="order-header">
   <h1>Juice Orders</h1>
   </div>
    @foreach($juices as $juice)
        <div class="juice-item">
            <img src="/img/juices.png" alt="juices icon" class="img">
            <h4><a href="/juices/{{ $juice->id }}" class="order-juice">{{ $juice->name }}</a></h4>
        </div>
    @endforeach

</div>
@endsection  
