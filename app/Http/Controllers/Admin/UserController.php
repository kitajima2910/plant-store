<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminFormUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   
    public function index() {
        // $users = User::all();
        $emails =Auth::user()->email ;
        $users = DB::select('select * from users where email not in (?)', [$emails]);
        // $users = DB::table('users')->where('email','Auth::user()->email')->get();
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


    public function update(AdminFormUser $request, $id)
    {

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->password =   $request->get('password');
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