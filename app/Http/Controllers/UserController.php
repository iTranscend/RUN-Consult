<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminiate\Support\Facades\Storage;
use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('deleted', false)->get();
        return view('admin.users')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('profile_photo')) {
            // Get filename with extension
            $fileNameWithExt = $request->file('profile_photo')->getClientOriginalName();
            // Get filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('profile_photo')->getClientOriginalExtension();
            // Define unique name to save with time
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('profile_photo')->storeAs('public/profile_photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $user = new User;
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->unit_id = $request->input('unit');
        $user->role_id = $request->input('role');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->password = $request->input('password');
        $user->profile_photo = $fileNameToStore;
        $user->save();

        return redirect('/users')->with('success', 'New User Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
     * Deactivate the specified user to remove his/her priviledges
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */

     public function toggleStatus($id) {
        $user = User::find($id);
        $user->isActive = !$user->isActive;
        $user->save();
        
        return redirect('')->with('success', 'Status Changed');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->deleted = !$user->deleted;
        $user->save();

        return redirect('/users')->with('danger', 'You have successfully deleted the user');
    }
}
