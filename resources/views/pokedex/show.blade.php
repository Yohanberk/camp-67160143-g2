<h2>{{ $pokedex->name }}</h2>

<img src="{{ $pokedex->image_url }}" width="200">

<p>Type: {{ $pokedex->type }}</p>
<p>Species: {{ $pokedex->species }}</p>
<p>Height: {{ $pokedex->height }}</p>
<p>Weight: {{ $pokedex->weight }}</p>
<p>HP: {{ $pokedex->hp }}</p>
<p>Attack: {{ $pokedex->attack }}</p>
<p>Defense: {{ $pokedex->defense }}</p>

<a href="/pokedex">กลับ</a>
