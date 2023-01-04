@extends('layout.app')
@section('page_title','Edit category')
@section('content')
    <div class="mx-auto" style="width: 1100px;">
        <form method="post" action="/categories/{{ $category->id }}" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                {{ method_field('PUT') }}
                <label for="name" class="form-label">Category name</label>
                <input type="text" value="{{ $category->name }}" name="name" class="form-control" id="name"
                    aria-describedby="emailHelp"></input>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <div class="form-floating">
                    <textarea name="description" value="{{ $category->description }}" class="form-control" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">description</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-floating">
                <select class="form-select" name="parint_id" id="floatingSelect"
                    aria-label="Floating label select example">

                    <option value="">select category</option>

                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}"
                            @if ($category->parent_id == $item->id) selected @endif>
                            {{ $item->name }}</option>
                    @endforeach



                </select>
            </div>
            <button type=" submit" class="btn btn-success">Update</button>

        </form>
    </div>
@endsection('content')
