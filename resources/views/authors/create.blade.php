@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">

    <div class="card shadow-sm">
      <div class="card-header">
        <h5>Add Author</h5>
      </div>

      <div class="card-body">
        <form method="POST" action="{{ route('authors.store') }}">
          @csrf

          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Bio</label>
            <textarea name="bio" class="form-control" rows="3"></textarea>
          </div>

          <div class="text-end">
            <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back</a>
            <button class="btn btn-success">Save</button>
          </div>

        </form>
      </div>
    </div>

  </div>
</div>

@endsection
