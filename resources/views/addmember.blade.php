<style type="text/css">
	*{
		margin: auto;
	}
	.container{
		max-width: 90%;
		margin-left: 25px;
		margin-right: 25px;
	}
</style>
<x-header />
<h1 style="text-align:center">Add member</h1>
<div class="container">
	<form method="post" action="add">
		@csrf
	<div>
		<label for="Name">Name:</label>
		<input type="text" name="name" placeholder=" enter name ">
	</div><br>
	<div>
		<label for="email">Email ID:</label>
		<input type="email" name="email" placeholder=" enter email id ">
	</div><br>

	<div>
		<label for="address">Address:</label>
		<input type="text" name="address" placeholder=" enter address ">
	</div><br>
	<div>
		<button type="submit">Add Member</button>
	</div>
</form>
</div>