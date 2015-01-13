<html>
<body>
<h4>All users
<a href="/users/create">Create user</a>
</h4>	
@if(isset($users))
<table>
<th>name</th>
<th>email</th>

@foreach($users as $user)
<tr>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>	
</tr>
@endforeach
@endif
</body>
</html>