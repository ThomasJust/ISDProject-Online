<?php

namespace App\Http\Controllers;

use DB;
use View;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('users')->get();

        return View::make('index', ['users' => $users]);
    }
}