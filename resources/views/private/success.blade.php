@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
      <h1><img src="{!! URL::asset('assets/img/tti-logo.png') !!}" /></h1>
        <div class="col-md-10 col-md-offset-1">

                <div class="panel-body">
                  <center>
                  <h1 class="success">Welcome {{ Auth::user()->retailerName }},</h1>
                  <p class="success">
                    You are registered!
                  </p>
                  <p class="check">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                  </p>



                  </center>
                </div>

        </div>
    </div>
</div>
@endsection
