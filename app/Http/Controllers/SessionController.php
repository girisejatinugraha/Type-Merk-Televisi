<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use symfony\Contracts\Service\Attribute\Required;

class SessionController extends Controller
{
    //
    function index()
    {
        return view("sesi/index");
    }
    function login(Request $request)
    {

        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($infologin)) {
            return redirect('dashboard')->with('success', 'Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('Success','Berhasil Logout');
    }
    public function register()
    {
        return view('sesi/register');
    }
    public function create(Request $request)
    {
        Session::flash('name', $request->input('name'));
        Session::flash('email', $request->input('email'));
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ], [
            'name.required' => 'name wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Masukan Email anda dengan benar',
            'email.unique' => 'Email Anda Sudah Digunakan Pilih Email Baru',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum Password 5 Karakter',
        ]);
        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password' => Hash::make($request->password),
        ];
        User::create($data);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($infologin)) {
            return redirect('dashboard')->with('success', Auth::user()->name. 'Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }
    }
}
