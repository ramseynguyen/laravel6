@extends('layout/app')
@section('title', 'Books')
@section('body')
    <div class="container">
        <form action="{{route('books.store')}}" method="POST" name="blog-form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="book-title">Title</label>
                <input type="text" class="form-control" id="book-title" name="title" placeholder="Title input">
            </div>

            <div class="form-group">
                <label for="book-summary">Summary</label>
                <input type="text" class="form-control" id="book-summary" name="summary" placeholder="Summary input">
            </div>
            
            <div class="form-group">
                <label for="book-title">Insert book Content</label>
                <input type="file" class="form-control-file" id="book-content" name="content" placeholder="Content input">
            </div>

            <div class="form-group">
                <label for="book-title">Choice Image for book</label>
                <input type="file" class="form-control-file" id="image-title" name="image" accept="image/*">
            </div>

            <div class="form-group">
                <label for="book-title">Choice category</label>
                <select class="book-category-select" required name="category">
                    <option value="0">Default</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <button type="button" class="btn btn-secondary">Back</button>
            <button type="reset" class="btn btn-dark">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection