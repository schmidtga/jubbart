@extends('layouts.default')
@section('title', ' - Home')
@section('content')

    <section>
        @foreach($home as $item)
            <div>
                <a href="project/{{ $item->project->slug }}">
                    <img class="img-fluid" src="{{ Voyager::image($item->project_image) }}" alt="{{ $item->name }}">
                    {{ $item->name }}
                </a>
            </div>
        @endforeach
    </section>

@endsection
