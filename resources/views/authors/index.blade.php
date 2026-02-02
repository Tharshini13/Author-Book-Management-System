@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Authors</h5>
    <a href="{{ route('authors.create') }}" class="btn btn-success btn-sm">
      + Add Author
    </a>
  </div>

  <div class="card-body p-0">
    <table class="table table-hover mb-0">
      <thead class="table-light">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th width="150">Action</th>
        </tr>
      </thead>
      <tbody>
      @forelse($authors as $author)
        <tr>
          <td>{{ $author->name }}</td>
          <td>{{ $author->email }}</td>
          <td>
            <a href="{{ route('authors.edit',$author) }}" class="btn btn-warning btn-sm">
              <i class="bi bi-pencil"></i>
            </a>

            <form method="POST" action="{{ route('authors.destroy',$author) }}" class="d-inline">
              @csrf @method('DELETE')
              <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this author?')">
                <i class="bi bi-trash"></i>
              </button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center text-muted">No authors found</td>
        </tr>
      @endforelse
      </tbody>
    </table>
  </div>
</div>

@endsection
