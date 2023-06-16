<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_dashboard');
    }

    public function panel_users()
    {
        $users = User::all();
        return view('admin.users-panel', ['users'=>$users]);
    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('admin.dashboard');
    }
}
