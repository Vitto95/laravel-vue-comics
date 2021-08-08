@extends('layouts.app')

@section('content')

<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Slug</th>
        <th scope="col">Price</th>
        <th colspan="3" >Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
      <tr>
        <th scope="row">{{ $comic->id }}</th>
        <td>{{ $comic->title }}</td>
        <td>{{ $comic->slug }}</td>
        <td>{{ $comic->price }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('admin.comics.show', $comic) }}">SHOW</a>
        </td>
        <td>
          <a class="btn btn-warning" href="{{ route('admin.comics.edit', $comic) }}">EDIT</a>
        </td>
        <td>
          <form action="{{ route('admin.comics.destroy',$comic) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" >DELETE</button>
          </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>

  {{ $comics->links() }}
</div>
  

@endsection