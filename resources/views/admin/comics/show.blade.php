@extends('layouts.app')

@section('content')

  <div class="container">
    <h2>
      {{ $comic->title }}
      <a class="btn btn-warning" href="{{ route('admin.comics.edit', $comic) }}">EDIT</a>
      <form action="{{ route('admin.comics.destroy',$comic) }}" class="d-inline"  method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger form-inline" >DELETE</button>
      </form>
    </h2>
    
    <img src="{{ $comic->image }}" alt="{{ $comic->slug }}">
    <p>{{ $comic->description }}</p>

    <a class="btn btn-success" href="{{ route('admin.comics.index') }}">Back</a>
  </div>
  
@endsection