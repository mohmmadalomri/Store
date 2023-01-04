@extends('layout.app')
@section('page_title', 'roles')
@section('content')

    <div class="mx-auto" style="width: 1100px;">
        <form method="post" action="{{route('roles.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Role name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>


            <div class="form-floating">

                    @foreach (config('abilities') as $key => $value)
                        <input type="checkbox" class="btn-check" id="{{$key}}"
                        name="abilities[]">
                        <label class="btn " for="{{$key}}">{{$value}}</label>
                    @endforeach


            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>


@endsection('content')
