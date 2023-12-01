@extends('layouts.admin')


@section('content')

    <div class="container my-5">

        <a class="btn btn-light" href="{{ route('admin.types.create') }}">Add new type +</i></a>
        
        <table class="table table-dark table-hover types" width="50%">
            <thead>
              <tr>
                <th class="text-danger" scope="col">Name</th>
                <th scope="col">actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <th scope="row">
                            <i class="fa-regular fa-circle mx-1"></i>
                             {{ $type->name }}
                        </th>
                        <th scope="row">
                            {{-- actions --}}
                            <a class="btn btn-light" href="{{ route('admin.types.show', $type) }}"><i class="fa-solid fa-file-lines"></i></i></a>

                        </th>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>


@endsection
