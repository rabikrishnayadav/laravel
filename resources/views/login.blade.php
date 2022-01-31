<style type="text/css">
	*{
		margin: auto;
	}
	.container{
		width: 90%;
		margin-left: 25px;
		margin-right: 25px;
		margin: auto;
		text-align: center;
	}
</style>
<x-header />
<div class="container">
<h1>Login page</h1><br><br><br>
	
	<form method="post" action="login">
	@csrf
	<input type="text" name="username" placeholder="enter username"><br><br>
	<input type="password" name="password" placeholder="enter password"><br><br>
	<button type="submit">Login</button>
	</form><br><br>
	Don't have account!
	<a href="{{route('user.register')}}"><button>Register Here</button></a>
	<br><br>


</div>
