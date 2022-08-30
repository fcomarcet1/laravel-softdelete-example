<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $users = User::all();

        /* print_r($usersCount);
        echo "<br>";
        print_r($usersList);
        die(); */

        $user = User::find(1);
        if (isset($user)) {
            $user->delete();
        }

        // return all users include deleted
        $userWithTrashed = User::withTrashed()->get();
        $userWithTrashedCount = User::withTrashed()->count();

        // return only deleted users
        $userOnlyTrashed = User::onlyTrashed()->get();
        $userOnlyTrashedCount = User::onlyTrashed()->count();

        // restore deleted user
        User::withTrashed()->where('id', 2)->restore();

        // Permanently deleting models
        //User::withTrashed()->where('id', 2)->forceDelete();

        return view('users.index', compact(
            'usersCount',
            'users',
            'userWithTrashed',
            'userWithTrashedCount',
            'userOnlyTrashed',
            'userOnlyTrashedCount',
        ));
    }
}
