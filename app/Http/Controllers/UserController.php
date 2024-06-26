<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index()
    {
        abort_unless(Gate::allows('super_access'), 404);
        $users = User::get();

        return view('users.index', compact('users'));
    }
}
