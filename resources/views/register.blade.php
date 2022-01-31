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
<div class="container" style="text-align:center"><br><br>
	<form method="post" action="register">
		@csrf
	<div>
		<x-input type="text" name="username" label="Name" placeholder="enter username"/>
		<x-input type="email" name="email" label="Email" placeholder="enter email id"/>
		<x-input type="password" name="password" label="Password" placeholder="enter password"/>
		<button type="submit">Register</button>
		<button type="reset">Reset</button>
	</div>
</form><br><br>
Already Have Account!<a href="{{route('user.login')}}"><button>Login Here</button></a>
</div>