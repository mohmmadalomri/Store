@extends('layout.app')
@section('page_title', 'Add Category')
@section('content')

    <div class="mx-auto" style="width: 1100px;">
        <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Category name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <div class="form-floating">
                    <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">description</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option value="">select category</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" @if ($category->parent_id == $item->id) selected @endif>
                            {{ $item->name }}</option>
                    @endforeach

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>


@endsection('content')
