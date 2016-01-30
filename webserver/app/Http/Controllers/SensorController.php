<?php

namespace App\Http\Controllers;

use DB;
use View;
use App\Http\Controllers\Controller;

class SensorController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $sensors = DB::table('sensors')->get();

        return View::make('index', ['sensors' => $sensors]);
    }
}