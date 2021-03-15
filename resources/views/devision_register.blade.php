<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    {{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
    <link href={{ asset('css/company.css') }} rel="stylesheet" >
    <title>Branch Management</title>
</head>
<body>

<div id="all">
    <div id="first_body">
        Branch Register
    </div>
    <br> <br>
    <form action="{{ route('branch_register.post') }}" method="post">
        {{ csrf_field() }}
        <table style="width: 50%; float:left">
            <tr>
                <td>Company</td>
                <td><input type="text" style="width: 80px;color: gray" placeholder="Company code"  name="cpn_code">
                    <input type="text"  name="cpn_name" placeholder="Company name" ></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td><input type="text" placeholder="Please enter Branch name" name="name" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input id="address" style="width: 300px" type="text" placeholder="Please enter Address" name="address" required></td>
            </tr>
            <tr>
                <td>Area</td>
                <td><input id="area" style="width: 300px" type="text" placeholder="Please enter Area" name="area" required></td>
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
                <td><input type="text" placeholder="Please enter Website" name="website" required></td>
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
            <a href='branch'  style="text-decoration: none; margin-left: 10px;">
                <button type="button" name="back" style="background-color: black"> Back</button>
            </a>
        </div>
    </form>
</div>

</body>
</html>