@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">

    <div class="card shadow-sm">
      <div class="card-header">
        <h5>Add Book</h5>
      </div>

      <div class="card-body">
        <form method="POST" action="{{ route('books.store') }}">
          @csrf

          <div class="mb-3">
            <label class="form-label">Author</label>
            <select name="author_id" class="form-select" required>
              <option value="">Select Author</option>
              @foreach($authors as $author)
                <option value="{{ $author->id }}">
                  {{ $author->name }}
                </option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">ISBN</label>  
            <input type="text" name="isbn" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" step="0.01" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Published Year</label>
            <input type="number" name="published_year" class="form-control">    
          </div>

          <div class="text-end">
            <a href="{{ route('books.index') }}" class="btn btn-secondary">
              Back
            </a>
            <button class="btn btn-success">
              Save
            </button>
          </div>

        </form>
      </div>
    </div>

  </div>
</div>
@endsection
