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
</div><br><hr><br>
<div class="container">
	<h1 style="text-align:center">Http Methods</h1>
	There are 7 type of Http Methods<br>
	<ol>
		<li>GET</li>
		This method is used for getting(showing) some data from the server with http
		<li>POST</li>
		This method is used for putting(saving) the data into the server(database)
		<li>PUT</li>
		This method is used for update the data into the server(database)
		<li>DELETE</li>
		This method is used for delete the data into the server(database)
		<li>HEAD</li>
		<li>PATCH</li>
		<li>OPTIONS</li>
	</ol>
	All these method we can use with form and we must have to use with API.
</div><br><hr><br>
<div class="container">
	<h1 style="text-align:center">CRUD Query in Laravel</h1>
	<ul>
		<h3><li>Create</li></h3>
		Before Create first check the database is connected or not for checking the database connection goto to the '.env' file and check it.<br>
		Then,<br>
		1) Create View under directory 'resources/view' and create file like 'fileName.blade.php' <br>
		Example: addmember.blade.php<br><br>
		2) then make the form inside 'addmember.blade.php' view<br>
		Example:<br>
		<code>
		<'form method="post" action="add"><br>
		<'input type="text" name="name" placeholder=" enter name "><br>
		<'input type="email" name="email" placeholder=" enter email id "><br>
		<'input type="text" name="address" placeholder=" enter address "><br>
		<'button type="submit">Add Member<'/button><br>
		</'form><br>
		</code>

		3) Create Model for view for creating model use syntax on command line<br>
		Syntax: php artisan make:model medelName<br>
		Example: php artisan make:model Member<br>
		if do not want to creted update_on or created_on field in the Models table in data base then use this syntax under Model Class inside the Member.php file<br>
		Syntax & Example: public $timestamps=false;<br><br>

		4) Create Controller for creating the controller use syntax on command line<br>
		Syntax: php artisan make:controller controllerName<br>
		Example: php artisan make:controller MemberController<br>
		after creating controller<br><br>
		4.1) import the Http Request<br>
		Example: use Illuminate\Http\Request;<br><br>
		4.2)Create and import the Model<br>
		Example for Import model: use App\Models\Member;<br><br>

		4.3) after importing the Http Request and Model make function inside the Controller Class<br>
		Example:<br>
		<code>
		// creating the function for add member<br>
	    function addMemberData(Request $req){<br>
	        $member = new Member;<br>
	        $member->name = $req->name;<br>
	        $member->email = $req->email;<br>
	        $member->address = $req->address;<br>
	        $member->save();<br>
	        return redirect('add');<br>
	    }<br>
		</code><br>

		5) Make Route for view for making the route goto 'web.php' file<br>
		Syntax:<br>
		Route::view('url_for_view','view_name');<br>
		Route::post('url_for_post',[name_of_Controller::class,'controller_function_name']);<br>
		Example:<br>
		Route::view('add','addmember');<br>
		Route::post('add',[MemberController::class,'addMemberData']);<br><br>

		6) it's over laravel will automatically find the table of Member in database and insert the value insde table with the help of Member Model and make sure inside database there is Members Table Available if not available then create and make require feilds in the table.<br><br>
		
		<h3><li>Read</li></h3>
		For Read(retrive) the data from the database.<br>
		1) Create View inside the 'resourses/view' folder.<br>
		Example: show_member.blade.php<br><br>
		after creating the view just make a table inside the view make feild like id,name,email and address<br>
		
		2) Create Model.<br>
		Example: php artisan make:model Member<br><br>

		3) Create Controller for creating the controller use syntax on command line<br>
		Syntax: php artisan make:controller controllerName<br>
		Example: php artisan make:controller MemberController<br>
		after creating controller<br><br>
		3.1) import the Http Request<br>
		Example: use Illuminate\Http\Request;<br><br>
		3.2) Import the Model<br>
		Example: use App\Models\Member;<br><br>

		3.3) after importing the Http Request and Model make function inside the Controller Class<br>
		Example:<br>
		<code>
			// creating the function for show the member list<br>
		    function showMemberData(Request $request){<br>
		       $data =  Member::all();<br>
		       return view('show_member',['members'=>$data]);<br>
		    }<br>
		</code><br>
		4) Make Route for show the member list<br>
		Example:<br>
		// creating route for show the member from database<br>
		Route::view('member_list','show_member');<br>
		Route::get('list',[MemberController::class,'showMemberData']);<br><br>

		<h3><li>Update</li></h3>

		For Update the data in the database.<br>
		1) Create View inside the 'resourses/view' folder.<br>
		Example: update_member.blade.php<br><br>

		1.1) then make the form inside 'addmember.blade.php' view<br>
		Example:<br>
		<code>
		<'form method="post" action="update"><br>
		<'input type="hidden" name="id" value=""><br>
		<'input type="text" name="name" placeholder=" enter name "><br>
		<'input type="email" name="email" placeholder=" enter email id "><br>
		<'input type="text" name="address" placeholder=" enter address "><br>
		<'button type="submit">Update Member<'/button><br>
		</'form><br>
		</code>
		
		2) Create Model.<br>
		Example: php artisan make:model Member<br><br>

		3) Create Controller for creating the controller use syntax on command line<br>
		Syntax: php artisan make:controller controllerName<br>
		Example: php artisan make:controller MemberController<br>
		after creating controller<br><br>
		3.1) import the Http Request<br>
		Example: use Illuminate\Http\Request;<br><br>
		3.2) Import the Model<br>
		Example: use App\Models\Member;<br><br>

		3.3) after importing the Http Request and Model then make function inside the Controller Class<br>
		Example:<br>
		<code>
			// creating the function for update the member list<br>
  		  	function showForUpdateMemberData($id){<br>
	        $data =  Member::find($id);<br>
	        return view('update_member',['member_data'=>$data]);<br>
	 	   }<br>
	    // creating the function for update the exact id data<br>
	    function UpdateMemberData(Request $req){<br>
	    $member = Member::find($req->id);<br>
        $member->name = $req->name;<br>
        $member->email = $req->email;<br>
        $member->address = $req->address;<br>
        $member->save();<br>
        return redirect('member_list');<br>
    	}<br>
		</code><br>
		4) Make Route for show the member list<br>
		Example:<br>
		// creating the route for update the member data<br>
		Route::get('update/{id}',[MemberController::class,'showForUpdateMemberData']);<br>
		Route::post('update',[MemberController::class,'UpdateMemberData']);<br><br>

		<h3><li>Delete</li></h3>
		For Delete the data form the data base do the following steps.<br>
		1) Create Model.<br>
		Example: php artisan make:model Member<br><br>

		2) Create Controller for creating the controller use syntax on command line<br>
		Syntax: php artisan make:controller controllerName<br>
		Example: php artisan make:controller MemberController<br>
		after creating controller<br><br>
		2.1) import the Http Request<br>
		Example: use Illuminate\Http\Request;<br><br>
		2.2) Import the Model<br>
		Example: use App\Models\Member;<br><br>

		2.3) after importing the Http Request and Model then make function inside the Controller Class<br>
		Example:<br>
		<code>
			// crating the function for delete the member from list<br>
		    function deleteMemberData($id){<br>
		        $data = Member::find($id);<br>
		        $data->delete();<br>
		        return redirect('member_list');<br>
		    }<br>
		</code><br>
		3) Make Route for delete the member list<br>
		Example:<br>
		// creating the route for update the member data<br>
		Route::get('update/{id}',[MemberController::class,'showForUpdateMemberData']);<br>
	</ul>
