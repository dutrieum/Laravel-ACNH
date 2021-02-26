<h1>{{ ucfirst($response->name->{'name-EUen'}) }}</h1>
<div>
  <img src="{{ $response->image_uri }}" height="300px" alt="{{ $response->name->{'name-EUen'} }} image">
  <p>Price : {{ $response->price }} bells</p>
  <p>Rarity : {{ $response->availability->rarity }}</p>
</div>
