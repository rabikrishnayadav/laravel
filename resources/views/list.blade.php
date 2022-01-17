<table border="1px" cellpadding="10px">
	<caption>Members List</caption>
	<thead>
		<tr>
			<th>IDs</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $info)
		<tr>
			<td> {{$info->id}} </td>
			<td> {{$info->name}} </td>
			<td> {{$info->email}} </td>
			<td> {{$info->address}} </td>
		</tr>
		@endforeach
	</tbody>
</table>