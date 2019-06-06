@extends('layouts.app')

@section('content')

<h1 class="page-header">Add Yearbook</h1>
<h4><a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> go back</a></h4>

<div class="col-md-8">

<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/add-yearbook') }}" enctype="multipart/form-data">
{!! csrf_field() !!}
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <input type="text" class="form-control" name="year" placeholder="Year" value="" required>

    @if ($errors->has('title'))
    <span class="help-block">
      <strong>{{ $errors->first('title') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group">
    <input type="file" class="form-control" name="link" placeholder="Link" value="">

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
