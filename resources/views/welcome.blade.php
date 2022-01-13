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
        </style>
    </head>
    <body><h1 style="text-align:center; background-color:gold;">Laravel First Time</h1>
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
                <li>Routing</li>
                <li>Model</li>
                <li>File Store</li>
                <li>Config</li>
                <li>Dependency File</li>
            </ol>
        </div>
    </body>
</html>
