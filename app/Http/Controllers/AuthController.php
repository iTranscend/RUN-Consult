<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AuthController extends Controller
{
    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $email = $request->input('email');
        $password = $request->input('password');

        $row = DB::select('SELECT id, firstname, lastname, profile_photo, password, email, role_id, unit_id FROM users WHERE email = ?', [$email]);
        
        if (count($row) == 1 && $password == $row[0]->password && $row[0]->role_id == 1) {
            $request->session()->put([
                'user' => $row[0]->id,
                'firstname' => $row[0]->firstname,
                'lastname' => $row[0]->lastname,
                'email' => $row[0]->email,
                'profile_photo' => $row[0]->profile_photo,
                'unit_id' => $row[0]->unit_id,
                ]);
            return redirect('/dashboard')->with('id', $row[0]->id);
        }
        elseif (count($row) == 1 && $password == $row[0]->password && $row[0]->role_id == 2) {
            $request->session()->put([
                'user'=> $row[0]->id,
                'firstname'=> $row[0]->firstname,
                'lastname'=> $row[0]->lastname,
                'email'=> $row[0]->email,
                'profile_photo' => $row[0]->profile_photo,
                'unit_id' => $row[0]->unit_id,
                ]);
            return redirect('/make-sale')->with('id', $row[0]->id);
        }
        elseif (count($row) < 1 || $password != $row[0]->password) {
            return redirect('/login2')->with('danger', 'Invalid Email or Password!');
        }
        elseif ($row[0]->role_id == 3) {
            return redirect('/login2')->with('danger', 'Unauthorised User!');
        }
    }

    public function logout(Request $request) {
        // Session::flush($request->user);
        $request->session('user')->flush();
        return redirect('/login2');
    }
}
