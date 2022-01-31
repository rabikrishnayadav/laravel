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
	2.2) make method inside DeviceController class for update data<br>
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
	2.2) make method inside DeviceController class for delete data<br>
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
	Here we can dirctly delete with url<br>
	For delete with url write the id in url and send it.<br>
	E.g:E.g: 127.0.0.1:8000/api/delete/9<br><br>

	<h3><li>Search mehtod</li></h3>
	Here we can serach the data from database for searching the data first we must have some data for getting the data we have to use GET method.<br>
	Example:<br>
	1) Create a Model<br>
	E.g: php artisan make mode<br><br>
	2) Create a Controller<br>
	E.g: php artisan make:controller DeviceController<br>
	2.1) import the model and Http class<br>
	E.g: use Illuminate\Http\Request;<br>
	E.g: use App\Models\Device;<br>
	2.2) make method inside DeviceController class for search data<br>
	<code>
		function searchDevice($name){<br>
        return Device::where("name","like","%".$name."%")->get();<br>
    }<br>
	</code>
	3) Make Route for the search data<br>
	before making route first import controller in api.php file<br>
	E.g: use App\Http\Controllers\DeviceController;<br>
	E.g: Route::get('search/{name}',[DeviceController::class,'serachDevice']);<br>
	5) Now goto the postman<br>
	a) use GET method<br>
	Here we can dirctly search with url<br>
	For search with url write the name in url and send it.<br>
	E.g:E.g: 127.0.0.1:8000/api/search/mac<br><br>
</ol><hr><br>
<div class="container">
	<h3 style="text-align:center;">Validator</h3>
	Example of Validation when data is inserting into database<br>
	For this we have to make model and controller<br>
	E.g: php artisan make:model Device<br>
	E.g: php artisan make:controller DeviceController<br>
	Then Make Method for validation inside DeviceController Class<br>
	E.x:<br>
	<code>
		public function validData(Request $req){<br>
        $rules = array(<br>
            "name" => "required | min:4",<br>
            "employee_id" => "required | max:2",<br>
        );<br>
        $valid_query = Validator::make($req->all(), $rules);<br>
        if ($valid_query->fails()) {<br>
            return response()->json($valid_query->errors(),401);<br>
        }else{<br>
            $device = new Device; // creating a object of Device<br>
            $device->name = $req->name;<br>
            $device->employee_id = $req->employee_id;<br>
            $result = $device->save();<br>
            if ($result) {<br>
                return["result"=>"Data has been saved"];<br>
            }else{<br>
                return["result"=>"Operation Faild"];<br>
            }<br>
        }<br>
    }<br>
	</code>
	Then make route for it<br>
	E.g: Route::post('valid',[DeviceController::class,'validData']);<br>
	After Making Validation goto the postman and use post method<br>
	write code in json for send the data<br>
	E.x:<br>
	<code>
		{<br>
    "name":"lg Tv",<br>
    "employee_id":"4"<br>
	}<br>
	</code>
	Now send it using created route url<br>
	E.g: http://127.0.0.1:8000/api/valid<br>
</div><br><hr><br>
<div>
	<h2 style="text-align:center">API with Resource</h2>
	Resource is used for perform CRUD Operation with single route.<br>
	When we use resource then it will make for us every CRUD function<br>
	Example:<br>
	1) Create Model for it.<br>
	Syntax: php artisan make:model Member<br>
	2) Create Controller for it.<br>
	Syntax: php artisan make:controller resourceMemberController --resource<br>
	2.1) import the created model in controller<br>
	E.g: use App\Models\Member;<br>
	2.2) Now make change inside required methods for perform the task<br>
	E.g:<br>
	<code>
		 public function index()<br>
    {<br>
        // this will give all tha member data from database<br>
        return Member::all();<br>
    }<br>
	</code>
	3) Make route for this.<br>
	before making route first import the controller in api.php file<br>
	E.g: use App\Http\Controllers\resourceMemberController;<br>
	// route for api with resource<br>
	Route::apiResource('member',resourceMemberController::class);<br>
	4) its over now check it on postman<br>
	E.g: http://127.0.0.1:8000/api/member<br>
