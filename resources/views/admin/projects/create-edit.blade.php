@extends('layouts.admin')


@section('content')

{{--  creating a new project or editing an existing one --}}

<div class="container py-5">
    <form action="{{ $route }}" method="POST" class="text-white">
        @csrf
        @method($method)
        <h2>{{ $title }}</h2>

        {{-- print all errors --}}
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $project?->title)}}">
                @error('title')
                <p class="text-danger fw-bold">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Type</label>
                <select class="form-select" name="type_id" id="type_id">
                    <option value="">Select type</option>
                    @foreach ($types as $type)
                        <option
                            value="{{ $type->id }}"
                            @if ($type->type_id == old('type_id', $project?->type_id)) selected @endif >{{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>




            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('title', $project?->description)}}">
                @error('description')
                <p class="text-danger fw-bold">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label">release date: </label>
                <input type="text" class="form-control @error('release_date') is-invalid @enderror" id="release_date" name="release_date" value="{{ old('title', $project?->release_date)}}">
                @error('release_date')
                <p class="text-danger fw-bold">{{ $message }}</p>
                @enderror
            </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
      </form>

</div>

<script>
       ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>




@endsection
