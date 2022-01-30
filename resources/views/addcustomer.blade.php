<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<style type="text/css">
		*{
			margin: auto;
		}
		.container{
			max-width: 90%;
			margin-left: 25px;
			margin-right: 25px;
		}
		#form{
			width: 800px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 20px;
			border: 1px solid;
			border-radius: 10px;
			padding: 10px;
		}
		.btn{
			text-align: center;
		}
		.div{
			text-align: center;
		}
		.div1{
			width: 50%;
		}
		</style>
	</head>
	<body>
		<x-header />
		@if(session('username'))
		<h3>Data Saved for {{session('username')}} </h3>
		@endif
		<div class="container" id="form">
			<h1 style="text-align:center">Customer Registration Page</h1><br>
		<div>
			<form method="post" action="{{url('/')}}/customers">
				@csrf
				<div class="div">
					<label for="username">Username:</label>
					<input type="text" name="username" placeholder=" enter username " value="{{old('username')}}" required>
					<span style="color:red">
						@error('username')
						{{$message}}
						@enderror
					</span>
					<label for="email">Email ID:</label>
					<input type="email" name="email" placeholder=" enter email id " value="{{old('email')}}" required>
					<span style="color:red">
						@error('email')
						{{$message}}
						@enderror
					</span>
					<br><br>
					<label for="password">Password:</label>
					<input type="password" name="password" placeholder=" enter password " required>
					<span style="color:red">
						@error('password')
						{{$message}}
						@enderror
					</span>
					<label for="password">Confirm Password:</label>
					<input type="password" name="password_confirmation" placeholder=" enter password " required>
					<span style="color:red">
						@error('password_confirmation')
						{{$message}}
						@enderror
					</span>
					<br><br>
					<label for="country">Country:</label>
					<input type="text" name="country" value="{{old('country')}}" required>
					<span style="color:red">
						@error('country')
						{{$message}}
						@enderror
					</span>
					<label for="state">State:</label>
					<input type="text" name="state" value="{{old('state')}}" required>
					<span style="color:red">
						@error('state')
						{{$message}}
						@enderror
					</span><br><br>
					<label for="address">Address:</label>
					<input type="text" name="address" placeholder=" enter address " value="{{old('address')}}" required>
					<span style="color:red">
						@error('address')
						{{$message}}
						@enderror
					</span><br><br>
						Gender:
					<input type="radio" name="gender" value="M">Male &nbsp;&nbsp;
					<input type="radio" name="gender" value="F">Female &nbsp;&nbsp;
					<input type="radio" name="gender" value="O">Other &nbsp;&nbsp;
					Date of Birth:
					<input type="date" name="date">
					<br><br>
					<button type="submit" class="btn">Register</button>
					<button type="reset" class="btn">Reset</button>
				</div>
			</form>
		</div>
		</div>
	</body>
</html>