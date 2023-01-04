<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>creat product</title>
</head>

<body>
    <div class="mx-auto" style=" width: 80%">
        @csrf
        <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="POST">
            <h1>Create Product</h1>
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">product name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">description</label>
                <div class="form-floating">
                    <textarea class="form-control" name="description" id="description" style="height: 100px"></textarea>
                    <label for="floatingTextarea2"></label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="number" name="price" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">main image</label>
                <input type="file" class="form-control" id="main_image" name="main_image">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple>
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                    <option selected> select category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $product->category_id == $category->id ? 'selected' : '' }}
                            {{ $category->name }}</option>
                    @endforeach

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
