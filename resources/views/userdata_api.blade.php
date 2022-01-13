<h1>User List From the API</h1>

<table border="1">
	<tr>
		<td>id</td>
		<td>name</td>
		<td>email</td>
		<td>Profile Photo</td>
	</tr>
	@foreach($collection as $item)
	<tr>
		<td> {{$item['id']}} </td>
		<td>{{$item['first_name']}}</td>
		<td>{{$item['email']}}</td>
		<td><img src="{{$item['avtar']}}"></td>
	</tr>
	@endforeach
</table>