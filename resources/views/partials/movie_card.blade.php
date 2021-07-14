<div class="card">

    <div class="poster">
        <img src="{{ $movie->poster ? $movie->poster : asset('img/poster-placeholder.png') }}" alt="{{ $movie->title }}">
    </div>
    
    <div class="info">
        <h2>{{ $movie->title }}</h2>
        <p>Vote: {{ $movie->vote }}</p>
        <small>{{ $movie->nationality }} - {{ date('Y', strtotime($movie->date)) }}</small>
    </div>
    
</div>
