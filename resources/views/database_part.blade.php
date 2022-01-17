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
	Example:<br>
	// creating route for query builder<br>
	Route::get('list',[MemberQueryBuilder::class,'memberList']);<br>
</div><br><hr><br>
</body>
</html>