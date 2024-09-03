@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Thêm Danh mục</h1>
        <form action="/create" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="/categories" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
