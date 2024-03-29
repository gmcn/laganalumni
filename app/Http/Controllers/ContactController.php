<?php

namespace App\Http\Controllers;
use App\Vouchers;
use App\Http\Requests;
use Redirect;
use App\Http\Controllers\Input;
use Illuminate\Support\Facades\Input;
use Request;
use Carbon\Carbon;
use Mail;

class ContactController extends Controller
{

  public function getContactUsForm(){

      //Get all the data and store it inside Store Variable
      $data = Input::all();

      //Validation rules
      $rules = array (
          //'first_name' => 'required', uncomment if you want to grab this field
          'email' => 'required|email',
          //'message' => 'required|min:5'
      );

      //Validate data
      $validator = Validator::make ($data, $rules);

      //If everything is correct than run passes.
      if ($validator -> passes()){

         Mail::send('emails.feedback', $data, function($message) use ($data)
          {
              //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields
              $message->from('feedback@gmail.com', 'feedback contact form');
  //email 'To' field: cahnge this to emails that you want to be notified.
  $message->to('feedback@gmail.com', 'John')->cc('feedback@gmail.com')->subject('feedback form submit');

          });
          // Redirect to page
 return Redirect::route('home')
  ->with('message', 'Your message has been sent. Thank You!');


          //return View::make('contact');
       }else{
 //return contact form with errors
          return Redirect::route('home')
           ->with('error', 'Feedback must contain more than 5 characters. Try Again.');

       }
   }

}
