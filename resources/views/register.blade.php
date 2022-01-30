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
	<form method="post" action="{{url('/')}}/registered">
		@csrf
	<div>
		<x-input type="text" name="username" label="Name" placeholder="enter username"/>
		<x-input type="email" name="email" label="Email" placeholder="enter email id"/>
		<x-input type="password" name="password" label="Password" placeholder="enter password"/>
		<x-input type="password" name="password_confirmation" label="Confirm Password" placeholder="enter same password"/>
		<button type="submit">Register</button>
		<button type="reset">Reset</button>
	</div>
</form>
</div>