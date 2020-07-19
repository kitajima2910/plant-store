<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminFormUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index() {
        $users = User::all();
        return view('pages.admin.users.index', compact('users'));
    }

    public function create() {
       return view('pages.admin.users.create');
    }

    public function store(AdminFormUser $request) {

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'level' => $request->get('level'),
            'status' => $request->get('status')
        ]);
        $user->save();
        return redirect()->route('users.index');

    }

    public function edit(User $user) {
        return view('pages.admin.users.edit',compact('user'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'password' => 'required'
        ]);
 
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->password = bcrypt($request->get('password'));
        $user->level = $request->get('level');
        $user->status = $request->get('status');
        $user->save();
        return redirect()->route('users.index');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('users.index');
    }

}