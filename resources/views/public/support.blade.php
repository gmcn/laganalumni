@extends('layouts.frontend')

@section('content')



<div class="container-fluid pagehead no-gutter">

  <h1>{{ $page->title }}</h1>

  <div class="container">
    <div class="col-md-8 col-md-offset-2">
    <p>
      {!! $page->content !!}
    </p>
  </div>
  </div>

</div>

@endsection
