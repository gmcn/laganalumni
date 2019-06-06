@extends('layouts.frontend')

@section('content')

<div class="container-fluid login no-gutter">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 loginform">
            <h1>Login</h1>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        <!-- {!! csrf_field() !!} -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label class="col-md-3 control-label">E-Mail Address</label> -->

                            <div class="col-md-7 col-md-offset-3">
                                <input type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!--<label class="col-md-3 control-label">Password</label>-->

                            <div class="col-md-7 col-md-offset-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-8 col-md-offset-3">
                            <input type="checkbox" name="remember"> Remember Me
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-7 col-md-offset-3">
                            <button type="submit" class="btn btn-default red">
                                Login <i class="fa fa-btn fa-sign-in"></i>
                            </button>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-8 col-md-offset-3">
                            <a class="btn-link" href="{{ url('/password/reset') }}">Forgotten Password?</a>
                          </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
