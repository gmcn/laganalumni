<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link type="text/plain" rel="author" href="humans.txt" />

    <title>Lagan College Alumni</title>
    <meta name='robots' content='noindex,nofollow'  />

    <!-- Styles -->
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.css') !!} " />
    <link rel="stylesheet" href="{!! URL::asset('assets/css/style.css') !!} " />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

    <style>

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
</head>
<body id="app-layout">


  <nav class="navbar navbar-default navbar-static-top">
    <div class="">
      <div class="navbar-header col-md-4">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="{{ url('') }}">
          @if(Request::is('/'))
          <img src="{!! URL::asset('assets/img/lagan_college_logo.png') !!}" width="200px" />
          @else
          <img src="{!! URL::asset('assets/img/logo-footer.png') !!}" width="200px" />
          @endif

        </a>

      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main-nav">
          <li>
            <a href="{{ url('/about') }}">About</a>
          </li>
          <li>
            <a href="{{ url('/news') }}">News</a>
          </li>
          <li>
            <a href="{{ url('/support') }}">Support</a>
          </li>
          <li>
            <a href="{{ url('/reports') }}">Reports</a>
          </li>
          <li>
            <a href="{{ url('/contact') }}">Contact</a>
          </li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

          @if (Auth::guest())
            <li><a href="{{ url('/search') }}">Register</a></li>
            <li><a href="{{ url('/login') }}">Login</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Hi {{ Auth::user()->firstname }} <!--({{ Auth::user()->id }})--> <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                    @if ( Auth::user()->role == 1)
                    <li><a href="{{ url('/admin') }}"><i class="glyphicon glyphicon-edit"></i> Open admin</a></li>
                    @endif
                    <li><a href="{{ url('/profile') }}"><i class="glyphicon glyphicon-user"></i> Update Profile</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                  </ul>
              </li>
          @endif



        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>



    @yield('content')

    </div>

    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 social">
            <div class="col-md-10 col-md-offset-1">
            <h1>Lets Get Social</h1>
            <h2>@lagancollege</h2>

            <a class="twitter-timeline" href="https://twitter.com/lagancollege" data-chrome="noheader" data-border-color="#fff" data-theme="light" data-link-color="#b61800" data-height="500">Tweets by lagancollege</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

            <div class="row">
              <div class="col-md-6 tw">
              <div class="tw">
                <a href="https://www.twitter.com/lagancollege" target="_blank"><img src="{!! URL::asset('assets/img/twitter_icon.jpg') !!}" />follow us on twitter</a>
              </div>
            </div>
            <div class="col-md-6 fb">
              <div class="fb">
                <a href="https://www.facebook.com/lagancollege" target="_blank"><img src="{!! URL::asset('assets/img/facebook_icon.jpg') !!}" />follow us on Facebook</a>
              </div>
            </div>
            </div>

            <div class="row logos">
              <div class="col-md-3">
                <img src="{!! URL::asset('assets/img/int_school_award.jpg') !!}" />
              </div>
              <div class="col-md-3">
                <img src="{!! URL::asset('assets/img/naace.jpg') !!}" />
              </div>
              <div class="col-md-3">
                <img src="{!! URL::asset('assets/img/keep-ni-beautiful.jpg') !!}" />
              </div>
              <div class="col-md-3">
                <img src="{!! URL::asset('assets/img/investors-in-people.jpg') !!}" />
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-8 newsletter">


            <img src="{!! URL::asset('assets/img/logo-footer.png') !!}" alt="Lagan College Alumni" width="400px" />

            <div class="col-md-10 col-md-offset-2 contactdetails">
              T: 028 9040 1810     F: 028 9070 3269     E: <a href="mailto:info@lagancollege.com">info@lagancollege.com</a>
            </div>

            <div class="col-md-12 col-md-offset-2">
            <h1>Sign Up for our Newsletter</h1>
            <div class="col-md-10">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Email address">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Subscribe</button>
                </span>
              </div><!-- /input-group -->
            </div><!-- /.col-lg-12 -->
            <div class="col-md-12 footernav no-gutter">
              <!-- <div class="col-md-2 no-gutter"> -->
                <ul>
                  <li>
                    <a href="{{ url('/about') }}">About</a>
                  </li>
                  <li>
                    <a href="{{ url('/contact') }}">Contact</a>
                  </li>
                </ul>
              <!-- </div> -->
              <!-- <div class="col-md-2"> -->
                <ul>
                  <li>
                    <a href="{{ url('/donate') }}">Donate</a>
                  </li>
                  <li>
                    <a href="http://www.lagancollege.com" target="_blank">Lagan College</a>
                  </li>
                </ul>
              <!-- </div> -->
              <!-- <div class="col-md-2"> -->
                <ul>
                  <li>
                    <a href="{{ url('') }}/news/">News</a>
                  </li>
                  <li>
                    <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              <!-- </div> -->
              <!-- <div class="col-md-2"> -->
                <ul>
                  <li>
                    <a href="{{ url('/search') }}">Register</a>
                  </li>
                  <li>
                    <a href="#">Site Map</a>
                  </li>
                </ul>
              <!-- </div> -->
              <!-- <div class="col-md-4"> -->
                <ul>
                  <li>
                    <a href="#">Terms & Conditions</a>
                  </li>
                  <li>
                    <a href="{{ url('/volunteer') }}">Volunteer</a>
                  </li>
                </ul>
              <!-- </div> -->
            </div>
            <div class="col-md-12 websiteni no-gutter">
              Lagan College <img src="{!! URL::asset('assets/img/websiteni.jpg') !!}" /> Website by WebsiteNI
            </div>
          </div><!-- /.col-md-10 col-md-offset-2 -->
        </div><!-- /.col-md-8 newsletter -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </footer>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script language="JavaScript" type="text/javascript">
    function jumpMenu(targ,selObj,restore){
      eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
    }
    </script>

</body>
</html>
