<?php

namespace App\Http\Controllers;

use App\Vouchers;
use Illuminate\Http\Request;
use App\Http\Requests;

class VoucherController extends Controller
{
    public function index()
    {
      $vouchers = Vouchers::all();

      return view ('vouchers', compact('vouchers'));
    }

    public function show($id)
    {
      $vouchers = Vouchers::findOrFail($id);

      return view ('show', compact('vouchers'));
    }

    public function create()
    {
      return view ('voucher');
    }

}
