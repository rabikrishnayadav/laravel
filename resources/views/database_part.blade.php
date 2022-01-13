<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel & MySql</title>
	<style type="text/css">
		*{
			margin: auto;
		}
		.container{
			width: 90%;
			margin-left: 25px;
			margin-right: 25px;
		}
		code{
			color: orangered;
		}
	</style>
</head>
<body>
<x-header />
<div class="container">
<h1 style="text-align:center;">Database Part</h1>

<h3>For Connecting with database</h3>
1) Create database put name 'first_laravel'<br>
2) Open the '.env' file<br>
make change all the data like this<br>
<code>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=first_laravel  // write the correct database name which is create for this project in phpmyadmin<br>
DB_USERNAME=root<br> 
DB_PASSWORD= 	// leave blank if there is not set password in your database<br>
</code>
3)Run the first Migration on terminal<br>
i)Syntax: php artisan config:Cache<br>
ii)Syntax: php artisan migrate<br>
<h4>Now Database is Connect</h4>
<h5>And By Default Laravel is created 5 table for us they are</h5>
<ol>
	<li>users</li>
	<li>migrations</li>
	<li>failed_jobs</li>
	<li>password_resets</li>
	<li>personal_access_tokens</li>
</ol>
</div>
</body>
</html>