@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">

    <div class="card shadow-sm">
      <div class="card-header">
        <h5>Edit Author</h5>
      </div>

      <div class="card-body">
        <form method="POST" action="{{ route('authors.update', $author) }}">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text"
                   name="name"
                   value="{{ old('name', $author->name) }}"
                   class="form-control"
                   required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email"
                   name="email"
                   value="{{ old('email', $author->email) }}"
                   class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Bio</label>
            <textarea name="bio"
                      rows="3"
                      class="form-control">{{ old('bio', $author->bio) }}</textarea>
          </div>

          <div class="text-end">
            <a href="{{ route('authors.index') }}" class="btn btn-secondary">
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
