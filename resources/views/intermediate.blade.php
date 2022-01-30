<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Intermediate</title>
	<style type="text/css">
		*{
			margin: auto;
		}
		.container{
			width: 85%;
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
<h1 style="text-align:center;">Intermediate Part</h1>
<div class="container">
	<h2>Make Custom Command</h2>
	here we make one command for getting the name of connected database<br>
	1) create one class file for command<br>
	Syntax: php artisan make:command fileName<br>
	Ex: php artisan make:command showDB<br><br>

	After enter the syntax on command line then check it created or not<br>
	For Checking goto dir 'App\Console\Commands' and find name which is created.<br><br>

	2) Now Open the 'showDB.php' file<br>
	i) Change its signature name with own name<br>
	Ex: protected $signature = 'showDB';<br>
	ii) Change its Discription with own description<br>
	Ex: protected $description = 'show current database';<br>
	ii) Write the code inside handle() method for when command will execute then what will happen<br>
	Ex:$this->info(DB::connection()->getDatabaseName());<br><br>

	3) Register the command in 'Kernal.php' file inside kernal class this file is available in 'app\Console' directory<br>
	Ex:<br>
	<code>
		protected $commands = [<br>
        Commands\showDB::class,<br>
     ];<br>
	</code>
	4) Its done now we can use command for getting the connected database name<br>
	Ex: php artisan showDB<br>
</div><br><hr><br>
<div class="container">
	<h2>Custom Helper</h2>
	If some same code we use many time then for time saving we make helper and there we write once code and (use)execute it many time.<br>
	Example:<br>
	1) first create one 'helper.php' file in 'app' directory.<br>
	2) open 'composer.json' file and register the helper in autoload.<br>
	Example:<br>
	<code>
		"autoload": {<br>
        "files":[<br>
            "app/helper.php"<br>
        ],<br>
	</code>
	3) then run one command on cmd for config all project.<br>
	Syntax: composer dump-autoload<br>
	4) open the 'helper.php' file which created in 'app' directory and make own functions and methods for use many time.<br>
	Example 1:<br>
	<code>
		// function for print data<br>
if (!function_exists('print_data')) {<br>
	function print_data($data){<br>
		echo "<'pre>";<br>
		print_r($data);<br>
		echo "</'pre>";<br>
	}<br>
}<br>
	</code>
	Example 2:<br>
	<code>
		// function for formatted date<br>
if (!function_exists('get_formated_date')) {<br>
	function get_formated_date($date, $format){<br>
		$formattedDate = date($format, strtotime($date));<br>
		return $formattedDate;<br>
	}<br>
}<br>
	</code>
</div><br><hr><br>
<div class="container">
	<h2>Handle Session in Laravel</h2>
	Session is temporary data storing element.<br>
	Session is used for store the user data once in session and show(retrive) at many (times)place or pages throughout the website.<br>
	<ol>
		<li>Retrieving Session Data:</li>
		$request->session()->get('key')<br>
		session('key');<br><br>

		<li>Retrieving All Session Data</li>
		$request->session()->all()<br>
		session()->all()<br><br>
		
		<li>Determining If An Item Exists In The Session</li>
		$request->session()->has('key')<br>
		session()->key('key')<br><br>
		
		<li>Storing Data:</li>
		$request->session()->put('key','value');<br>
		session(['key' => 'value']);<br><br>
		
		<li>Flash Data:</li>
		For temporary data one time execute(display) then hide.<br>
		$request->session()->flash('status','Task was sccessful');<br>
		session()->all()<br><br>

		<li>Deleting Data:</li>
		$request->session()->forget('key');		// for one session delete<br>
		$request->session()->forget(['key1','key2']);	// for multiple session delete<br>
		$request->session()-flush();	// for all session delete<br><br>
	</ol>
</div><br><hr><br>
<div class="container">
	<h2>Soft Delete</h2>
	Soft Delete is used for temporary delete.<br>
	If user trash the data then it will goes to temporary delete.<br>
	If data is deleted temporary then it will be recover(restore) back.<br>
	If data is deletd permanent then it will not restorable.<br>
	Example:<br> 
	1) use Namespace in Model<br>
	Ex: use Illuminate\Database\Eloquent\SoftDeletes<br>
	2) Invoking: use SoftDeletes; inside Class of the Model<br>
	3) Creating a soft delete column in database for add column on existing table use migration<br>
	Syntax: php artisan make:migration add_deleted_at_to_tableName<br>
	Ex: php artisan make:migration add_deleted_at_to_customers_table<br>
	After Creating Migration File then open it.<br>
	a) make table feilds inside function up()<br>
	Ex: $table->softDeletes();<br>
	b) make table drop feilds inside function down()<br>
	Ex: $table->dropSoftDeletes();<br><br>

	Now run once migration command.<br>
	Ex: php artisan migrate<br>
	
	4) Now make function for soft or hard delete and restore deleted data<br>
	For all of this laravel has predefined functions and methods they all are.<br>
	<dl>
		<dd>i) withTrashed()</dd>
		This function is used for show both data which is available or temporary deleted data<br><br>
		<dd>ii) onlyTrashed()</dd>
		This function is used for show only deleted data<br><br>
		<dd>iii) restore()</dd>
		This function is used for restore from temporary deleted.<br><br> 
		<dd>iv) forceDelete()</dd>
		This function is used for permanent delete from temporary<br><br>
	</dl>
	All Functions Examples are used in Registration Controller<br>
</div>
</body>
</html>