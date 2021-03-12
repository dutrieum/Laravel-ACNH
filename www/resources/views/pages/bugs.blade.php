@extends('layout.head')
@section('content')
<section class="bugs">
  <h1>Bug guide</h1>
  <div class="multiple">
    @foreach ($response as $i=>$row)
      <div>
        <h2>{{ ucfirst($row->name->{'name-EUen'}) }}</h2>
        <a href="{{ route('bug',['id'=>$i]) }}"><img src="{{ $row->icon_uri }}" alt="{{ $row->name->{'name-EUen'} }} icon"></a>
        <p>Price : {{ $row->price }} bells</p>
        <p>Rarity : {{ $row->availability->rarity }}</p>
      </div>
    @endforeach
  </div>
</section>
@endsection
