<!DOCTYPE html>
<html>
<head>
    <title>Book & Author Management</title>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="background:#f5f7fa">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="/">Book & Author Management System</a>
    <div>
      <a href="{{ route('authors.index') }}" class="btn btn-outline-light btn-sm me-2">
        <i class="bi bi-person"></i> Authors
      </a>
      <a href="{{ route('books.index') }}" class="btn btn-outline-light btn-sm">
        <i class="bi bi-book"></i> Books
      </a>
    </div>
  </div>
</nav>

<div class="container">

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

@yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
