<?php

namespace App\Http\Controllers;

use App\Models\AddressOfUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registeruser()
    {
        return view('User/Auth/Register');
    }
    public function registerSeller()
    {
        return view('addseller');
    }
    public function post_alamat(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'adders' => 'required',
            ]
        );




        $adderss = new AddressOfUsers([
            'name' => $request->name,
            'adders' => $request->adders,
            'id_users' => auth()->user()->id,
        ]);

        $adderss->save();

        $adders = AddressOfUsers::where('id_users', auth()->user()->id)->get();
        return view('Profile/index', compact(['adders']));
    }
    public function user_register_action(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]
        );

        $hashedPassword = Hash::make($request->password);

        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'role' => "user",
            'password' => $hashedPassword
        ]);
        $user->save();

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == "admin") {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
            }
        }


        return redirect()->back()->with('alert', 'Updated!');
    }
    public function login()
    {
        return view('User/Auth/Login');
    }
    public function login_action(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == "admin") {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
            }
        }


        return redirect()->back()->with('alert', 'Updated!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('login');
    }

    public function home()
    {
        return view('Welcome/welcome');
    }

    public function index()
    {
        $adders = AddressOfUsers::where('id_users', auth()->user()->id)->get();
        return view('Profile/index', compact(['adders']));
    }
}
