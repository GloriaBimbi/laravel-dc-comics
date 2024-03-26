@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Laravel Comics</h1>
      {{-- pulsante per aggiungere un nuovo elemento alla lista --}}
      <a href="{{ route('comics.create') }}" role="button" class="btn btn-success mt-4">Add new comic</a>
      {{-- lista di elementi della tabella --}}
      <div class="card-container d-flex justify-content-between flex-wrap gap-5 mb-5 mt-5">
        @forelse($comics as $comic)
        <div class="card" style="width: 18rem;">
          <img src="{{$comic['thumb']}}" class="card-img-top" alt="comic thumb">
          <div class="card-body">
            <h5 class="card-title">{{$comic['title']}}</h5>
            <p class="card-text">{{$comic['description']}}</p>
            {{-- bottone per aprire il dettaglio dell'elemento --}}
            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Open details</a>
            {{-- bottone per eliminare un elemento dalla lista --}}
            <form action="{{ route('comics.update', $comic) }}" method="POST" >
              @csrf <!-- serve a Laravel -->
              @method('DELETE')
              <input type="submit" value="Delete" class="btn btn-danger mt-3">
            </form>
          </div>
        </div>
        @empty
        <span>no comics found...</span>
        @endforelse
      </div>
    </div>
  </section>
@endsection
