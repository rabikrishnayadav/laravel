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
				<a href="{{url('/customer/view')}}"><button type="button">Reset</button>
				</a><a href="{{route('customer.trash')}}" style="float:right">
				<button>View Trash</button>
				</a><br>
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
					Active
					@else
					Inactive
					@endif
				</td>
				<td><a href="{{route('customer.edit',['id' => $data->id])}}">Update</a></td>
				<td><a href="{{route('customer.delete',['id' => $data->id])}}">Trash</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

</body>
</html>