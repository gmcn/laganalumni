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

class homeController extends Controller
{

    public function alumni()
    {
        //$users = User::where('surname','!=', 'HorsewareHQ')
        //  ->paginate();

        // $users =  User::all()
        // ->paginate();
        $users =  User::where('active','=','1')->take(12)->get();
        $years =  User::where('active','=','1')->where('dateofLeaving','LIKE','%1988')->get();
        $yearbooks = Yearbooks::all();
        $news = News::where('active','=','1')->orderBy('id', 'desc')->take(2)->get();
        $events = Events::where('active','=','1')->take(2)->get();

        return view('public.welcome', compact('users', 'years', 'yearbooks', 'news', 'events'));
    }

    public function years()
    {
        //$users = User::where('surname','!=', 'HorsewareHQ')
        //  ->paginate();

        // $users =  User::all()
        // ->paginate();
        $users =  User::where('active','=','1')->where('yearofLeaving','=','%1969')->take(12)->get();

        return view('public.welcome', compact('users'));
    }

}
