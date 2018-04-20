<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use Illuminate\Support\Facades\Input;

class ClientController extends Controller
{
    /** 
    * Display Clients
    * 
    * @return \Illuminate\Http\Response
    */
    public function index() {
      return view("client");
    }

    /** 
    * Store a newly create Client for storage
    * 
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request) {
      $user           = new Client;
      $user->fname    = Input::get("fname");
      $user->lname    = Input::get("lname");
      $user->email    = Input::get("email");
      $user->mobile   = Input::get("mobile");
      $user->gender   = Input::get("gender");
      $user->dob      = Input::get("dob");
      $user->comments = Input::get("comments");
      $user->save();

      return("Data has been saved to the database.");
    }
}
