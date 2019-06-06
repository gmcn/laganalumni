<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link type="text/plain" rel="author" href="humans.txt" />

    <title>Lagan College Alumni | Admin Area</title>
    <meta name='robots' content='noindex,nofollow'  />

    <!-- Styles -->
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.css') !!} " />
    <link rel="stylesheet" href="{!! URL::asset('assets/css/admin.css') !!} " />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
     <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
</head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('') }}"><img src="{!! URL::asset('assets/img/logo-footer.png') !!}" width="180px" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Hi {{ Auth::user()->firstname }} <!--({{ Auth::user()->id }})--> <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid dashboard">
          <div class="row">
            <div class="col-md-2 sidebar">
              <ul class="nav nav-sidebar">
                <li class="active"><a href="{{ url('/admin') }}">Overview <span class="sr-only">(current)</span></a></li>
                <li><a href="{{ url('/admin/users-list') }}">Users</a></li>
                <li><a href="{{ url('/admin/news-list') }}">News</a></li>
                <li><a href="{{ url('/admin/pages-list') }}">Pages</a></li>
                <li><a href="{{ url('/admin/yearbooks-list') }}">Yearbooks</a></li>
                <li><a href="{{ url('/admin/events-list') }}">Events</a></li>
              </ul>
            </div>
            <div class="col-md-10 main">



    @yield('content')


  </div>
</div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script language="JavaScript" type="text/javascript">
    function jumpMenu(targ,selObj,restore){
      eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
    }
    $(function() {
    $("#title").change(function() {
        var str=this.value;
        str=str.replace(/\s+/g, '-').toLowerCase();
        $('#slug').val(str);
      });
    });
    </script>

</body>
</html>
