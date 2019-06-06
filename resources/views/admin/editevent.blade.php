@extends('layouts.app')

@section('content')

<h1 class="page-header">Edit News Item</h1>
<h4><a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> go back</a></h4>

<div class="col-md-8">

<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/edit-event/') }}/{{ $eventitem->id }}">
{!! csrf_field() !!}

<input type="text" style="display: none;" class="form-control" id="id" name="id" placeholder="id" value="{{ $eventitem->id }}">

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $eventitem->title }}" required>

    @if ($errors->has('title'))
    <span class="help-block">
      <strong>{{ $errors->first('title') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="startDate" placeholder="Event Date" value="{{ $eventitem->startDate }}">

    @if ($errors->has('slug'))
    <span class="help-block">
      <strong>{{ $errors->first('startDate') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group">
    <textarea rows="10" class="form-control" name="content" placeholder="Content" value="" required>{{ $eventitem->content }}</textarea>
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
