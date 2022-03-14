@extends('layouts.default')
@section('title', ' - Home')
@section('content')

  <section class="masonry-with-columns">
    @foreach($home as $item)
      <div>
        <a href="projeto/{{ $item->project->slug }}">
          <img class="img-fluid" src="{{ Voyager::image($item->project_image) }}" alt="{{ $item->name }}">
          <div>
              {{ $item->name }}
          </div>
        </a>
      </div>
    @endforeach
  </section>

@endsection
