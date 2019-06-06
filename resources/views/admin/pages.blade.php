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

<h1 class="page-header">Pages</h1>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Slug</th>
        <th>edit</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($pages as $page)
        <tr>
          <td>{{ $page->title }}</td>
          <td>{{ $page->slug }}</td>
          <td><a href="{{ url('/admin/edit-page') }}/{{ $page->id }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
        </tr>
      @endforeach

    </tbody>
  </table>
</div><!-- /.table-responsive -->
</div>

@endsection
