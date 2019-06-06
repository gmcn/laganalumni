@extends('layouts.frontend')

@section('content')
<div class="container-fluid no-gutter login">
    <div class="row">

      <div class="col-md-8 col-md-offset-2 loginform">

        <h1>Register<!--Alumni: <span class="voucherCode">{{ $register->firstname }}</span>--></h1>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis justo ipsum, bibendum consequat tristique et, placerat vitae tortor. Suspendisse commodo neque dictum eros dapibus, vel suscipit elit bibendum. Donec vehicula, nibh eget ullamcorper sollicitudin, risus dolor tincidunt ex, ut luctus justo nisl non nibh.
        </p>

        <!-- <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> -->

        @if ($register->active == 1)

        <h4>
          This alumni student has already been registered
        </h4>

        <a href="../search"><button class="btn btn-primary form-control"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Search Again</button></a>

        @else

        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/registration') }}">
                {!! csrf_field() !!}

                <input type="text" style="display: none;" name="lchId" value="{{ $register->lchId }}"  />

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <!-- <label class="col-md-3 control-label">Name</label> -->

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="firstname" value="{{ $register->firstname }}" required>

                        @if ($errors->has('firstname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="surname" value="{{ $register->surname }}" required>

                        @if ($errors->has('surname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
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

                    <div class="col-md-6 col-md-offset-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="facebook" placeholder="Facebook profile URL" >

                        @if ($errors->has('facebook'))
                            <span class="help-block">
                                <strong>{{ $errors->first('facebook') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="twitter" placeholder="Twitter handle" >

                        @if ($errors->has('twitter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('twitter') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="linkedin" placeholder="Linkedin profile URL" >

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

                        <!-- <button type="submit" class="btn btn-primary btn-md btn-block">
                            <i class="fa fa-btn fa-user"></i>Register
                        </button> -->

                        <button type="submit" class="btn btn-default red">Register</button>

                    </div>
                </div>
            </form>
            <!--/ .panel-body-->
        </div>

        @endif

      </div><!-- /.col-md-8 col-md-offset-2 loginform -->

      </div><!-- /.row -->

    </div><!-- /.container-fluid no-gutter login -->
@stop
