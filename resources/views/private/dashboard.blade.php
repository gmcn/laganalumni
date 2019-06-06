@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's dashboard.

                    <?php
                    if(isset($results)){ ?>
                      @foreach($results as $result)
                      {{{ $result->name }}}
                      @endforeach
                      <?php } else {
                        echo "products not set";
                      }
                      ?>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