</div><br><hr><br>
<div class="container">
	<h1 style="text-align:center">Query Builder</h1>
	Here we are connecting with the database without Creating the Member.<br>
	Before starting first check database is connected or not for check open the '.env' file and check it.<br>
	1) Create a new Controller or also we can use old controller<br>
	For create new controller write syntax on terminal<br>
	Syntax: php artisan make:controller controllerName<br>
	Example: php artisan make:controller MemberQueryBuilder<br>
	1.1) after creating controller then import database class<br>
	Example:<br>
	// importing the databse file<br>
	use Illuminate\Support\Facades\DB;<br>
	1.1.1) make function inside the MemberQueryBuilder Class<br>
	Example:<br>
	<code>
		// create function for show the member list which is available in database<br>
		 function memberList(){<br>
        $data = DB::table('members')->get();<br>
        return view('list',['data'=>$data]);<br>
    	}<br>
	</code><br>

	2) Create View inside the 'resourses/view' folder.<br>
		Example: list.blade.php<br><br>

	2.1) then make the tabele inside 'list.blade.php' view<br>
		Example:<br>
		<code>
			<'table border="1px" cellpadding="10px"><br>
				<'tr><br>
					<'th>IDs</'th><br>
					<'th>Name</'th><br>
					<'th>Email</'th><br>
					<'th>Address</'th><br>
				</'tr><br>
			</'table>
		</code>
	3) Make the Route for show the member list.<br>
	before making route just import the Controller in web.php file<br>
	Example:<br>
	// importing the memberQueryBuilder controller<br>
	use App\Http\Controllers\MemberQueryBuilder;<br>
	// creating route for query builder<br>
	Route::get('list',[MemberQueryBuilder::class,'memberList']);<br>
	<br>
	<hr>
	<br>