</div><br><hr><br>
<div>
	<h2>Upload File with API</h2>
	here we are uploading the file for api<br>
	Example:<br>
	1)Create  controller for it.<br>
	E.g: php artisan make:controller FileController<br>
	1.1) making the method for upload file in FileController Class<br>
	E.g:<br>
	<code>
		function fileUpload(Request $req){<br>
        $result = $req->file('file')->store('apiDocs');<br>
        return ['result' => $result];<br>
    }<br>
	</code>
	2) Make route for it.<br>
	Before making route first import file controller in api.php file<br>
	E.g: use App\Http\Controllers\FileController;<br>
	E.g: Route::post('upload',[FileController::class,'fileUpload']);<br>
	3) its done now goto postman<br>
	a) select POST Method<br>
	b) select 'form-data' option<br>
	c) select file<br>
	d) give key name 'file'<br>
	e) upload the file and send it.<br>
	E.g: http://127.0.0.1:8000/api/upload<br>
</div><br><hr><br>
<!------------------------------------------------------------------------------------- -->
<br>
<div class="container">
	<h2>Markdown Mail Template</h2>
	This is a laravel mailing template it's use for mail some one.<br>
	1) For Generating mail template<br>
	Syntax: php artisan make:mail NameOfMailClass --markdown=filePath.fileName<br>
	Example: php artisan make:mail SampleMail -- markdown=emails.SampleMail<br>

	After Entered the command there is two file will create one in 'app/Mail' and fileName.php or another in 'resources/views/emails' fileName.blade.php<br>

	For Designing the template edit the SampleMial.blade.php file<br>

	2) make route for this<br>
	For making the route first import the mail class in web.php<br>
	E.g: use App\Mail\SampleMail;<br>
	Now Create Route<br>
	Example:<br>
	<code>
		// route for mail template<br>
		Route::get('/mail',function(){<br>
		    return new SampleMail();<br>
		});<br>
	</code>
	3) For see the result goto url: http://127.0.0.1:8000/mail<br>
