@extends('layouts.app')

@section('title', "$comic->title details")

@section('main-content')
  <section>
    <div class="container py-4">
      <h1> {{ $comic->title }} </h1>
      <a href="{{ route('comics.index') }}" class="btn btn-primary">Go Back to Comics' List </a>
      <a href="{{ route('comics.edit', $comic) }}" class="btn btn-success">Edit Comic</a>
      <div class="d-container d-flex justify-content-between align-items-start gap-5 mt-5">
        <img src="{{$comic->thumb}}" alt="comic thumb">
        <div class="info-container d-flex gap-1 flex-column">
            <span class="h4"><b>Description: </b></span>
            <p>{{$comic->description}}</p>
            <hr>
            <span class="h4"><b>Price: </b><span class="fs-6">{{$comic->price}}</span></span>
            <br>
            <span class="h4"><b>Sale date: </b><span class="fs-6">{{$comic->sale_date}}</span></span>
            <br>
            <span class="h4"><b>Series: </b><span class="fs-6">{{$comic->series}}</span></span>
            <br>
            <span class="h4"><b>Type: </b><span class="fs-6">{{$comic->type}}</span></span>
        </div>
      </div>
    </div>
  </section>
@endsection
