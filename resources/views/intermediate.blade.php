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
</div>
</body>
</html>