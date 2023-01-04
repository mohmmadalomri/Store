@extends('layout.app')
@section('page_title', 'user')
@section('content')

    <h1>Users</h1>
    <div class="mb-3">
        <a href="{{ route('users.create') }}" class="btn btn-primary">create</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">adress</th>
                    <th scope="col">city</th>
                    <th scope="col">ediet</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=> $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->profile->adress }}</td>
                        <td>{{ $user->profile->city }}</td>
                        <td>{{ $user->profile->bearthdate }}</td>



                        <td><a href="/products/{{ $user->id }}/edit" class="btn btn-primary">ediet</a></td>
                        <td>
                            </form>
                            <form action="/products/{{ $user->id }}/" method="POST">
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
