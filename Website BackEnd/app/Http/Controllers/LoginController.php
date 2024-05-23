<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }else

        return back()->with('loginError', 'Wrong email or password! Login failed.');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function login(Request $request){
        $database = User::all()
        ->where('email', '=', $request->email)
        ->first();

        if($database){
            if(password_verify($request->password, $database->password)){
                return response()->json([
                    'Success' => 1,
                    'id' => $database->id,
                    'name' => $database->nama,
                    'Message' => 'Berhasil'
                ]);
            }
        }
    }

    public function register(Request $request)
    {
        User::insert([
           'nama' => $request->nama, 
           'email' => $request->email, 
           'password' => Hash::make($request->password), 
           'no_hp' => $request->no_hp, 
           'alamat' => $request->alamat, 
        ]);

        return response()->json(["Message" => "Berhasil"]);
    }
}