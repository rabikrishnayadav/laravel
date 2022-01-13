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
<h1 style="text-align:center">Registration Page</h1>
<div class="container">
	<form method="post" action="users">
		@csrf
	<div>
		<label for="username">Username:</label>
		<input type="text" name="username" placeholder=" enter username ">
	</div><br>
	<div>
		<label for="email">Email ID:</label>
		<input type="email" name="email" placeholder=" enter email id ">
	</div><br>

	<div>
		<label for="password">Password:</label>
		<input type="password" name="password" placeholder=" enter password ">
	</div><br>
	<div>
		<button type="submit">Register</button>
	</div>
</form>
</div>