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

class profileController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }

  public function showprofile()
  {

  $user = User::all();

  return view('private.profile', compact('user'));
  }

  public function updateProfile(Request $request)
  {
  // $user = Auth::user()->$request::input('lchId');

  $user = User::where('lchId', '=', $request::input('lchId'))->firstOrFail();

  $user->firstname = $request::input('firstname');
  $user->surname = $request::input('surname');
  $user->address = $request::input('address');
  $user->phone = $request::input('phone');
  $user->email = $request::input('email');
  $user->facebook = $request::input('facebook');
  $user->twitter = $request::input('twitter');
  $user->linkedin = $request::input('linkedin');
  $user->newsletter = $request::input('newsletter');
  $user->active = $request::input('active');

  if ( ! $request::input('password') == '')
  {
      $user->password = bcrypt($request::input('password'));
  }

  $user->save();

  //Flash::message('Your account has been updated!');
  return Redirect::to('/profile')
  ->with('updated', 'Your account has been updated!');
  }

}
