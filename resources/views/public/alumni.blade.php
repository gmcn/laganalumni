@extends('layouts.frontend')

@section('content')

<div class="container-fluid pagehead no-gutter">
<h1>Class of {{ $year }}</h1>
<p>
  {{ $count }} Alumni from the class of {{ $year }} have registered
</p>
</div>

<div class="container-fluid">

  <div class="row no-gutter">

    <div class="col-md-8 no-gutter">
      <ul class="alumni">

        @if ($count == 0)
        <li class="noalumni">
          <h3>Sorry</h3>
          <p>
            No alumni from class of {{ $year }} have registered.
          </p>
        </li>

        @endif
        @foreach ($classof as $students)



        <li class="student">

          @if (!$students->admissionNumber && $students->gender == "M")

            <img src="assets/uploads/a_male_placeholder.jpg" />

          @elseif (!$students->admissionNumber && $students->gender == "F")

            <img src="assets/uploads/a_female_placeholder.jpg" />

          @else

            <img src="assets/uploads/{{$students->admissionNumber}}.jpg" />

          @endif

          <!-- <img src="assets/uploads/a_male_placeholder.jpg" /> -->


          <div class="hover">
            <h1>{{ $students->firstname }} {{ $students->surname }}</h1>
            @if (!$students->twitter)
            @else
            <a href="https://www.twitter.com/{{ $students->twitter }}" target="_blank">
              <img src="{!! URL::asset('assets/img/twitter_icon.svg') !!}" target="_blank" />
            </a>
            @endif

            @if (!$students->facebook)
            @else
            <a href="{{ $students->facebook }}" target="_blank">
              <img src="{!! URL::asset('assets/img/facebook_icon.svg') !!}" />
            </a>
            @endif

            @if (!$students->linkedin)
            @else
            <a href="{{ $students->linkedin }}" target="_blank">
              <img src="{!! URL::asset('assets/img/linkedin_icon.svg') !!}" />
            </a>
            @endif
          </div>
        </li>

        @endforeach

        <div class="clearfix"></div>
      </ul>
    </div>

    <div class="col-md-4 red-col">
      <h2>Past Students</h2>
      <p>
        Lagan College yesterday welcomed Ms Carla Stover from the American Ireland Fund. Ms Stover is a great supporter and benefactor of Camp Camilla and integrated education and was keen to visit Lagan College as we start our 35th Anniversary! She is pictured centre along with Mrs McNamee, some of the students who attend Camp Camilla
      </p>
      <ul>
        @foreach ($yearbooks as $yearbook)
        <li>
          <a href="{{ url('/') }}/alumni?yearofLeaving={{$yearbook->year}}">{{ $yearbook->year }}</a>
        </li>
        @endforeach
      </ul>
    </div>

  </div>
</div>

@endsection
