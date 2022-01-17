<h1 style="text-align:center">Update Member</h1>

<form action="/update" method="post">
	@csrf
	<input type="hidden" name="id" value="{{$member_data['id']}}">
	<div>
		<label for="Name">Name:</label>
		<input type="text" name="name" value=" {{$member_data['name']}} " placeholder=" enter name ">
	</div><br>
	<div>
		<label for="email">Email ID:</label>
		<input type="email" name="email" value=" {{$member_data['email']}} " placeholder=" enter email id ">
	</div><br>

	<div>
		<label for="address">Address:</label>
		<input type="text" name="address" value=" {{$member_data['address']}} " placeholder=" enter address ">
	</div><br>
	<div>
		<button type="submit">Update Member</button>
	</div>
</form>