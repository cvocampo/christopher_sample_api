<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RoleController extends Controller
{
    public function index(Request $request){
       return $users = User::role($request->role)->with('roles')->get();
    }
}
