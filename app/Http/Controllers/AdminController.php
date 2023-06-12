<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin/dashboard');
    
           }

    public function login()
    {

        return view('admin.loginadmin');
    }

    public function connect(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $admin = User::where('email', $request->input('email'))->first();
        if ($admin) {
            if ($admin->email == 'youssouph@groupeisi.com') {
                if (Hash::check($request->input('password'), $admin->password)) {
                    session()->put('admin', $admin);
                    return redirect('admin');
                } else {
                    return back()->with('error', 'Erreur de mots de passe ');
                }
            } else {
                # code...
                return back()->with('error', 'Vous n\'etes pas Admin');
            }
        } else {
            return back()->with('error', 'Ce compte n\'existe pas ');
        }
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect('/loginadmin');
    }
}
