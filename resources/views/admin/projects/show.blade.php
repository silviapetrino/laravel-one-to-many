@extends('layouts.admin')

@section('content')


<div class="container">

    <h1 class="py-5 text-white">Project Details</h1>


        <div class="card mb-5" style="width: 35rem;">

            <div class="card"></div>
                <div class="card-body">
                <h5 class="card-title">{{ $project->title}}</h5>
                  {{-- print type if exists --}}
                @if ($project->type)
                <p class="card-text"><span><strong>Type: </strong></span>{{ $project->type?->name }}</p>
                @endif
                <p class="card-text"><span>Description: </span>{{ $project->description }}</p>
                <p class="card-text"><span>Release date: </span>{{ $project->release_date }}</p>
                <p class="card-text">{{ $project->description }}</p>

                </div>
            </div>
            <a class="btn btn-light fw-bold" href="{{ route('admin.projects.index')}}"><i class="fa-solid fa-arrow-left"></i></a>
        </div>


</div>


@endsection
