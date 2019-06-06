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
    <div class="col-md-4 gallery no-gutter">
        <img src="assets/img/gallery1.jpg" alt="Gallery 1" />
    </div>
    <div class="col-md-8 red-col">
      <div style="position: relative; height: 100%">
        <div class="vertical-align">
        <h2>
          A Special Request from the Careers Department
        </h2>
        <p>
          We are very grateful to our Past Pupils who have returned to the school to assist our current pupils with career advice and have volunteered their services as career mentors. In addition, we would like to thank our Past Pupils who have assisted with mock interviews. This contribution has enabled high quality preparation for pupils as they embark upon the next stage.
        </p>
        <p>
          We also welcome any work experience placement you can offer our year 11 or year 13 students. If you would like to volunteer to help the careers department please contact Mrs Kim Bingham.
        </p>
        <p>
          To volunteer, please email Mrs Kim Bingham <a href="mailto:kbingham515@c2kni.net">kbingham515@c2kni.net</a>
        </p>


        </div>
      </div>
    </div>
  </div>

</div>

@endsection
