@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sửa Danh mục</h1>
        <form action="/update/{{$category -> id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" required>
            </div>
            <button type="submit" class="btn btn-success">Cập nhật</button>
            <a href="/" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
