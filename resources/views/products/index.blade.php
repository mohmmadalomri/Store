@extends('layout.app')
@section('page_title', 'proudct')
@section('content')

    <h1>Product</h1>
    <div class="mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">create</a>
        <a href="{{ route('products.trashed') }}" class="btn btn-danger">trashed</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">category</th>
                    <th scope="col">image</th>
                    <th scope="col">ediet</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td> <img src="{{ asset('storage/' . $product->image) }}" alt="" width="100"></img>
                        </td>
                        <td><a href="/products/{{ $product->id }}/edit" class="btn btn-primary">ediet</a></td>
                        <td>
                            </form>
                            <form action="/products/{{ $product->id }}/" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>

                            </form>


                        </td>

                    </tr>
                @endforeach


    </div>
    </tbody>
    </table>

    </body>

    </html>
@endsection