<!------------------------------------------------------------------------------------- -->

<h3>Where Clause Uses</h3>
1) goto the controller which is made before and then make another function.<br>
Example:<br>
<code>
	// create function for show the member list which is available in database<br>
    function whereMember(){<br>
       return DB::table('members')<br>
       ->where('id',4)<br>
       ->get();<br>
    }<br>
</code>
2) Make route for show the list data<br>
Example:<br>
// creating route for find member with query builder<br>
Route::get('find_list',[MemberQueryBuilder::class,'whereMember']);<br>

<br>
<!------------------------------------------------------------------------------------- -->

<h3>find Keyword Uses</h3>
1) goto the controller which is made before and then make another function.<br>
Example:<br>
<code>
	// create function for find the specific id member with find(6) in database<br>
    function findMember(){<br>
       return (array)DB::table('members')->find(6);<br>
    }<br>
</code>
2) Make route for show the list data<br>
Example:<br>
// creating route for find member with query builder<br>
Route::get('find_list',[MemberQueryBuilder::class,'findMember']);<br>
<br>
<hr>
<br>
<!------------------------------------------------------------------------------------- -->
<h2>Insert Query</h2>
For insert the value inside the table in database.<br>
Just Make Function like this in existing Controller file<br>
Example:<br>
<code>
	// crating the function for insert the data into the table in database<br>
    function insertMember(){<br>
        return DB::table('members')->insert([<br>
            'name'=>'Rabi Kr Yadav',<br>
            'email'=>'rabi@email.com',<br>
            'address'=>'janakpur'<br>
        ]);<br>
    }<br>
</code>
Make route for insert the member data in table data<br>
Example:<br>
// creating route for insert data into table with query builder<br>
Route::get('insert_data',[MemberQueryBuilder::class,'insertMember']);<br>
<br>
<hr>
<br>
<!------------------------------------------------------------------------------------- -->
<h2>update Query</h2>
For update the value inside the table in database.<br>
Just Make Function like this in existing Controller file<br>
Example:<br>
<code>
	// crating the function for for update the particular data in the table inside the database<br>
    function updateMember(){<br>
        return DB::table('members')<br>
        	->where('id',7)<br>
        	->update([<br>
            'name'=>'Rabi Kr Yadav',<br>
            'email'=>'rabi@email.com',<br>
            'address'=>'janakpur'<br>
        ]);<br>
    }<br>
</code>
Make route for insert the member data in table data<br>
Example:<br>
// creating route for for update the particular data in the table inside the database<br>
Route::get('update_data',[MemberQueryBuilder::class,'updateMember']);<br>
<br>
<hr>
<br>
<!------------------------------------------------------------------------------------- -->
<h2>Delete Query</h2>
For Delete the data inside the table in database.<br>
Just Make Function like this in existing Controller file<br>
Example:<br>
<code>
	// crating the function for for delete the particular data where id=9 in the table inside the database<br>
    function deleteMember(){<br>
        return DB::table('members')<br>
        	->where('id',9)<br>
        	->delete();<br>
    }<br>
