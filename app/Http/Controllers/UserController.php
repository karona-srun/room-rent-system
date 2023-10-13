<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ViewErrorBag;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('name')->paginate(10);
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255', 'unique:users,phone'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user = new User();
        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= $request->phone.'_'.date('YmdHi').str_replace(' ', '_', $file->getClientOriginalName());
            $file-> move(public_path('assets/avatars/'), $filename);
            $user->photo = 'assets/avatars/'.$filename;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('users')->with('mode', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'string', 'max:255'],
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user = User::find($id);
        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= $request->phone.'_'.date('YmdHi').str_replace(' ', '_', $file->getClientOriginalName());
            $file-> move(public_path('assets/avatars/'), $filename);
            $user->photo = 'assets/avatars/'.$filename;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return redirect('users')->with('mode', 'update');
    }

    public function changePassword($id){
        $user = User::find($id);
        return view('user.change_password', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }    
        $user = User::find($request->id);
        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect('users')->with('mode', 'update');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
