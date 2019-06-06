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

<h1 class="page-header">Yearbooks</h1>
<h2 class="sub-header"><a href="{{ url('/admin/add-yearbook') }}">add new</a></h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Year</th>
          <th>File</th>
          <!-- <th>edit</th> -->
          <th>delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($yearbooks as $yearbook)
        <tr>
          <td>{{ $yearbook->year }} </td>
          <td>{{ $yearbook->link }}</td>
          <!-- <td><a href="{{ url('/admin/edit-yearbook') }}/{{ $yearbook->id }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td> -->
          <td><a href=""><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

  {!! $yearbooks->render() !!}

</div><!-- /.table-responsive -->
</div>

@endsection
