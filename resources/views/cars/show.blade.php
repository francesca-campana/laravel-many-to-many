<h1>Dettagli Auto</h1>

<h2> {{ $car->manifacturer}} {{ $car->engine }}</h2>
<div>
  <span>Type: </span>
  @foreach ($car->tags as $tag)
    <span>{{$tag->name}}</span>
    <br>
  @endforeach
</div>
<ul>
  <li>Year: {{ $car->year }}</li>
  <li>Plate: {{ $car->plate }}</li>
</ul>

<h3>Owner details</h3>
<p>
  <b>{{ $car->user->name}}</b>
</p>
<p>
  For contacts: <br>
  <i>{{ $car->user->email}}</i>
</p>
<li>
  <a href="{{ route('cars.edit', $car) }}">Modifica</a>
  <a href="{{ route('cars.index')}}">Torna alla lista</a>
</li>
