<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function _construct(){
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        // dd($request->remember);
        $this->validate($request, [
            'name'=> 'required|max:255|min:5',
            'username'=> 'required|max:22',
            'email'=> 'required|max:255|email',
            'password'=> 'required|confirmed'
        ]);

        User::create([
            'username'=> $request->username,
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),

        ]);
        auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->remember);
        

        return redirect('dashboard');
    }
}
