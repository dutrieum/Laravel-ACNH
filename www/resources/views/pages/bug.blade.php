@extends('layout.head')
@section('content')
<section class="bug">
  <h1>{{ ucfirst($response->name->{'name-EUen'}) }}</h1>
  <div class="content">
    <div class="picture">
      <img src="{{ $response->image_uri }}" alt="{{ $response->name->{'name-EUen'} }} image">
    </div>
    <div class="data">
      <div class="bug_data">
        <h2>Price</h2>
        <p>{{ $response->price }} bells</p>
      </div>
      <div class="bug_data">
        <h2>Rarity</h2>
        <p>{{ $response->availability->rarity }}</p>
      </div>
      <div class="bug_data">
        <h2>Catch-phrase</h2>
        <p>{{ $response->{'catch-phrase'} }}</p>
      </div>
      <div class="bug_data">
        <h2>Availability time</h2>
        <p>{{ $response->availability->time }}</p>
      </div>
      <div class="bug_data">
        <h2>Availability months</h2>
        <p>
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
  </div>
</section>
@endsection