</div><hr><br>
<div class="container">
	<h2 style="text-align:center">API authentication with Sanctum</h2>
	<ol>
		<li>setup database in '.env' file</li>
		<code>
			DB_DATABASE=first_laravel<br>
			DB_USERNAME=root<br>
			DB_PASSWORD=<br>
		</code><br>
		<li>Install Laravel Sanctum.</li>
		Syntax: composer require laravel/sanctum<br><br>
		<li>Publish the Sanctum configuration and migration files.</li>
		Syntax: php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"<br><br>
		<li>Run database migration</li>
		Syntax: php artisan migrate<br><br>
		<li>Add the Sanctum's middleware inside middlewareGroups.</li>
		For add goto dir 'app\kernel.php' file and open it then paste in 'api' group.<br>
		<code>
		protected $middlewareGroups = [<br>
		...<br>
		'api' => [<br>
			EnsureFrontendRequestsAreStateful::class,<br>
			'throttle:60,1',<br>
			\Illuminate\Routing\Middleware\SubstituteBindings::class,<br>
		],<br>
		];<br>
		</code><br>
		
		<li>Use tokens for useres</li>
		For this goto dir 'app\models' inside 'User.php' file<br>
		i) import has api token<br>
		Ex: use Laravel\Sanctum\HasApiTokens;<br>
		ii) use api has token in class<br>
		Ex: use HasApiTokens, HasFactory, Notifiable;<br><br>

		<li>Let's create the seeder for the User model</li>
		Syntax: php artisan make:seeder UserTableSeeder<br>
		After created seeder file then open dir is 'database/seeders' find fileName and open it.<br>
		i) Import<br>
		Ex:<br>
		use Illuminate\Support\Facades\DB;<br>
		use Illuminate\Support\Facades\Hash;<br>
		ii) write code for insert dummy data inside UserTableSeeder class in run() method.<br>
		Example:<br>
		<code>
			DB::table('users')->insert([<br>
            'name' => 'Rabi Kumar',<br>
            'email' => 'kumar@mail.com',<br>
            'password' => Hash::make('password')<br>
        ]);<br>
		</code>
		iii) seed users table with user<br>
		Ex: php artisan db:seed --class=UserTableSeeder<br>

		<li>Create Controller</li>
		Ex: php artisan make:controller UserApiController<br>
		After Created Controller then open it.<br>
		i) import<br>
		Ex:<br>
		a) use Illuminate\Support\Facades\Hash;<br>
		b) use App\Models\User;<br>
		ii) make method inside UserApiController class<br>
		Example:<br>
		<code>
			function index(Request $request){<br>
        $user = User::where('email', $request->email)->first();<br>
        if (!$user || !Hash::check($request->password, $user->password)) {<br>
            return response([<br>
                'message' => ['These credentials do not match our records']<br>
            ], 404);<br>
        }<br>
        $token = $user->createToken('my-app-token')->plainTextToken;<br>
        $response = [<br>
            'user' => $user,<br>
            'token' => $token<br>
        ];<br>
        return response($response, 201);<br>
    	}<br>
		</code><br>
		<li>Make Route for this inside 'api.php' file</li>
		Before making route first import the controller<br>
		Ex:<br>
		use App\Http\Controllers\UserApiController;<br>
		// make route<br>
		Route::post('login',[UserApiController::class,'index']);<br><br>
		<li>Now goto the post man send request with Post Method</li>
		Example 1:<br>
		a) select POST method<br>
		b) select 'raw' option<br>
		c) select JSON from dropdown<br>
		d) write code<br>
		Ex:<br>
		<code>
			{<br>
		    "email":"kumar@mail.com",<br>
		    "password":"123"<br>
			}<br>
		</code>
		e) send it on routed url<br>
		Ex: http://127.0.0.1:8000/api/login<br><br>

		Example 2:<br>
		here make authenticate route for get the user details.<br>
		Ex:<br>
		Route::middleware('auth:sanctum')->get('/user', function (Request $request) {<br>
    	return $request->user();<br>
		});<br>

		For ckeck send GET method on url : http://127.0.0.1:8000/api/user<br>
		Then it will show error. it mean our authentication is working<br>
		Now for get the result we must have token<br>
		For Giving the token<br>
		a) select 'header' option<br>
		b) put 'Authorization' inside KEY<br>
		c) put 'Bearer tokenKey' inside VALUE<br>
		Ex: Bearer 2|ygB2aIAmqeG02DjBDx8RQtVii7GmaE3o4iytUhsR<br>
		Now again send get request on url: http://127.0.0.1:8000/api/user<br>
		Then will get the result.<br><br>

		<li>For Secure with (Authentication) Every API</li>
		For secure all api make middleware Group in 'api.php' file<br>
		Example:<br>
		<code>
			Route::group(['middleware' => 'auth:sanctum'], function(){<br>
    		// add list of api for secure<br>
			Route::get('data',[dummyApiController::class,'getData']);<br>
			Route::get('list/{id?}',[DeviceController::class,'deviceList']);<br>
			Route::post('add',[DeviceController::class,'insertDevice']);<br>
			Route::put('update',[DeviceController::class,'updateDevice']);<br>
			Route::delete('delete/{id}',[DeviceController::class,'deleteDevice']);<br>
			Route::get('search/{name}',[DeviceController::class,'searchDevice']);<br>
			Route::post('valid',[DeviceController::class,'validData']);<br>
			Route::apiResource('member',resourceMemberController::class);<br>
			Route::post('upload',[FileController::class,'fileUpload']);<br>
			});<br>
		</code><br>
		Here all the list api are secured with sanctum<br>
		Now before open every api on postman<br>
		First must have a token<br>
		For putting the token on postpan<br>
		a) select 'header' option<br>
		b) put 'Authorization' inside KEY<br>
		c) put 'Bearer tokenKey' inside VALUE<br>
		Ex: Bearer 2|ygB2aIAmqeG02DjBDx8RQtVii7GmaE3o4iytUhsR<br>
		Now again send get request on url<br>
		Then will get the result.<br><br>
	</ol>
</div><br><hr><br>
<h1 style="text-align:center">Goto Intermediate Level <a href="/intermediate"> click here</a></h1><br>
</body>
</html>