<?php

//echo rand() . "\n" . '<br />';
//echo rand() . "\n" . '<br />';
//$randrange = rand(10,2000);
//echo $randrange;


//Random characters output to create unique voucher code
$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMOPQRSTUVWXYZ0123456789';
$uniqueVoucher = 'TTI_' . substr(str_shuffle($characters), 0, 7);

?>

@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row">
        <h1>Register for a Voucher</h1>

        <div class="col-md-8 col-md-offset-2">



        @if (session('code'))
        <div role="alert">
        <h1 class="success">
          Thank you {{ session('name') }}
        </h1>

        <p style="text-align: center">
          Here's your Horseware Turnout Trade In Voucher Code;
        </p>

        <p style="text-align: center; text-transform: none !important" class="success">
            {{ session('code') }}
        </p>

        <p style="text-align: center">
          You will recieve a reminder of your code by email, but you can also <button class="btn btn-default" onclick="window.print()"> <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print this page</button>
        </p>

        <p>
          The turnout trade in runs; UK from 15th September to 15th October 2016 & USA from October 03 – November 23rd, 2016.
        </p>


        <div style="text-align: center; margin: 0 auto; margin-top: 20px; padding 0;">
        <p class="social"><h3>Connect with us</h3>
        <a href="http://www.facebook.com/horseware" target="_blank"><img title="Horseware on Facebook" alt="Horseware on Facebook" src="https://www.horseware.com/wp-content/themes/startertheme/images/facebook.png"></a>
        <a href="http://www.twitter.com/horseware" target="_blank"><img title="Horseware on Twitter" alt="Horseware on Twitter" src="https://www.horseware.com/wp-content/themes/startertheme/images/twitter.png"></a>
        <a href="http://www.youtube.com/horsewareireland" target="_blank"><img title="Horseware on Youtube" alt="Horseware on Youtube" src="https://www.horseware.com/wp-content/themes/startertheme/images/youtube.png"></a>
        <a href="http://www.instagram.com/horseware" target="_blank"><img title="Horseware on Instagram" alt="Horseware on Instagram" src="https://www.horseware.com/wp-content/themes/startertheme/images/instagram.png"></a>
        <a href="https://www.pinterest.com/horseware" target="_blank"><img title="Horseware on pinterest" alt="Horseware on pinterest" src="https://www.horseware.com/wp-content/themes/startertheme/images/pinterest.png"></a>
        <a href="https://www.horseware.com/" class="btn btn-default" role="button">continue to horseware.com</a></p>
        </div></div>

        @else

        {!! Form::open(['url' => 'voucher']) !!}

        <div class="form-group">

          <div class="col-md-6">
          <!-- {!! Form::label('customeremail', 'Email:') !!} -->
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'required']) !!}

          @if ($errors->has('name'))
              <span class="help-block">
                  {{ $errors->first('name') }}
              </span>
          @endif
          </div>

          <div class="col-md-6">
          <!-- {!! Form::label('customeremail', 'Email:') !!} -->
          {!! Form::text('customeremail', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required']) !!}

          @if ($errors->has('customeremail'))
              <span class="help-block">
                  <!-- {{ $errors->first('customeremail') }} -->
                  <span class="label label-danger">This email has already been given a voucher</span>
              </span>
          @endif
        </div>

        </div>

        <div class="form-group">

          <div class="col-md-6">
              <!-- <input type="text" class="form-control" name="retailerCountry" placeholder="Shop Country" value="{{ old('retailerCountry') }}" required> -->

              <select class="form-control" name="country" required>
                <option value="" selected="selected">Select Country</option>
                <option value="Canada">Canada</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                </select>



              @if ($errors->has('country'))
                  <span class="help-block">
                      <strong>{{ $errors->first('country') }}</strong>
                  </span>
              @endif
          </div>

          <div class="col-md-6">
          <!-- {!! Form::label('customeremail', 'Email:') !!} -->
          {!! Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone', 'required']) !!}

          @if ($errors->has('phone'))
              <span class="help-block">
                  <span class="label label-danger">{{ $errors->first('phone') }}</span>
              </span>
          @endif
          </div>



        </div>

        <div class="form-group">

          <div class="col-md-6">
          <!-- {!! Form::label('customeremail', 'Email:') !!} -->
          {!! Form::text('referral', null, ['class' => 'form-control', 'placeholder' => 'Referral', 'required']) !!}

          @if ($errors->has('referral'))
              <span class="help-block">
                  <span class="label label-danger">{{ $errors->first('referral') }}</span>
              </span>
          @endif
          </div>

          <div class="col-md-6">
          <!-- {!! Form::label('customeremail', 'Email:') !!} -->

          <select class="form-control" name="discipline" required>
            <option value="" selected="selected">Select your Preferred Discipline</option>
            <option value="Dressage">Dressage<br />
            <option value="Eventing">Eventing<br />
            <option value="Endurance">Endurance<br />
            <option value="Leisure">Leisure<br />
            <option value="Polo">Polo<br />
            <option value="Racing">Racing<br />
            <option value="Show Jumping">Show Jumping<br />
            <option value="Western">Western<br />
          </select>



          @if ($errors->has('discipline'))
              <span class="help-block">
                  <span class="label label-danger">{{ $errors->first('discipline') }}</span>
              </span>
          @endif
          </div>

        </div>

        <div class="form-group">

          <h2>A little more info</h2>

          <div class="col-md-6">
          <!-- {!! Form::label('customeremail', 'Email:') !!} -->
          {!! Form::text('noHorses', null, ['class' => 'form-control', 'placeholder' => '# of Horses', 'required']) !!}

          @if ($errors->has('noHorses'))
              <span class="help-block">
                  <span class="label label-danger">{{ $errors->first('#horses') }}</span>
              </span>
          @endif
          </div>

          <div class="col-md-6">

            <select class="form-control" name="blanketSize" required>
              <option value="">Blanket Size (being traded in)</option>
              <option value="3ft9in">3’9"/114cm/45"</option>
              <option value="4ft">4’0"/122cm/48"</option>
              <option value="4ft3in">4’3"/130cm/51"</option>
              <option value="4ft6in">4’6"/137cm/54"</option>
              <option value="4ft9in">4’9"/145cm/57"</option>
              <option value="5ft">5’0"/152cm/60"</option>
              <option value="5ft3in">5’3"/160cm/63"</option>
              <option value="5ft6in">5’6"/168cm/66"</option>
              <option value="5ft9in">5’9"/175cm/69"</option>
              <option value="6ft">6’0"/183cm/72"</option>
              <option value="6ft3in">6’3"/191cm/75"</option>
              <option value="6ft6in">6’6"/198cm/78"</option>
              <option value="6ft9in">6’9"/206cm/81"</option>
              <option value="7ft">7’0"/213cm/84"</option>
              <option value="7ft3in">7’3"/221cm/87"</option>
              <option value="7ft6in">7’6"/229cm/90"</option>
            </select>
          </div>

        </div>

        <div class="form-group">
          <div class="col-md-6">
          <!-- {!! Form::label('customeremail', 'Email:') !!} -->
          {!! Form::text('horsesName', null, ['class' => 'form-control', 'placeholder' => 'Your Horses Name?', 'required']) !!}

          @if ($errors->has('blanketSize'))
              <span class="help-block">
                  <span class="label label-danger">{{ $errors->first('horsesName') }}</span>
              </span>
          @endif
          </div>
          <div class="col-md-6">
            <select class="form-control" name="horsesKept" required>
              <option value="" selected="selected">Where do you keep your horse(s)</option>
              <option value="Livery">Livery</option>
              <option value="Own Yard">Own Yard</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
          <!-- {!! Form::label('customeremail', 'Email:') !!} -->
          <select class="form-control" name="ownDog" required>
            <option value="" selected="selected">Do you own a dog?</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
          </div>
          <div class="col-md-6">

          {!! Form::text('turnoutsOwned', null, ['class' => 'form-control', 'placeholder' => 'How many turnouts do you own?', 'required']) !!}

          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
          <select class="form-control" name="hwOwned" required>
            <option value="" selected="selected">Have you owned Horseware Turnout before?</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
          </div>
        </div>



        <div class="col-md-6">

          <input type="text" style="display: none;" class="form-control" name="voucherCode" value="<?php echo $uniqueVoucher ?>">

        </div>


        <div class="form-group">
        </div>

        <div class="form-group">
            <div class="col-md-7 col-md-offset-3">
          <!-- Submit -->
          {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
        </div>





        {!! Form::close() !!}
        @endif

    </div>
  </div>
</div>
@stop
