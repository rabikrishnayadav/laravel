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
		<div class="container" id="form">
			<h1 style="text-align:center">{{$title}}</h1><br>
		<div>
			<form method="post" action="{{$url}}">
				@csrf
				<div class="div">
					<label for="name">Name:</label>
					<input type="text" name="name" placeholder=" enter name " value="{{$customer->user_name}}" required>
					<span style="color:red">
						@error('name')
						{{$message}}
						@enderror
					</span>
					<label for="email">Email ID:</label>
					<input type="email" name="email" placeholder=" enter email id " value="{{$customer->email}}" required>
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
					<input type="text" name="country" value="{{$customer->country}}" required>
					<span style="color:red">
						@error('country')
						{{$message}}
						@enderror
					</span>
					<label for="state">State:</label>
					<input type="text" name="state" value="{{$customer->state}}" required>
					<span style="color:red">
						@error('state')
						{{$message}}
						@enderror
					</span><br><br>
					<label for="address">Address:</label>
					<input type="text" name="address" placeholder=" enter address " value="{{$customer->address}}" required>
					<span style="color:red">
						@error('address')
						{{$message}}
						@enderror
					</span><br><br>
						Gender:
					<input type="radio" name="gender" value="M"
					{{$customer->gender == "M" ? "checked" : ""}}
					/>Male &nbsp;&nbsp;
					<input type="radio" name="gender" value="F"
					{{$customer->gender == "F" ? "checked" : ""}}
					/>Female &nbsp;&nbsp;
					<input type="radio" name="gender" value="O"
					{{$customer->gender == "O" ? "checked" : ""}}
					/>Other &nbsp;&nbsp;
					Date of Birth:
					<input type="date" name="date" value="{{$customer->dob}}">
					<br><br>
					<button type="submit" class="btn">Submit</button>
					<button type="reset" class="btn">Reset</button>
				</div>
			</form>
		</div>
		</div>
	</body>
</html>