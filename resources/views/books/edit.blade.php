@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">

    <div class="card shadow-sm">
      <div class="card-header">
        <h5>Edit Book</h5>
      </div>

      <div class="card-body">
        <form method="POST" action="{{ route('books.update', $book) }}">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label class="form-label">Author</label>
            <select name="author_id" class="form-select" required>
              @foreach($authors as $author)
                <option value="{{ $author->id }}"
                  {{ $book->author_id == $author->id ? 'selected' : '' }}>
                  {{ $author->name }}
                </option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text"
                   name="title"
                   value="{{ old('title', $book->title) }}"
                   class="form-control"
                   required>
          </div>

          <div class="mb-3">
            <label class="form-label">ISBN</label>
            <input type="text"
                   name="isbn"
                   value="{{ old('isbn', $book->isbn) }}"
                   class="form-control"
                   required>
          </div>

          <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number"
                   step="0.01"
                   name="price"
                   value="{{ old('price', $book->price) }}"
                   class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Published Year</label>
            <input type="number"
                   name="published_year"
                   value="{{ old('published_year', $book->published_year) }}"
                   class="form-control">
          </div>

          <div class="text-end">
            <a href="{{ route('books.index') }}" class="btn btn-secondary">
              Back
            </a>
            <button class="btn btn-primary">
              Update
            </button>
          </div>

        </form>
      </div>
    </div>

  </div>
</div>
@endsection
