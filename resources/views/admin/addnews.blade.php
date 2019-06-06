@extends('layouts.app')

@section('content')

<h1 class="page-header">Add News Item</h1>
<h4><a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> go back</a></h4>

<div class="col-md-8">

<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/add-news') }}">
{!! csrf_field() !!}
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="" required>

    @if ($errors->has('title'))
    <span class="help-block">
      <strong>{{ $errors->first('title') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="">

    @if ($errors->has('slug'))
    <span class="help-block">
      <strong>{{ $errors->first('slug') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group">
    <textarea class="form-control" name="content" placeholder="Content" value="" required></textarea>
    @if ($errors->has('content'))
    <span class="help-block">
      <strong>{{ $errors->first('content') }}</strong>
    </span>
    @endif
  </div>

  <div class="checkbox">
    <label><input type="checkbox" name="active" value="1">Publish Article</label>
  </div>

  <div class="form-group custom-search-form">
    <button type="submit" class="btn btn-default red">Submit </button>
  </div>

</form>

</div>


</div>
</div>

@endsection
