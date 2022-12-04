<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login(){
        return view('admin.login');
    }

    public function handleLogin(AdminRequest $request)
    {
            $remember_me = $request->has('remember_me') ? true : false;
            $credentials = $request->validated();

            if (Auth::guard('admin')->attempt($credentials, $remember_me)) {
                $request->session()->regenerate();
                return redirect (route('admin.index'));
            }else{
               return back()->with(['error' => 'Your data is wrong']);
            }
    }

}
