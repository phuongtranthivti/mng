<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href={{asset('css/login.css')}} rel="stylesheet" >
</head>
<body>
<div class="container">
    <div class="header">
        <h1>MANAGEMENT</h1>
    </div>

    <form action="login" method="post">
        {{ csrf_field() }}
        <div class ="main">
            <div id="login">
                <p>Email</p>
                <input type="text" name="email" placeholder="Please enter email" value="{{ old('email') }}">
                <small class="invalid-report">Email is required</small>
                <br>
            </div>
            <div id="login">
                <p>Password</p>
                <input type="password" name="password" placeholder="Please enter Password" >
                <small class="invalid-report">Password is required</small>
            </div>
            <div class="btn">
                <button class="login" type="submit">Login</button>
                <a href="signup"><button type="button" class="sign-up">Signup</button></a>
            </div>
        </div>
    </form>

</div>

</body>
</html>
