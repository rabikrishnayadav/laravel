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
		<label for="username">Username:</label>
		<input type="text" name="username" placeholder=" enter username " value="{{old('username')}}" required>
		<span style="color:red">
			@error('username')
			{{$message}}
			@enderror
		</span>
	</div><br>
	<div>
		<label for="email">Email ID:</label>
		<input type="email" name="email" placeholder=" enter email id " value="{{old('email')}}" required>
		<span style="color:red">
			@error('email')
			{{$message}}
			@enderror
		</span>
	</div><br>

	<div>
		<label for="password">Password:</label>
		<input type="password" name="password" placeholder=" enter password " required><br>
		<span style="color:red">
			@error('password')
			{{$message}}
			@enderror
		</span>
	</div><br>
	<div>
		<label for="password">Confirm Password:</label>
		<input type="password" name="password_confirmation" placeholder=" enter password " required>
		<span style="color:red">
			@error('password_confirmation')
			{{$message}}
			@enderror
		</span>
	</div><br>
	<div>
		<button type="submit">Register</button>
		<button type="reset">Reset</button>
	</div>
</form>
</div>