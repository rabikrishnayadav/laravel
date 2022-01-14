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
@if(session('username'))
<h3>Data Saved for {{session('username')}} </h3>
@endif
<h1 style="text-align:center">Registration Page</h1>
<div class="container">
	<form method="post" action="register">
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