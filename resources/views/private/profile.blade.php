@extends('layouts.frontend')

@section('content')

<div class="container-fluid no-gutter login">
    <div class="row">

      <div class="col-md-8 col-md-offset-2 loginform">

        <h1>Update your details</h1>

        @if (session('updated'))
            <div class="flash-message">
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Your account has been updated!
              </div>
            </div>
        @endif

        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile') }}">
                {!! csrf_field() !!}

                <input type="text" style="display: none;" name="lchId" value="{{ Auth::user()->lchId }}"  />

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <!-- <label class="col-md-3 control-label">Name</label> -->

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name" value="{{ Auth::user()->firstname }}" required>

                        @if ($errors->has('firstname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="surname" placeholder="Surname" value="{{ Auth::user()->surname }}" required>

                        @if ($errors->has('surname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="address" placeholder="Address" value="{{ Auth::user()->address }}" required>

                        @if ($errors->has('surname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{ Auth::user()->phone }}" required>

                        @if ($errors->has('surname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{ Auth::user()->email }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!--/ .form-group-->
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <!-- <label class="col-md-3 control-label">Password</label> -->

                    <div class="col-md-6 col-md-offset-3">
                        <input type="password" class="form-control" placeholder="Update Password" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="facebook" placeholder="Facebook URL" value="{{ Auth::user()->facebook }}" >

                        @if ($errors->has('facebook'))
                            <span class="help-block">
                                <strong>{{ $errors->first('facebook') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="twitter" placeholder="Twitter Handle" value="{{ Auth::user()->twitter }}" >

                        @if ($errors->has('twitter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('twitter') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="linkedin" placeholder="Linkedin Profile URL" value="{{ Auth::user()->linkedin }}" >

                        @if ($errors->has('twitter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('twitter') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                      <div class="checkbox">
                      <label><input type="checkbox" name="active" value="1">I'm happy for publicaly accessible informatio to be displayed on this website </label>
                      </div>

                      <div class="checkbox">
                      <label><input type="checkbox" name="newsletter" value="1">I would like to subscribe to Lagan College Communication</label>
                      </div>

                    </div>

                    <!--/ .form-group-->
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <!-- <label class="col-md-3 control-label">Confirm Password</label> -->

                    <!--/ .form-group-->
                </div>



                <div class="form-group custom-search-form">
                    <div class="col-md-7 col-md-offset-3">

                        <button type="submit" class="btn btn-default red">Update </button>

                    </div>
                </div>
            </form>
            <!--/ .panel-body-->
        </div>

      </div><!-- /.col-md-8 col-md-offset-2 loginform -->

      </div><!-- /.row -->

    </div><!-- /.container-fluid no-gutter login -->
@stop
