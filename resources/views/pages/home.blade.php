@extends('layouts.default')
@section('title', ' - Home')
@section('content')

    <section>
        @foreach($home as $project)
            <div>
                <a href="project/{{ $project->name }}">
                    {{ $project->name }}
                </a>
            </div>
        @endforeach
    </section>

@endsection
