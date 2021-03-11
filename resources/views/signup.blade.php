<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href={{ asset('css/signup.css') }} rel="stylesheet" >

    <title>Sign Up</title>
</head>
<body>
<form action="signup" method="post" style="border:1px solid #ccc">
    {{ csrf_field() }}
    <div id="body">
    <div id="container">
        <div id="header">
            MANAGEMENT
        </div>
        <div id="body_header">
        <h1>Sign Up</h1>
        <hr>
        </div>

        <div class="all">
            <div id="left">
                <label><b>First Name</b></label> <br>
                <input type="text" placeholder="Please enter FirstName" name="name" required>
            </div>
            <div id="right">
                <label><b>Last Name</b></label> <br>
                <input id="error" type="text" placeholder="Please enter LastName" name="lastname" required>
            </div>

        </div>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Please enter Email" name="email" required>

        <label for="phonenumber"><b>Phone Number</b></label>
        <input type="text" placeholder="Please enter Phone Number" name="phonenummber" required>

        <label for="password"><b>Password</b></label>
        <input id="pass" type="password" placeholder="Please enter Password" name="password" required>

        <label for="re-password"><b>Re-Password</b></label>
        <input id="re-pass" type="password" placeholder="Re-Password" name="re-password" required>


        <div class="clearfix">
            <button type="submit" class="registerbtn" >Register</button>
            <a href="login"><button type="button" class="backbtn">Back</button></a>
        </div>
    </div>
    </div>
</form>
<script>
    function validateForm() {
        pass = document.getElementById('pass').value;
        re_pass = document.getElementById('re-pass').value;
        if (pass != re_pass) {
            alert("MAT KHAU KHONG TRUNG KHOP")
            return false;
        }
        return true;
    }
</script>
</body>
</html>