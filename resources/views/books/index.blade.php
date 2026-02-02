@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Books</h5>
    <a href="{{ route('books.create') }}" class="btn btn-success btn-sm">
      + Add Book
    </a>
  </div>

  <div class="card-body p-0">
    <table class="table table-hover mb-0">
      <thead class="table-light">
        <tr>
          <th>Title</th>
          <th>Author</th>
          <th>ISBN</th>
          <th width="150">Action</th>
        </tr>
      </thead>
      <tbody>

      @forelse($books as $book)
        <tr>
          <td>{{ $book->title }}</td>
          <td>{{ $book->author->name }}</td>
          <td>{{ $book->isbn }}</td>
          <td>
            <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">
              <i class="bi bi-pencil"></i>
            </a>

            <form method="POST"
                  action="{{ route('books.destroy', $book) }}"
                  class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm"
                      onclick="return confirm('Delete this book?')">
                <i class="bi bi-trash"></i>
              </button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="text-center text-muted">
            No books found
          </td>
        </tr>
      @endforelse

      </tbody>
    </table>
  </div>
</div>

@endsection
