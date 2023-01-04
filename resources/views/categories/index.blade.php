@extends('layout.app')
@section('page_title', 'Categories')
@section('content')
    <div class="mx-auto" style="width: 1100px;">
        @if (session()->has('done'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    {{ session()->get('done') }}
                </div>
            </div>
        @endif
        <a target="blank" class="btn btn-primary" href="{{ '/categories/create' }}">

            create category
            {{-- <button type="button" class="btn btn-primary">create category</button> --}}
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">slug</th>
                    <th scope="col">image</th>

                    <th scope="col">edit</th>
                    <th scope="col">delet</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $category->image) }}" alt="" width="100">
                        </td>
                        <td><a target="blank" href="/categories/{{ $category->id }}/edit">
                                <button type="button" class="btn btn-primary">EDIT</button>
                            </a>
                        </td>
                        <td>
                            <form action="/categories/{{ $category->id }}/" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-primary">delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection('content')
