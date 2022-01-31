<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.div{
			width: 98%;
			margin: auto;
		}
		.div table a{
			text-decoration: none;
			padding: 5px;
		}
		.w-5{
		display: none;
		}
	</style>
</head>
<body>
<x-header /><br><br>
<div class="div">
	<form action="">
		<div><h2 style="text-align:center">Customers Data List</h2>
			<div>
				<input type="search" name="search" value="{{$search}}" placeholder="search by name or email">&nbsp;&nbsp;&nbsp;&nbsp;
				<a href=""><button>Search</button></a>
				<a href="{{url('/customer/view')}}"><button type="button">Reset</button></a>
				<a href="{{route('customer.trash')}}" style="float:right">View Trash</a><br>
			</div><br>
		</div>
	</form>
	<table border="1" cellpadding="5" align="center" style="clear:both;">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Date of Birth</th>
				<th>Address</th>
				<th>State</th>
				<th>Country</th>
				<th>Status</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($customers as $data)
			<tr>
				<td>{{$data->user_name}}</td>
				<td>{{$data->email}}</td>
				<td>
					@if($data->gender == 'M')
					Male
					@elseif($data->gender == 'F')
					Female
					@else
					Other
					@endif
				</td>
				<td>{{$data->dob}}</td>
				<td>{{$data->address}}</td>
				<td>{{$data->state}}</td>
				<td>{{$data->country}}</td>
				<td>
					@if($data->status == '1')
					<a href="" style="background-color:green; color:white;"><span>Active</span></a>
					@else
					<a href="" style="background-color:red; color:white;"><span>Inactive</span></a>
					@endif
				</td>
				<td><a href="{{route('customer.edit',['id' => $data->id])}}" style="background-color:gold; color:black;">Update</a></td>
				<td><a href="{{route('customer.delete',['id' => $data->id])}}" style="background-color:red; color:white;">Trash</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div style="text-align:center; padding:10px;">
		{{$customers->links();}}
	</div>
</div>
</body>
</html>