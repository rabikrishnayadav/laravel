<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style type="text/css">
        *{
        margin:auto;
        padding: 0px;
        }
        .container{
        width: 90%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        }
        h1, h2, h3, h4, h5, h6,
        .h1, .h2, .h3, .h4, .h5, .h6 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
        }
        ol li{
        font-size: 20px;
        font-weight: bolder;
        margin-left: 10px;
        }
        ol ul li{
        font-size: 15px;
        font-weight: bolder;
        margin-left: 10px;
        }
        code{
            color: brown;
        }
        </style>
    </head>
    <body><x-header />
        <h1 style="text-align:center; background-color:gold;">Laravel First Time</h1>
        <div class="container"><h2>File and Folder Structure</h2>
            <ol>
                <li>Html</li>
                For Writing HTML Code goto the 'resources/views' and create file put name as 'file_name.blade.php'<br>
                Then make change or create route to the 'routes/web.php' file.
                <li>Controller</li>
                <ul>
                    <li>What is Controller</li>
                    In Every PHP Framework there is a one Central Unit.<br>
                    Central Unit work is to connect everything like, view, model, routing etc.<br>
                    Controller is controlling whole project And Controller is calling from Routing.<br>
                    Controller directory is 'app/Http/Controllers'<br>
                    <li>Make new Controller</li>
                    Creating New Controller Syntax: php artisan make:controller ControllerName<br>
                    Example: php artisan make:controller UserController<br>
                    for see controller is created or not just goto 'app/Http/Controllers' folder and find your controller name is there.
                    <li>Make Function in Controller</li>
                    For Creating a function just go to the dir 'app/Http/Controllers' and open your controller and inside the controller file under 'class ControllerName extends Controller' create your function.
                    <code>
                    namespace App\Http\Controllers;<br>
                    use Illuminate\Http\Request;<br>
                    class UserController extends Controller<br>
                    {<br>
                    // create function<br>
                    function show(){<br>
                    return 'Hello from Controller'; // this will show result in brower when you return something or echo<br>
                    }<br>
                    }<br>
                    </code>
                    <li>Call Controller from Routing</li>
                    For Calling Controller just make one route. goto dir 'routes/web.php' and open web.php file then<br>
                    1) import Controller<br>
                    Syntax: use Contrller_full_url\ControllerName;<br>
                    Example: use App\Http\Controllers\UserController;<br>
                    2) call the controller<br>
                    Syntax:Route::get('path_name',[ControllerName::class,'functionName']);
                    Example:<br>
                    // calling the controller<br>
                    Route::get('user',[UserController::class,'show']);<br>
                    <li>Pass Params with URL</li>
                    Example:<br>
                    1) Create one more function in Controller for Pass Params with URL<br>
                    E.g. function show($id){return $id;}<br>
                    2) Call the controller from Route for Pass Params with URL<br>
                    E.g. Route::get('user/{id}',[UserController::class,'show']);<br>
                    for checking goto website url 127.0.0.1:8000/user/<mark>Write your word</mark>
                </ul>
                <li>View</li>
                <ul>
                    <li>What is View</li>
                    View is also available in all framework. In view here we are store all the HTML file which is display to the user(on browser).<br>
                    <li>Make a View</li>
                    For making a new view goto the 'resources/views' folder then create new file put name as 'file_name.blade.php'
                    <li>Call View</li>
                    View is calling from two method<br>
                    1) From Controller<br>
                    For calling the view from Controller there are two step<br>
                    i) First Step:- Create a function in Controller just go to the dir 'app/Http/Controllers' and open your controller and inside the controller file under 'class ControllerName extends Controller' create your function.<br>
                    <code>
                    namespace App\Http\Controllers;<br>
                    use Illuminate\Http\Request;<br>
                    class UserController extends Controller<br>
                    {<br>
                    // creating function for showing the login page on the browser<br>
                    function loadView(){<br>
                    return view('login');<br>
                    }<br>
                    </code><br>
                    ii) Second Step: call the controller from the Route For make the new route<br>
                    Syntax: Route::get('login',[UserController::class,'loadView']);<br>
                    Example:<br>
                    // calling the controller for view file login page<br>
                    Route::get('login',[UserController::class,'loadView']);<br>
                    2) Direct from Route<br>
                    i) First method<br>
                    Syntax: Route::view('url_path_name','view_file_name');
                    Example 1:<br>
                    // calling the view for the login page<br>
                    Route::view('signin','login');<br>
                    ii) Second Method<br>
                    Syntax:<br>
                    Route::get('/url_name', function () {<br>
                    return view('view_file_name');  <br>
                    });<br>
                    Example:<br>
                    // calling the view for the login page second method<br>
                    Route::get('/userlogin', function () {<br>
                    return view('login');  <br>
                    });<br>
                </ul>
                <li>Component</li>
                <ul>
                    <li>What is Component</li>
                    Component is a pices of code which is for use many times.<br>
                    Means: Write code one time and execute it many time as requirements.<br>
                    It is a class base file.<br>
                    <li>Make Component</li>
                    For Creating Component use a comand line<br>
                    Syntax: php artisan make:component componentName<br>
                    Example: php artisan make:component Header<br>
                    After the enter creating command then it will create two file<br>
                    i)first file dir 'resources/views/components/' here your one file was created 'header.blade.php' this file for html(front end) code.<br>
                    ii) second file dir 'app/View/Components/' here your another file was created 'header.php' this file for php dynamic code(back end) code. and we can also use html code here.<br>
                    <li>Use Component</li>
                    For Use the component fisrt we must have view and that view is Routed<br>
                    Then Simply use one line code in view file<br>
                    Code Syntax: '<'x-component_name />'<br>
                    Example: '<'x-header />'<br>
                </ul>
                <li>Blade template</li>
                It is a laravel template engine. It's work is converting the plan tags into PHP tags.<br> It's all example available in users.blade.php file.
                <br>It has many advantage like Blade Template Expression,Conditions,For and Foreach Loop etc.
                <li>Middleware</li>
                There are Three Types of Middleware<br>
                For Creating a new middleware.<br>
                Syntax: php artisan make:middleware mdiddlewareName<br>
                Example: php artisan make:middleware ageCheck<br>
                for check it's created or not goto dir 'App\Http\Middleware' folder and find the middleware name there is available.<br>
                <ul>
                    <li>Middleware</li>
                    <li>Route Middleware</li>
                    This middleware is use on one route at a time. then for another route again we have to write  same code for touting.<br>
                    After the creating the middleware register it<br>
                     for register goto dir 'App\Http\Kernal.php' and write this code. Under ' protected $routeMiddleware = []'<br>
                    <code>
                     'protectedPage' => \App\Http\Middleware\ageCheck::class,<br>
                     </code>
                     After registering the middleware then make condition on ageCheck.php file<br>
                    Under:<br>
                     <code>
                     public function handle(Request $request, Closure $next){<br>
                        if ($request->age && $request->age<18) {<br>
                            return redirect('access-denied-page');<br>
                            return $next($request);<br>
                        }<br>
                        }<br>
                    </code>
                     <b>crate route for use the middleware on web.php file</b><br>
                     Syntax: Route::view('home-page','home')->middleware('Registered_Middleware_Name');<br>
                     Example:<br>
                     // this route for calling the view home page
                    Route::view('home-page','home')->middleware('protectedPage');
                    <li>Group Middleware</li>
                    It's use for some specific route. we can manage many route from one group middleware<br>
                After the creating the middleware register it<br>
                for register goto dir 'App\Http\Kernal.php' and write this code. Under 'protected $middlewareGroups = []'<br>
                <code>
                    'protectPage'=>[<br>
                   \App\Http\Middleware\ageCheck::class,<br>
                    ]<br>
                </code>
                After registering the middleware then make condition on ageCheck.php file<br>
                Under:<br>
                 <code>
                     public function handle(Request $request, Closure $next){<br>
                        if ($request->age && $request->age<18) {<br>
                            return redirect('access-denied-page');<br>
                            return $next($request);<br>
                        }<br>
                        }<br>
                    </code>
                Finally crate route for use the middleware<br>
                Example:<br>
                <code>
                    // creat route for froup middleware<br>
                    Route::group(['middleware'=>['protectPage']],function(){<br>
                        //this route for calling the view users page<br>
                        Route::get('user-data',[UserController::class,'usersfun']);<br>
                        // this route for calling the view home page<br>
                        Route::view('home-page','home');<br>
                    });<br>
                </code>
                </ul>
                <li>Routing</li>
                <li>Model</li>
                <li>File Store</li>
                <li>Config</li>
                <li>Dependency File</li>
            </ol>
        </div><br><hr><br><h1 style="text-align:center; background:green;">For Laravel & MySql Database Part<br><a href="/database">Click here</a></h1>
    </body>
</html>