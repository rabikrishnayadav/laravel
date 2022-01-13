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
<ol>
	<li>GET Method</li>
	<form method="get" action="login_with_get">
	<input type="text" name="username" placeholder="enter username"><br><br>
	<input type="password" name="password" placeholder="enter password"><br><br>
	<button type="submit">Login</button>
	</form><br><br><br><br>
	<li>POST Method</li>
	<form method="post" action="login_with_post">
	@csrf
	<input type="text" name="username" placeholder="enter username"><br><br>
	<input type="password" name="password" placeholder="enter password"><br><br>
	<button type="submit">Login</button>
	</form><br><br><br><br>
	<li>PUT Method</li>
	<form method="post" action="Updated_Data_with_put_method">
	@csrf
	{{method_field('put')}}
	<input type="text" name="username" placeholder="enter username"><br><br>
	<input type="password" name="password" placeholder="enter password"><br><br>
	<button type="submit">Login</button>
	</form><br><br><br><br>
	<li>DELETE Method</li>
	<form method="post" action="Deleted_data_with_delete_method">
	@csrf
	{{method_field('delete')}}
	<input type="text" name="username" placeholder="enter username"><br><br>
	<input type="password" name="password" placeholder="enter password"><br><br>
	<button type="submit">Login</button>
	</form><br><br><br><br>
</ol>


</div>
