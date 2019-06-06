<?php

namespace App\Http\Controllers;
use App\Pages;
use App\Events;
use App\User;
use App\Yearbooks;
use App\News;
use App\Http\Requests;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Validator;
use Mail;
use Auth;
use Excel;
//use Request;

class adminController extends Controller
{

    public function __construct()
  {
      $this->middleware('auth');
  }

  //Users

  public function alumniExport()
  {

    $users = User::select('id', 'admissionDate', 'admissionNumber', 'firstname', 'surname', 'dob', 'email', 'lchId', 'upn', 'address', 'phone', 'twitter', 'facebook', 'linkedin', 'gender', 'religion', 'disability', 'reasonforLeaving', 'dateofLeaving', 'destination', 'previousSchool', 'otherInfo', 'deceased', 'newsletter', 'created_at', 'updated_at')->get();
    Excel::create('alumni', function($excel) use($users) {
        $excel->sheet('Sheet 1', function($sheet) use($users) {
            $sheet->fromArray($users);
        });
    })->export('csv');

  }

  public function newsletterExport()
  {

    $users = User::select('id', 'firstname', 'surname', 'email', 'newsletter', 'created_at', 'updated_at')->where('newsletter', '=', '1')->get();
    Excel::create('newsletter', function($excel) use($users) {
        $excel->sheet('Sheet 1', function($sheet) use($users) {
            $sheet->fromArray($users);
        });
    })->export('csv');

  }

  public function userslist(Request $search)
  {
    $search = \Request::get('search');

    if ($search == "") {
      $users = User::where('active','!=',"NULL")->paginate(50);
    } else {
      $users = User::where('surname','LIKE',"%$search%")->orWhere('firstname','LIKE',"%$search%")->orWhere('lchId','LIKE',"%$search%")
      ->paginate(1000);
    }

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.users', compact('users'));
    }

  }

  public function showUser ($request)
  {

    //$id = intval($_GET['id']);
    $user = User::where('id','=',$request)->firstOrFail();

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.user-view', compact('user'));
    }
  }

  public function index()
  {
    $totalusers = User::all()->count();
    $totalregistered = User::where('active','=',1)->count();
    $totalnewsletter = User::where('newsletter','=',1)->count();

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.dashboard', compact('totalusers', 'totalregistered', 'totalnewsletter'));
    }

  }

  //Pages

  public function pageslist()
  {
    $pages = Pages::all();

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.pages', compact('pages'));
    }

  }

  public function showPages ($request)
  {

    //$id = intval($_GET['id']);
    $pageitem = Pages::where('id','=',$request)->firstOrFail();

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.editpage', compact('pageitem', 'id'));
    }
  }

  public function editPages($id, Request $request)
  {

    $editPage = Pages::findOrFail($id);
    $input = $request->all();
    $editPage->fill($input)->save();

    return Redirect::to('/admin/pages-list')
    ->with('message', 'Page successfully edited');

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.editpage', compact('news'));
    }

  }

  //News

  public function newslist()
  {
    $news = News::orderBy('id', 'desc')->paginate(20);

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.news', compact('news'));
    }

  }

  public function addNews()
  {

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.addnews');
    }

  }

  public function createNews(Request $request)
  {

    // $news->title = $request::input('title');

    News::create($request->toArray());

    return Redirect::to('/admin/news-list')
    ->with('message', 'News item successfully added');

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.news', compact('news'));
    }

  }

  public function showNews($request)
  {

    //$id = intval($_GET['id']);
    $newsitem = News::where('id','=',$request)->firstOrFail();

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.editnews', compact('newsitem', 'id'));
    }
  }

  public function editNews($id, Request $request)
  {

    $editNews = News::findOrFail($id);
    $input = $request->all();
    $editNews->fill($input)->save();

    return Redirect::to('/admin/news-list')
    ->with('message', 'News item updated');

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.news', compact('news'));
    }

  }

  //Yearbooks

  public function listYearbooks()
  {
    $yearbooks = Yearbooks::orderBy('id', 'desc')->paginate(20);

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.yearbooks', compact('yearbooks'));
    }

  }

  public function addYearbooks()
  {

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.addyearbook');
    }

  }


  public function createYearbook(Request $request)
  {

    // $news->title = $request::input('title');

    $destinationPath = 'assets/media/'; // upload path
    $file = Input::file('link');
    $fileName = $file->getClientOriginalName();

    $yearbooks = new Yearbooks;

    $yearbooks->year = $request->year;
    $yearbooks->link = $fileName;

    $yearbooks->save();

    //Yearbooks::create($request->toArray());

    if (Input::hasFile('link'))
    {
      $request->file('link')->move($destinationPath, $file->getClientOriginalName());
    }

    return Redirect::to('/admin/yearbooks-list')
    ->with('message', 'Yearbook successfully created');



    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.addyearbooks', compact('news', 'destinationPath'));
    }

  }

  public function showYearbooks ($request)
  {

    //$id = intval($_GET['id']);
    $yearbooks = Yearbooks::where('id','=',$request)->firstOrFail();


    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.edityearbook', compact('yearbooks', 'id'));
    }
  }

  public function editYearbook(Request $request)
  {

    // $news->title = $request::input('title');

    Yearbooks::create($request->toArray());

    return Redirect::to('/news-list')
    ->with('message', 'Yearbook updated');



    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.yearbooks', compact('news'));
    }

  }

  //events

  public function addEvent()
  {

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.addevent');
    }

  }

  public function createEvent(Request $request)
  {

    // $news->title = $request::input('title');

    Events::create($request->toArray());

    return Redirect::to('/admin/events-list')
    ->with('message', 'New event successfully added');

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.events', compact('events'));
    }

  }

  public function eventslist()
  {
    $events = Events::all();

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.events', compact('events'));
    }

  }

  public function showEvents($request)
  {

    //$id = intval($_GET['id']);
    $eventitem = Events::where('id','=',$request)->firstOrFail();

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.editevent', compact('eventitem', 'id'));
    }
  }

  public function editEvent($id, Request $request)
  {

    $editEvent = Events::findOrFail($id);
    $input = $request->all();
    $editEvent->fill($input)->save();

    return Redirect::to('/admin/events-list')
    ->with('message', 'Event successfully edited');

    if (Auth::user()->role != '1') {
      return Redirect::to('/');
    } else {
      return view('admin.editevent', compact('news'));
    }

  }

}
