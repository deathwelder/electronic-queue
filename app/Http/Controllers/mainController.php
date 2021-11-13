<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\tasks;
use App\Models\logs;

class mainController extends Controller
{
    public function index() {
      $users = DB::table('tasks')->get();
      return view('main', ['users' => $users]);
}

    // public function addCount($id) {
      // $task = new tasks;
      // return view('add-count', ['users' => $task->find($id)]);
    // }

    public function update($id) {
      $task = new tasks;
      $logs = new logs;
      $user = DB::table('tasks')->where('id', $id)->first();
      $foo = $user->count;
      $bar = $user->name;
      $foo++;
      DB::table('tasks')->where('id', $id)->update(
        ['count' => $foo]);

        DB::table('logs')->insert([
        'task_id' => $bar,
        'status' => '0',
         'created_at' => '2018-01-19 10:00:00']);

      return redirect()->route('index', $id)->with('success', 'Сообщение было обновлено');
    }

    public function queue() {
      $users = DB::table('logs')->orderBy('id', 'desc')->get();
      return view('queue', ['users' => $users]);
    }

    public function inWork($id) {
      $logs = new logs;
      $foo = 1;
      DB::table('logs')->where('id', $id)->update(
        ['status' => $foo]);

      return redirect()->route('queue', $id)->with('success', 'Сообщение было обновлено');  
    }
  }
