<style type="text/css">
	.container{
		max-width: 80%;
		margin-left: 50px;
		margin-right: 50px;
	}
</style>
<h1>This is Profile Page</h1>
<div class="container">
	<h2>Hello, {{session('username')}} </h2>
<a href="/logout"><button style="margin-right:100px; float: right; min-width: 80px; min-height:40px; background-color:red; text-color:#fff; font-weight:bold">Logout</button></a>
-----------------------------------------------
<hr>
<h2>Profile Picture</h2>
<form method="post" action="profile" enctype="multipart/form-data">
	@csrf
	<input type="file" name="avtar"><br><br>
	<button type="submit">Upload Photo</button>
</form>
</div>