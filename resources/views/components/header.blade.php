<style type="text/css">
    #header{
        width: 100%;
        margin: auto;
        background-color: #3b5999;
        min-height: 80px;
        color: white;
    }
    ul{
        list-style: none;

    }
    ul li{
        
        padding: 20px;

    }   
    ul li a{
        color: white;
        text-decoration: none;
        font-weight: bolder;
        font-size: 30px;
        

    }
    ul li a:hover{
        text-decoration: none;
    }
    #btn{
        margin: 20px;
        padding: 5px;
        float: right;
    }
</style>
<div id="header">
    <ul>
        <li style="float: left;"><a href="/">Beginer part</a></li>
        <li style="float: left;"><a href="/database">Database Part</a></li>
        <li style="float: left;"><a href="/api">API Part</a></li>
        <li style="float: left;"><a href="/intermediate">Intermediate Part</a></li>
    </ul>
    <a href="{{route('user.login')}}"><button id="btn">Login/Register</button></a>
</div>