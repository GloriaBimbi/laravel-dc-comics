@extends('layouts.app')

@section('title', "Add comic")

@section('main-content')
  <section>
    <div class="container py-4">
      <h1> Add new comic </h1>
      <form action="{{ route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')
    
        <label for="title" class="form-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}"/>
    
        <label for="price" class="form-label">Price ($): </label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}"/>
    
        <label for="series" class="form-label">Series: </label>
        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}"/>
    
        <label for="img" class="form-label">Thumb: </label>
        <input type="text" class="form-control" id="img" name="img" />

        <label for="sale" class="form-label">Sale date (yy-mm-dd hh-mm-ss): </label>
        <input type="text" class="form-control" id="sale" name="sale" value="{{ $comic->sale_date }}"/>
    
        <label for="description" class="form-label">Description: </label>
        <textarea
            class="form-control"
            id="description"
            name="description"
            rows="4"
            value="{{ $comic->description }}"
        ></textarea>
    
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
  </section>
@endsection
