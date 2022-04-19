@extends('layouts.app')

@section('content')
<div class="wrapper create-juice">
  <div class="create-header">
  <h1>Make a New Juice Drink</h1>
  </div>
  <div class="create-form">
  <form action="/juices" method="POST">
  @csrf 
      <label for="name">Your name:</label>
      <input type="text" id="name" name="name">
      <label for="type">Choose juice type:</label>
      <select name="type" id="type">
          <option value="tropical">Tropical</option>
          <option value="coconut">Coconut</option>
          <option value="pineapple">Pineapple</option>
          <option value="veg city">Veg City</option>
      </select>
      <label for="texture">Choose texture type:</label>
      <select name="texture" id="texture">
          <option value="chewy light">Chewy Light</option>
          <option value="flaky light">Flaky Light</option>
          <option value="Smooth & thick">Smooth & Thick</option>
          <option value="foamy">Foamy</option>
      </select>
      <fieldset>
          <label>Extra toppings:</label>
          <input type="checkbox" name="toppings[]" value="cranberries">Carnberries<br />
          <input type="checkbox" name="toppings[]" value="mango">Mango<br />
          <input type="checkbox" name="toppings[]" value="papaya">Papaya<br />
          <input type="checkbox" name="toppings[]" value="kiwi">Kiwi<br />
      </fieldset>
      <input type="submit" value="Order Juice">
      </div>
  </form>
</div>
@endsection  