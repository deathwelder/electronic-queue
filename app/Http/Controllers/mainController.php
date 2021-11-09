<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class mainController extends Controller
{
    public function index() {
      $users = DB::table('tasks')->get();
      return view('main', ['users' => $users]);
}

    public function receipt() {
      return view('receipt');
    }


}
