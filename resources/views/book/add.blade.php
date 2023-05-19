@extends('layout.template')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Buku</h1>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('book-post')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Buku</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama buku" name="book_name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kategori Buku</label>
            <select class="form-select" aria-label="Default select example" name="book_category">
                @foreach($bookCategory as $item)
                <option value="{{$item->id}}">{{$item->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Author</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan author buku" name="book_author">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Halaman</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan halaman buku" name="book_pages">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sinopsis</label>
            <textarea type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan sinopsis" name="book_synopsis"></textarea>
        </div>
        <button class="btn btn-sm btn-primary" type="submit">Tambah Buku</button>
        </form>
    </div>
</div>
@endsection