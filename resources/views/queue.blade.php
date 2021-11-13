<table>
  <tr><th>id</th><th>task_id</th><th>status</th></tr>
  @foreach($users as $user)
  <tr><td>{{ $user->id }}</td><td>{{ $user->task_id }}</td><td>{{ $user->status }}</td></tr>
  @endforeach
</table>
