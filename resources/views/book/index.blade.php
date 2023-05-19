@extends('layout.template')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Buku</h1>
</div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Buku</th>
              <th scope="col">Kategori Buku</th>
              <th scope="col">Author</th>
              <th scope="col">Sinopsis</th>
              <th scope="col">Halaman</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($book as $item)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td>{{$item->book_name}}</td>
              <td>{{$item->category_name}}</td>
              <td>{{$item->book_author}}</td>
              <td>{{$item->book_pages}}</td>
              <td>{{$item->book_synopsis}}</td>
              <td>
                <a class="btn btn-sm btn-primary" type="submit" href="{{ route('book-edit', $item->id) }}">Edit</a>
                <a class="btn btn-sm btn-danger" type="submit" href="{{ route('book-delete', $item->id) }}">Delete</a>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
@endsection