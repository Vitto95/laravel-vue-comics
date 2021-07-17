@extends('layouts.app')

@section('content')

  <div class="container">
    <form action="{{ route('admin.comics.store') }}" method="POST">
      @csrf
      @method('POST')

      
      {{-- Title --}}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Insert a title..">
      </div>

      {{-- Description --}}
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert a description"></textarea>
      </div>

      {{-- Author --}}
      <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" id="author" name="author" placeholder="Insert a author..">
      </div>

      {{-- Writer --}}
      <div class="form-group">
        <label for="writer">Writer</label>
        <input type="text" class="form-control" id="writer" name="writer" placeholder="Insert a writer..">
      </div>
      
      {{-- Price --}}
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Insert a price..">
      </div>

      {{-- Image --}}
      <div class="form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Insert an image..">
      </div>

      {{-- Types --}}
      <div class="form-group">
        <label for="type">Type</label>
        <select class="form-control" id="type" name="type">
          <option value="">Select a type</option>
          @foreach ($types as $type)
            <option value="{{ $type }}">{{ $type }}</option>
          @endforeach  
        </select>
      </div>

      {{-- Series --}}
      <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Insert an series..">
      </div>

      {{-- Sale Date --}}
      <div class="form-group">
        <label for="sale_date">Sale date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Insert a Sale date..">
      </div>

      {{-- Send and reset --}}
      <div>
        <button class="btn btn-primary" type="submit">Save</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
      </div>
      
    </form>
  </div>
  
@endsection