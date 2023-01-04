@extends('layout.app')
@section('page_title', 'edit product')
@section('content')

    <div class="mx-auto" style=" width: 80%">
        @csrf
        <form enctype="multipart/form-data" action="/products/{{ $product->id }}/" method="POST">
            {{ csrf_field() }}
            <h1>Edit Product</h1>
            @csrf

            <div class="mb-3">
                {{ method_field('PUT') }}
                <label for="exampleInputEmail1" class="form-label">product name</label>
                <input type="text" value="{{ $product->name }}" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">description</label>
                <div class="form-floating">
                    <textarea value="{{ $product->description }}" class="form-control" name="description" id="description"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2"></label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="number" value="{{ $product->price }}" name="price" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">image</label>
                <input type="file" value="{{ $product->image }}" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                    <option selected> select category</option>
                    @foreach ($product as $category)
                        <option value="{{ $product->category }}"></option>
                    @endforeach


                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
