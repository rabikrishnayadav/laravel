<style type="text/css">
	.w-5{
		display: none;
	}
</style>
<h1 style="text-align:center">Member List</h1>
<table border="1px" cellpadding="10px">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Email</td>
		<td>Address</td>
		<td>Operation</td>
	</tr>
	@foreach($members as $info)
	<tr>
		<td>{{$info['id']}}</td>
		<td>{{$info['name']}}</td>
		<td>{{$info['email']}}</td>
		<td>{{$info['address']}}</td>
		<td>
			<a href=" {{'update/'.$info['id']}} " >Update</a>
		</td>
	</tr>
	@endforeach
</table>
<div>
	{{$members->links()}}
</div>