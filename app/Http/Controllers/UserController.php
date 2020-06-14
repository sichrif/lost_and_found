<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    function calendar(){
        return view('user.calendar');
    }

    function contactList(){
        $users=Auth::user();
        //dd($users);
        return view('user.contact-list',compact('users',$users));

    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Auth::user();
        //dd($users);
        return view('user.index',compact('users',$users));
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules());
        //User::create($request->all());
        $user= new User;
       $users->id = Auth::id();
       $user->id = $request->id;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->usertype = $request->usertype;
        $user->email = $request->email;
        
 
        $user->save();

        return redirect()->route('user.index')->with('AddContact', 'New contact added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {    $users=Auth::user();
        return view('user.show')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {    $users=Auth::user();
        return view('user.edit', compact('users'));
        /*$user=Auth::user();
        return view('user.edit',compact('user'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
     
         
       $users->update( [
            'id' => $request->id,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'phone' => $request->phone,
            'usertype' => $request->usertype,
            'email' => $request->email,
    ]);
    
      return redirect()->route('user.index');
    /*$users->update($validate);    
  return redirect()->route('user.show');*/
 

       //$validatedData = $request->validate($this->validationRules());
    //    $validatedData = $request->validate($this->validationRules());


   //  $users->update($validatedData);
        dd($users);
      //return redirect()->route('/show')->with('updateUser', 'User updated successfully');
        //return redirect()->route('user.show', $users->id)->with('updateUser', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.contact-list')->with('deleteContact', 'Contact deleted successfully');
    } 
  /*  public function validationRules(){
        return [
            'id' => 'required',
           'name' => 'required',
           'lastname' => 'required',
           'address' => 'required',
           'phone' => 'required',
           'usertype' => 'required',
           'email' => 'required',
           
        ];}*/

}