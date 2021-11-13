  <table>
    <tr><th>id</th><th>name</th><th>count</th></tr>
    @foreach($users as $user)
    <tr><td>{{ $user->id }}</td><td><a href="{{ route('update', $user->id) }}">{{ $user->name }}</a></td><td>{{ $user->count }}</td></tr>
    @endforeach
  </table>

  <a href="{{ route('queue') }}">Очередь</a>
  <a href="{{ route('inWork', $user->id) }}">Очередь</a>
