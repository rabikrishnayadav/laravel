<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel API</title>
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
<h1 style="text-align:center;">API Part</h1>
<h3>API Stand for Application Programming Interface</h3>
<p>
	It's work is transfer the data between two different technology.<br>
	API is creating Data in JSON format.	
</p>
For making API There are some Simple Steps<br>
1) Create a Controller<br>
E.g: php artisan make:controller dummyApiController<br>

1.1) After Creating the Controller make the function inside the class<br>
Example:<br>
<code>
	function getData(){<br>
        return ["name"=>"Rabi Kr Yadav", "email"=>"rabikrishnayadav@gmail.com","addresss"=>"Janakpur Nepal"];<br>
    }<br>
</code>

2) Make the Route for the controller<br>
Here Making route for API We can not using the 'web.php' file,<br>
Here making route for Api we are using the 'api.php' file<br>

2.1) Open the 'api.php' file and import the Controller Class in api file.<br>
E.g: use App\Http\Controllers\dummyApiController;<br>

2.2) Make route for api<br>
E.g: Route::get('data',[dummyApiController::class,'getData']);<br> 

3) It's Done. Now just check in the Postman api is working or not.<br><br>

Basically there are so many method for crreating the Api Some of them Are.<br>
<ol>
	<h3><li>Get mehtod</li></h3>
	<h3><li>Post mehtod</li></h3>
	<h3><li>Put mehtod</li></h3>
	<h3><li>Delete mehtod</li></h3>
	<h3><li>Search mehtod</li></h3>
</ol>
</body>
</html>