<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Log;
use App\Models\Task;

class mainController extends Controller
{
    public function index() {
    //  $users = DB::table('tasks')->get();
        $users = Task::all();
      return view('main', ['users' => $users]);
}

    public function update($id) {
  //   $user = DB::table('tasks')->where('id', $id)->first();
      $user = Task::where('id', '=', $id)->first();
      $foo = $user->count;
      $bar = $user->name;
      $foo++;
      DB::table('tasks')->where('id', $id)->update(
       ['count' => $foo]);
  //  $post1 = Task::find($id)->update(['count' => $foo]); не понятно почему не пашет

      //  DB::table('logs')->insert([
      //  'task_id' => $bar,
      //  'status' => '0',
      //   'created_at' => '2018-01-19 10:00:00',
      //   'updated_at' => '2018-01-19 10:00:00']);
      $post = Log::create(['task_id' => $bar, 'status' => '0']);

      return redirect()->route('index', $id)->with('success', 'Сообщение было обновлено');
    }

    public function queue() {
    //  $users = DB::table('logs')->orderBy('id', 'desc')->get();
        $users = Log::orderByDesc('id')->get();
      return view('queue', ['users' => $users]);
    }

    public function inWork($id) {
      $foo = 1;
      DB::table('logs')->where('id', $id)->update(
        ['status' => $foo]);

      return redirect()->route('queue', $id)->with('success', 'Сообщение было обновлено');
    }
  }
