@extends('layouts.app')

@section('content')

<h1 class="page-header">Edit Yearbook</h1>

<div class="col-md-8">

<form class="form-horizontal" role="form" method="POST" action="{{ url('/edit-yearbooks') }}">
{!! csrf_field() !!}
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $yearbooks->year }}" required>

    @if ($errors->has('title'))
    <span class="help-block">
      <strong>{{ $errors->first('title') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="link" placeholder="Link" value="{{ $yearbooks->link }}">

    @if ($errors->has('slug'))
    <span class="help-block">
      <strong>{{ $errors->first('slug') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group custom-search-form">
    <button type="submit" class="btn btn-default red">Submit </button>
  </div>

</form>

</div>


</div>
</div>

@endsection
