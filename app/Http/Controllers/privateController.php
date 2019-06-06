<?php

namespace App\Http\Controllers;
use App\Vouchers;
use App\Redeemed;
use App\Http\Requests;
use Validator;
use Illuminate\Http\Request;
use Auth;

class privateController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function postRedeemed(Request $redeemForm)
    {

      //$redeemForm = Request::all();

        $this->validate($redeemForm, [
        'turnout' => 'required',
        'turnout_colour' => 'required',
        'turnout_weight' => 'required',
        'proof_OfPurchase' => 'required'
        ]);

        Redeemed::create($redeemForm->toArray());

        Vouchers::where('voucherCode', $redeemForm['voucherCode'])
        ->update(['used' => '1']);

        return redirect('search')
        ->with('redeemedRetailer', $redeemForm['retailerName'])
        ->with('redeemedCode', $redeemForm['voucherCode']);



    }

    public function success()
    {
      return view('private.success');
    }

}
