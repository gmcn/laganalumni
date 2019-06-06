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

@if ($page->id == 1)

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2313.4240428433986!2d-5.887906448341321!3d54.56127789061741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486109482fdf3da1%3A0x852d4ba1a48b9acb!2sLagan+College!5e0!3m2!1sen!2suk!4v1498223534501" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

@endif



@endsection
