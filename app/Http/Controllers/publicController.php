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

class publicController extends Controller
{


  public function index()
  {
    //$vouchers = Redeemed::all();

    $vouchers = Redeemed::where('accountID','=', Auth::user()->accountID)
      ->orderBy('created_at')
      ->paginate();

    return view ('private.vouchers', compact('retailer', 'vouchers'));
  }


  public function show($registerid)
  {
    // display result using {id}
    // $vouchers = Vouchers::query()->findOrFail($voucherCode);
    //
    // return view ('private.show', compact('vouchers'));

    // display result using {voucherCode}
    $register = User::where('lchId', '=', $registerid)->firstOrFail();
    // return $show;
    return view ('private.register', compact('register'));

  }

  public function update(Request $request)
{
  // $user = Auth::user()->$request::input('lchId');

  $user = User::where('lchId', '=', $request::input('lchId'))->firstOrFail();

  $user->firstname = $request::input('firstname');
  $user->surname = $request::input('surname');
  $user->email = $request::input('email');
  $user->facebook = $request::input('facebook');
  $user->twitter = $request::input('twitter');
  $user->linkedin = $request::input('linkedin');
  $user->newsletter = $request::input('newsletter');
  $user->active = $request::input('active');;

  if ( ! $request::input('password') == '')
  {
      $user->password = bcrypt($request::input('password'));
  }

  $user->save();

  //Flash::message('Your account has been updated!');
  return Redirect::to('/');
  // ->with('message', 'Your account has been updated!');
}

    public function search(Request $search)
    {

        $surname = \Request::get('surname'); //<-- we use global request to get the param of URI
        $dob = \Request::get('dob');
        //$search = Request::input('search');

        $users = User::where('surname','=',$surname)
          ->where('dob','=',$dob)
          // ->orderBy('created_at')
          ->paginate(20);

        return view('private.search', compact('surname', 'dob', 'users'));

    }

    public function voucherShow(VoucherRequest $request)
    {
        //return view('public.show');

        return \Redirect::route('show')
        ->with('message', 'Thanks for contacting us!');
    }

    public function postRegistration(Request $registrationForm)
    {

        $this->validate($registrationForm, [
        'firstname' => 'required',
        ]);

        //$voucherForm = Request::all();

        user::create($registrationForm->toArray());

        //Get all the data and store it inside Store Variable
        $registrationForm = Input::all();

        //disable Mailer during testing

        Mail::send( 'emails.voucher', compact('voucherForm'), function( $message ) use ($registrationForm)
        {
            $message->from('noreply.tti@horseware.com', $name = 'Horseware');
            $message->to( $registrationForm['email'] )->subject( 'Your Horseware Turnout Trade-In Voucher Code;' );
        });

        return redirect('registration')
        ->with('name', $registrationForm['firstname'])
        ->with('code', $registrationForm['email']);

    }

    public function getVoucher(Request $voucherForm)
    {
        return view('public.voucher');
    }

    public function doubledownRegistration()
    {
        return view('public.doubledown');
    }

}
