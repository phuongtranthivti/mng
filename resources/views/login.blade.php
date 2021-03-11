<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    <title>Management</title>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
<div id="header">
    MANAGEMENT
</div>
<form action="login" method="post">
    {{ csrf_field() }}
    <div id="body">
        <div id="detail_body">
            <label>Email</label>
            <input id="email" type="email" name="email" placeholder="Please enter password"  value="{{ old('email') }}">
            <br> <br>
            <label>Password</label>
            <input id="passwork" type="password" name="password" placeholder="Please enter password" >

            <br>
            <br>
            <button id="login"  type="submit" style="background: #3c763d ">Login</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="signup"><button id="signup" type="button" style="background: #2a88bd" > Sign up</button> </a>
        </div>
    </div>
</form>
</body>
</html>