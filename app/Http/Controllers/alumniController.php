<?php

namespace App\Http\Controllers;
use App\Vouchers;
use App\User;
use App\Yearbooks;
use App\Redeemed;
use App\Http\Requests;
use Redirect;
use Illuminate\Support\Facades\Input;
//use Illuminate\Http\Request;
use Carbon\Carbon;
use Validator;
use Mail;
use Auth;
use Request;

class alumniController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }

  public function classof()
  {
    $year = intval($_GET['yearofLeaving']);
    $classof = User::where('dateofLeaving','LIKE',"%$year%")->where('active','=',1)->get();
    $count = User::where('dateofLeaving','LIKE',"%$year%")->where('active','=',1)->count();
    //$count = User::where('yearofLeaving','=',$year)->where('active','=',1)->count();
    $yearbooks = Yearbooks::all();

      return view('public.alumni', compact('classof', 'yearbooks', 'year', 'count'));
  }

}
