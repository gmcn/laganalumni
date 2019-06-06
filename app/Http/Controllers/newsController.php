<?php

namespace App\Http\Controllers;
use App\Events;
use App\News;
use App\Yearbooks;
use App\User;
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

class newsController extends Controller
{

    public function articles()
    {
        //$users = User::where('surname','!=', 'HorsewareHQ')
        //  ->paginate();

        // $users =  User::all()
        // ->paginate();
        $news = News::where('active','=','1')->orderBy('id', 'desc')->get();

        return view('public.news', compact('news'));
    }

}
