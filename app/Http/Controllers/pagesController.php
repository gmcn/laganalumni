<?php

namespace App\Http\Controllers;
use App\Pages;
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

class pagesController extends Controller
{

  public function contact()
  {
      $page = Pages::where('id', '=', '1')->first();
      return view('public.contact', compact('page'));
  }

  public function about()
  {
      $page = Pages::where('id', '=', '2')->first();
      return view('public.about', compact('page'));
  }

  public function volunteer()
  {
      $page = Pages::where('id', '=', '3')->first();
      return view('public.volunteer', compact('page'));
  }

  public function donate()
  {
      $page = Pages::where('id', '=', '4')->first();
      return view('public.donate', compact('page'));
  }
  public function support()
  {
      $page = Pages::where('id', '=', '5')->first();
      return view('public.support', compact('page'));
  }

}
