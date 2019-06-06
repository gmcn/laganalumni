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

<div class="container-fluid volunteer">

  <div class="row">

    <div class="col-md-4">
      <div class="col-md-2">
        Pic
      </div>
      <div class="col-md-10">
        <h3>Reason here</h3>
        <p>
          Lorem ipsum dolor site amet, consectetur adipiscing elit. aenean euismod bibendum laoreet proin gravida.
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="col-md-2">
        Pic
      </div>
      <div class="col-md-10">
        <h3>Reason here</h3>
        <p>
          Lorem ipsum dolor site amet, consectetur adipiscing elit. aenean euismod bibendum laoreet proin gravida.
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="col-md-2">
        Pic
      </div>
      <div class="col-md-10">
        <h3>Reason here</h3>
        <p>
          Lorem ipsum dolor site amet, consectetur adipiscing elit. aenean euismod bibendum laoreet proin gravida.
        </p>
      </div>
    </div>

  </div><!-- /.row -->

  <div class="row waystodonate">
    <h1>Ways to Donate</h1>
    <div class="col-md-4">
      <h3>Online</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <button>Donate Now</button>
    </div>
    <div class="col-md-4">
      <h3>Cheque</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <button>Download Form</button>
    </div>
    <div class="col-md-4">
      <h3>Bank Transfer</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <button>Download Form</button>
    </div>
  </div>

</div><!-- /.container-fluid volunteer -->

@endsection
