@extends('layouts.default')
@section('title', ' - Projeto')
@section('content')

  <section class="project">
    <div class="project-images">
      @php
        $gallery = json_decode($project->gallery, true)
      @endphp
      @php
        $count = 0
      @endphp
      @isset($gallery)
        @php
            $count = count($gallery)
        @endphp
      @endisset
      @for($i = 1; $i < $count; $i++)
        <div class="box-image">
          <figure>
            <img src="{{ Voyager::image($gallery[$i]) }}" alt="{{ $gallery[$i] }}">
          </figure>
        </div>
      @endfor
    </div>
    <div class="project-description">
      {{ $project->description }}
    </div>
  </section>

@endsection
