<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use Illuminate\Support\Facades\Input;

class ClientController extends Controller
{
  /** 
   * Display Clients 
   * Outside of scope - In this case just want to show a form to create a new Client
   * 
   * @return \Illuminate\Http\Response
   */
  public function index() {

    return view("client.create");
  }
  
  /**
   * Show the form for creating a new Client.
   *
   * @return view the view which displays the input form
   */
  public function create() 
  {
    return view('client.create');
  }

  /** 
    * Store a newly create Client for storage
    * 
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request) 
    {
      // Validate the data
      $validatedData = $request->validate([
        'firstName' => 'required',
        'lastName'  => 'required',
        'email'     => 'required|email',
        'mobile'    => 'required|digits:11',
        'gender'    => 'required',
        'dob'       => 'required',
        ]);

      // Client::create(request['firstname','lastName']);
      Client::create(array(
        'firstName' => Input::get("firstName"),
        'lastName'  => Input::get("lastName"),
        'email'     => Input::get("email"),
        'mobile'    => Input::get("mobile"),
        'gender'    => Input::get("gender"),
        'dob'       => Input::get("dob"),
        'comments'  => Input::get("comments")
      ));

      // for simplicity - just going to redirect to the same form page after creating a new Client
      return redirect('client/create');
    }

    /**
     * Display the specified client
     * Outside of scope - In this case just want to show a form to create a new Client
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('client.create');
    }
    /**
     * Show the form for editing the specified resource.
     * Outside of scope - In this case just want to show a form to create a new Client
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('client.create');
    }

    /**
     * Update the specified resource in storage.
     * Outside of scope - In this case just want to show a form to create a new Client
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      return view('client.create');
    }

    /**
     * Remove the specified resource from storage.
     * Outside of scope - In this case just want to show a form to create a new Client
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      return view('client.create');
    }
}
