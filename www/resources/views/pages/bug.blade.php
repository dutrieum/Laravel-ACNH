@extends('layout.head')
@section('content')
<section class="bug">
  <h1>{{ ucfirst($response->name->{'name-EUen'}) }}</h1>
  <div class="content">
    <div class="picture">
      <img src="{{ $response->image_uri }}" alt="{{ $response->name->{'name-EUen'} }} image">
    </div>
    <div class="data">
      <p>Price : {{ $response->price }} bells</p>
      <p>Rarity : {{ $response->availability->rarity }}</p>
      <p>Catch-phrase : {{ $response->{'catch-phrase'} }}</p>
      <p>Availability time : {{ $response->availability->time }}</p>
      <p>Availability months : 
      @foreach ($response->availability->{'month-array-northern'} as $month_northern)
        @if($loop->first)
        {{ ucfirst($months[$month_northern]) }}
        @endif

        @if(!$loop->first)
        {{ $months[$month_northern] }}
        @endif
        
        @if(!$loop->last)
        -
        @endif
      @endforeach
      </p>
    </div>
  </div>
</section>
@endsection
