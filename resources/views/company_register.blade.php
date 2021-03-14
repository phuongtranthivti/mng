<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href={{ asset('css/company.css') }} rel="stylesheet" >

    <title>Company Management</title>
</head>
<body>
<div id="all">
    <div id="first_body">
    Company Management
    </div>
    <br> <br>
    <form action="company_register" method="post">
    {{ csrf_field() }}
        <table style="width: 50%; float:left">
            <tr>
                <td>Company</td>
                <td><input type="text" placeholder="Please enter Company name" name="cpn_name" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input id="address" style="width: 300px" type="text" placeholder="Please enter Address" name="address" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input id="address" type="email" placeholder="Please enter Email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input id="phone" type="text" placeholder="Please enter Phone Number" name="phone" required></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><input type="tẽt" placeholder="Please enter Website" name="website" required></td>
            </tr>
        </table>

        <div id="image" style="width:30%;float:right;margin-bottom: 150px" >
            <div style="height: 100px;width: 30px;display: inline-block;margin-bottom: 60px">Logo  </div>
            <img src="img/avatar5.jpeg" style="clip-path: circle(50%);display:inline-block;height:100px;">
        </div>

        <hr style="clear: both; margin-top: 300px">
        <div id="body_button">
            <a style="text-decoration: none" >
                <button type="submit" name="register" style="background-color: #30c0f0"> Register</button>
            </a >
            <a href='company'  style="text-decoration: none; margin-left: 10px;">
                <button type="button" name="back" style="background-color: black"> Back</button>
            </a>
        </div>
    </form>
</div>
</body>
</html>