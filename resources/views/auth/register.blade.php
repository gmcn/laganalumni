@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <h3>Register</h3>


                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <!-- <label class="col-md-3 control-label">Name</label> -->

                            <div class="col-md-5 col-md-offset-1">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-5">
                                <input type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required>

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

                            <div class="col-md-5 col-md-offset-1">
                                <input type="password" class="form-control" placeholder="Password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-5">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!--/ .form-group-->
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <!-- <label class="col-md-3 control-label">Confirm Password</label> -->

                            <!--/ .form-group-->
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-3">

                                <button type="submit" class="btn btn-primary btn-md btn-block">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--/ .panel-body-->
                </div>

        </div>
    </div>
</div>
@endsection
