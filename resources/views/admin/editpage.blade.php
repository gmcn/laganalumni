@extends('layouts.app')

@section('content')


<h1 class="page-header">Edit Pages Item</h1>
<h4><a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> go back</a></h4>

<div class="col-md-8">

<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/edit-page/') }}/{{ $pageitem->id }}">
{!! csrf_field() !!}

<input type="text" style="display: none;" class="form-control" id="id" name="id" placeholder="id" value="{{ $pageitem->id }}">

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $pageitem->title }}" required>

    @if ($errors->has('title'))
    <span class="help-block">
      <strong>{{ $errors->first('title') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $pageitem->slug }}">

    @if ($errors->has('slug'))
    <span class="help-block">
      <strong>{{ $errors->first('slug') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group">
    <textarea rows="10" class="form-control" name="content" placeholder="Content" id="bodyField" value="" required>{{ $pageitem->content }}</textarea>
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
<!-- CKEditor + File Manager -->
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/public/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/public/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
CKEDITOR.replace('bodyField', options);
</script>

@endsection