</code>
Make route for delete the member in table data<br>
Example:<br>
// creating route for for delete the particular data in the table inside the database<br>
Route::get('delete_data',[MemberQueryBuilder::class,'deleteMember']);<br>
</div><br><hr>
<!------------------------------------------------------------------------------------- -->
<br>
<div class="container">
	<h1 style="text-align:center">Aggregate Method</h1>
	It has a database functions which perform mathmatical Calculation<br>
	first Create the controller<br>
	Example: php artisan make:controller AggregateController<br>
	<ul>make the required function inside the AggregateController class in controller file
		<h4><li>Sum</li></h4>
	    function sumOperation(){<br>
	        return DB::table('members')->sum('id'); // it will perform the addition of id number<br>
	    }<br>
	    Make the Route for the function<br>
	    Route::get('addition',[AggregateController::class,'sumOperation']);<br>
		<h4><li>Max</li></h4>
		function maxOperation(){<br>
	        return DB::table('members')->max('id'); // it will perform the maximum of id number<br>
	    }<br>
	    Make the Route for the function<br>
	    Route::get('max',[AggregateController::class,'maxOperation']);<br>
		<h4><li>Min</li></h4>
		function minOperation(){<br>
	        return DB::table('members')->min('id'); // it will perform the minimum of id number<br>
	    }<br>
	    Make the Route for the function<br>
	    Route::get('min',[AggregateController::class,'minOperation']);<br>
		<h4><li>Avg</li></h4>
		function avgOperation(){<br>
	        return DB::table('members')->avg('id'); // it will perform the average number<br>
	    }<br>
	    Make the Route for the function<br>
	    Route::get('avg',[AggregateController::class,'avgOperation']);<br>
	</ul>
</div><br><hr><br>
<!------------------------------------------------------------------------------------- -->
<br>
<div class="container">
	<h2>Join in Laravel</h2>
	Join key word is used for fetch data from two different table.<br>
	Steps<br>
	1) Create Controller E.g. php artisan make:controller EmpolyeeController<br>
	2) make Route for controller and path where data will show<br>
	Example:<br>
	// making path for employee data<br>
	Route::get("employee",[EmployeeController::class,"getEmployeeData"]);<br>
	3) create function inside EmployeeController class for join or other.<br>
	Example:<br>
	<code>
		function getEmployeeData(){<br>
        return DB::table('employee')<br>
        ->join('company','employee.id', '=', 'company.employee_id')<br>
        ->select('company.*','employee.*') // this is for validation it is not require for only join<br>
        ->where('employee.name','Rabi')   // this is for filter data it is also not require for only join<br>
        ->get();<br>
    }<br>
	</code>
</div><br><hr><br>
<!------------------------------------------------------------------------------------- -->
<br>
<div class="container">
	<h2 style="text-align:center">Migration</h2>
	It is used for create table in database with the single command<br>
	before using migration command must be check '.env' file there is database connected or not<br>
	i) Command for create table in database though migration<br>
	Syntax: php artisan make:migration create_tableName_table<br>
	Example: php artisan make:migration create_test_table<br><br>
	For see migration file is created or not goto dir 'database/migrations' and find file name which is created.<br>
	After created migration file successfully then inside that file there is two function is created one 'function up()' another 'function down()'<br>
	a) function up(): when this function will run then table will create in database<br>
	inside this function we can add many feilds in table as requirement.<br>
	Example:<br>
	<code>
		public function up() {<br>
        Schema::create('test', function (Blueprint $table) {<br>
            $table->id();<br>
            $table->string('name');<br>
            $table->string('email');<br>
            $table->timestamps();<br>
        });<br>
    }<br>
	</code>
	b) function down(): when this function will run then table will delete from the database<br>
	Final Command run For Creating tables in database<br>
	<strong>Syntax: php artisan migrate</strong><br>
	When this command run then it will create all the table in database which migration file is created<br><br>
	<ul>
		<b>Some Important Migration Command</b>
		<li>php artisan make:migration create_tableName_table</li>
		This command is used create a new Migration file for crating table in database
		<li>php artisan migrate</li>
		This command is used for created the table in database which migration file is available inside 'database/migration' folder
		<li>php artisan migrate:reset</li>
		This command is used for delete all the table in database which is created through migration command.
		<li>php artisan migrate:rollback</li>
		This command is used for delete all the table in database which is only created at the last migration time<br>
		<li>php artisan migrate:rollback --step 2</li>
		This command is used for delete the table form last migration as a requirement quantity
		<li>php artisan migrate:refresh</li>
		This command is used when once migration is run then any changes happen in the migration file then again we have to refresh that table in database.<br>
		When this command will run then it will delete old table in database and create again new table in database.
		<li>php artisan migrate --path=/database/migrations/2022_01_20_144924_create_test_table.php</li>
		This command is used for migrate the only one(or particular) file for create only one table in database.
	</ul>
