  <table>
    <tr><th>id</th><th>name</th><th>count</th></tr>
    @foreach($users as $user)
    <tr><td>{{ $user->id }}</td><td><a href="{{ route('receipt') }}">{{ $user->name }}</a></td><td>{{ $user->count }}</td></tr>
    @endforeach
  </table>
