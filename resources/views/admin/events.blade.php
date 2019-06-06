@extends('layouts.app')

@section('content')

@if (session('message'))
<div class="flash-message">
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {{ session('message') }}
  </div>
</div>
@endif

<h1 class="page-header">Events</h1>
<h2 class="sub-header"><a href="{{ url('/admin/add-events') }}">add new</a></h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Event Date</th>
        <th>edit</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($events as $event)
        <tr>
          <td>{{ $event->title }}</td>
          <td>{{ $event->startDate }}</td>
          <td><a href="{{ url('/admin/edit-event') }}/{{ $event->id }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
        </tr>
      @endforeach

    </tbody>
  </table>
</div><!-- /.table-responsive -->
</div>

@endsection