</div><br><hr><br>
<!------------------------------------------------------------------------------------- -->
<br>
<div class="container">
	<h2 style="text-align:center">Seeding</h2>
	This is used for insert the dummy data in database.<br>
	For Creating Seeding File.<br>
	Syntax: php artisan make:seeder fileName<br>
	Example: php artisan make:seeder MembersSeeder<br>
	For Checking file is created or not goto dir 'database/seedres' and find file name which is created.<br>
	After creating the seeder file then open it and import DB file<br>
	Example:<br>
	//importing the db file<br>
	use Illuminate\Support\Facades\DB;<br>
	// importing the Str file<br>
	use Illuminate\Support\Str;<br><br>
	Afeter importing these file then create function for inserting dummy data in database inside MembersSeeder Class<br>
	Example:<br>
	<code>
		public function run() {<br>
        // function for inserting the dummy data in database inside members table<br>
        DB::table('members')->insert([<br>
            'name'=>Str::random(5),<br>
            'email'=>Str::random(3).'@gmail.com',<br>
            'address'=>Str::random(10)<br>
        ]);<br>
    }<br>
	</code><br>
	Now after making function run command for inserting the data in database.<br>
	Syntax: php artisan db:seed --class=className<br>
	Example: php artisan db:seed --class=MembersSeeder<br> this will insert one data in table at single time command line execute.
</div><br><hr><br>
<!------------------------------------------------------------------------------------- -->
<br>
<div class="container">
	<h2>Stub</h2>
	it is a skeltan file<br>
	It is used for pre-written(by default) things in file which will create at command line like we create model,controller,view,component etc.<br><br>

	For use the stub we have to publish stub<br>
	Example: php artisan stub:publish<br><br>

	After publish stub there is one folder is created in project file name is 'stubs' and inside that file there is pre-defined stubs for many thins.<br>

	Now open the file which want to make some change then save that file.
</div><br><hr><br>
<!------------------------------------------------------------------------------------- -->
<br>
<div class="container">
	<h2 style="text-align:center">Accessor & Mutator</h2>
	<ol>
		<li>Accessor</li>
		It's uses when we have to show data from database into the browser with modification but not modified in database.<br>
		All Accessor are used in model file.<br>
		Example:<br>
		<code>
			class Member extends Model {<br>
			    use HasFactory;<br>
			    function getNameAttribute($value){<br>
			        return ucfirst($value);  // for display First letter capital in browser<br>
			    }<br>
			    function getAddressAttribute($value){<br>
			        return $value.",Nepal";  // for display in address attached with nepal<br>
			    }<br>
			}<br>

		</code> 
		<li>Mutator</li>
		It's uses when we are inserting the data into the database at that time we can add some extra data in database. which is not comming dirctly from the front-end.<br>
		It's directly mean we can modify the data before the save data into database.<br>
		All Mutator are used in model file.<br>
		Example:<br>
		<code>
			// function for save extra data in database<br>
		    public function setNameAttribute($value){<br>
		        return $this->attributes['name']= 'Mr.'.$value;<br>
		    }<br>
		    public function setAddressAttribute($value){<br>
		        return $this->attributes['address']= $value.',Janakpur Nepal';<br>
		    }<br>
		</code>
	</ol>
</div><br><hr><br>
<!------------------------------------------------------------------------------------- -->
<br>
</body>
</html>