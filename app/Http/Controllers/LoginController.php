<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index()
    {
        if ($user = Auth::user()) {
            if($user->level == 1){
                return redirect()->intended('home');
            }
        }
        return view('login.login');
    }

    public function proses(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            "email_admin" => 'required|email',
            "password_admin" => 'required|min:6',
        ],[
            'email_admin.required' =>  'Email Tidak Boleh Kosong',
            'email_admin.email' => 'Alamat Email Tidak Valid',
            'password_admin.required' => 'Password Tidak Boleh Kosong',
            'password_admin.min' => 'Minimal Password 8 Karakter',
        ]);

        $credential = [
            'email_admin' => $request->email_admin,
            'password_admin' => $request->password_admin,
        ];
        try {        
            Auth::attempt($credential);
            if (Auth::user()) {
                return redirect()->route('pengelola.home.index');
            }
            else {
                // dd('gakenek');
                return redirect()->back()->with('danger', 'Username / Password Salah !');
            }
        } catch (\Throwable $th) {
            return dd($th);
            return redirect()->back()->with('danger', $th);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
