@extends('layouts.frontend')

@section('content')
<div class="container-fluid no-gutter login">
    <div class="row">

      <div class="col-md-8 col-md-offset-2 loginform">
        <h1>Search </h1>
        <div class="col-md-8 col-md-offset-2">
        <p>
          All Lagan College Alumni are invited to register for our Alumni site. In order to create an account, simply use the below form to search for yourself in our database using your surname at the time you attended Lagan College and your date of birth.
        </p>


        </div>
        <div class="col-md-7 col-md-offset-3">

          @if (session('redeemedCode'))

          <div class="alert alert-success" role="alert">
            Thank you <strong>{{ session('redeemedRetailer') }}</strong>, you have redeemed voucher code: <strong><i>{{ session('redeemedCode') }}</i></strong>
          </div>


          @else



      @endif

        {!! Form::open(['method'=>'GET','url'=>'search','role'=>'search'])  !!}

        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="surname" placeholder="Your surname" required>
            <input type="text" class="form-control" name="dob" placeholder="dd/mm/yyyy" required>
                <button type="submit" class="btn btn-default red">
                  Search <i class="fa fa-search" aria-hidden="true"></i> </button>
        </div>

        {!! Form::close() !!}

        <div class="clear">
          &nbsp;
        </div>

        <?php

        if ($surname != ""){
          echo '<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> ' . count($users) . ' record(s) for <strong>' . $surname . '</strong></div>';
        } elseif ($surname != "" && count($users) > 0){
          echo '<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> ' . count($users) . ' record(s) for <strong>' . $surname . '</strong></div>';
        } else {
          //echo '<span class="label label-info">Use an email address or voucher code to search';
        }

         ?>

        <!-- @if ($surname === '')
        <div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> No records, please search by email or voucher code</div>
        @endif -->

        @if (count($users) > 0)
        <table class="table table-bordered table-hover">
            <thead>
                <th>Forname</th>
                <th>Surname</th>
                <th>Date Of Birth</th>
                <!-- <th>Used</th> -->
                <th></th>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->dob }}</td>


                    @if ($user->active == 1)
                    <td>
                      <span onclick="return confirm('This user has already been registered')" class="glyphicon glyphicon-lock" title="This user has already been registered" aria-hidden="true"></span>
                    </td>
                    @else
                    <td>
                      <a onclick="return confirm('Confirm you are {{ $user->firstname }} {{ $user->surname }}, born on {{ $user->dob }}?')" href="{{ url('') }}/registration/{{ $user->lchId }}">is this you?</span></a>
                    </td>
                    @endif

                </tr>
                @endforeach
            </tbody>
        </table>
        @else

        <!-- <div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> No records <?php echo $surname ?>, please search by email or voucher code</div> -->

        @endif

      </div> <!-- /.col-md-7 col-md-offset-3 -->

      </div> <!-- /.col-md-8 col-md-offset-2 loginform -->

    </div><!-- /.row -->

</div> <!-- /.container-fluid no-gutter login -->
@endsection
