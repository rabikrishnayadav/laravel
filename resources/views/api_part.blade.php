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
	This method is used for getting the data from database.<br>
	Example:<br>
	1) Create a Model<br>
	E.g: php artisan make mode<br><br>
	2) Create a Controller<br>
	E.g: php artisan make:controller DeviceController<br>
	2.1) import the model<br>
	E.g: use App\Models\Device;<br>
	2.2) make function inside DeviceController class<br>
	<code>
		function deviceList(){<br>
        return Device::all();<br>
    }<br>
	</code>
	3) Make Route for the view data<br>
	before making route first import controller in api.php file<br>
	E.g: use App\Http\Controllers\DeviceController;<br>
	E.g: Route::get('list',[DeviceController::class,'deviceList']);<br>
	4) It's Over now we can check it on postman and also getMethod data will show on browser<br>
	E.g: 127.0.0.1:8000/api/list<br><br>

	<h3><li>Post mehtod</li></h3>
	This method is used for insert(save) the data into database.<br>
	Example:<br>
	1) Create a Model<br>
	E.g: php artisan make mode<br><br>
	2) Create a Controller<br>
	E.g: php artisan make:controller DeviceController<br>
	2.1) import the model and Http class<br>
	E.g: use Illuminate\Http\Request;<br>
	E.g: use App\Models\Device;<br>
	2.2) make method inside DeviceController class for insert data<br>
	<code>
		function insertDevice(Request $req){<br>
        $device = new Device; <br>
        $device->name = $req->name;<br>
        $device->employee_id = $req->employee_id;<br>
        $result = $device->save();<br>
        if ($result) {<br>
            return["result"=>"Data has been saved"];<br>
        }else{<br>
            return["result"=>"Operation Faild"];<br>
        }<br>
    }<br>
	</code>
	3) Make Route for the insert data<br>
	before making route first import controller in api.php file<br>
	E.g: use App\Http\Controllers\DeviceController;<br>
	E.g: Route::post('add',[DeviceController::class,'insertDevice']);<br>
	5) Now goto the postman<br>
	a) use POST method<br>
	b) select raw button<br>
	c) change Text to JSON on Dropdown<br>
	d) Write the code for insert the value<br>
	Example:<br>
	<code>
		{<br>
    "name":"Android Device",<br>
    "employee_id":"3"<br>
	}<br>
	</code>
	After Writing the code use the route link and send it.<br>
	E.g: 127.0.0.1:8000/api/add<br><br>

	<h3><li>Put mehtod</li></h3>
	This method is used for update the data in database<br>
	Example:<br>
	1) Create a Model<br>
	E.g: php artisan make mode<br><br>
	2) Create a Controller<br>
	E.g: php artisan make:controller DeviceController<br>
	2.1) import the model and Http class<br>
	E.g: use Illuminate\Http\Request;<br>
	E.g: use App\Models\Device;<br>
	2.2) make method inside DeviceController class for insert data<br>
	<code>
		function updateDevice(Request $req){<br>
        $device = Device::($req->id); <br>
        $device->name = $req->name;<br>
        $device->employee_id = $req->employee_id;<br>
        $result = $device->save();<br>
        if ($result) {<br>
            return["result"=>"Data has been Updated"];<br>
        }else{<br>
            return["result"=>"Operation Faild"];<br>
        }<br>
    }<br>
	</code>
	3) Make Route for the update data<br>
	before making route first import controller in api.php file<br>
	E.g: use App\Http\Controllers\DeviceController;<br>
	E.g: Route::put('update',[DeviceController::class,'updateDevice']);<br>
	5) Now goto the postman<br>
	a) use PUT method<br>
	b) select raw button<br>
	c) change Text to JSON on Dropdown<br>
	d) Write the code for update the value<br>
	Example:<br>
	<code>
		{<br>
	    "name":"Mac Pro",<br>
	    "employee_id":"4",<br>
	    "id":"6"<br>
		}<br>
	</code>
	After Writing the code use the route link and send it.<br>
	E.g: 127.0.0.1:8000/api/add<br><br>

	<h3><li>Delete mehtod</li></h3>
	This method is used for delete a record from database table<br>
	Example:<br>
	1) Create a Model<br>
	E.g: php artisan make mode<br><br>
	2) Create a Controller<br>
	E.g: php artisan make:controller DeviceController<br>
	2.1) import the model and Http class<br>
	E.g: use Illuminate\Http\Request;<br>
	E.g: use App\Models\Device;<br>
	2.2) make method inside DeviceController class for insert data<br>
	<code>
		function deleteDevice($id){<br>
        $device = Device::find($id);<br>
        $result = $device->delete();<br>
        if ($result) {<br>
            return["result"=>"Data has been Deleted"];<br>
        }else{<br>
            return["result"=>"Operation Faild"];<br>
        }<br>
    }<br>
	</code>
	3) Make Route for the delete data<br>
	before making route first import controller in api.php file<br>
	E.g: use App\Http\Controllers\DeviceController;<br>
	E.g: Route::delete('delete/{id}',[DeviceController::class,'deleteDevice']);<br>
	5) Now goto the postman<br>
	a) use DELETE method<br>
	b) select raw button<br>
	Here we can dirctly delete with url<br>
	For delete with url write the id in url and send it.<br>
	E.g:E.g: 127.0.0.1:8000/api/delete/9<br><br>
	<h3><li>Search mehtod</li></h3>
</ol>
</body>
</html>