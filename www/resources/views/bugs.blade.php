<h1>Bug guide</h1>
@foreach ($response as $row)
  <div>
    <p>Name : {{ ucfirst($row->name->{'name-EUen'}) }}</p>
    <img src="{{ $row->icon_uri }}" height=100px alt="{{ $row->name->{'name-EUen'} }} icon">
    <p>Price : {{ $row->price }} bells</p>
    <p>Rarity : {{ $row->availability->rarity }}</p>
  </div>
@endforeach
