<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href={{ asset('css/devision.css') }} rel="stylesheet">
    <title>Devision Management</title>
</head>
<body>
    <form action="" method="post">
        <div id="all">
            <div id="header">
                Logo
            </div>

            <div id="body">
                <div id="body_header">
                    Branch Register
                </div>
                <div id ="body_detail">
                    <label> <b>Company</b></label>
                    <input type="text" placeholder="Company code" style="width: 40px">
                    <input type="text" placeholder="Please enter Company name" style="width: 60px">
                </div>
                <br>
                Branch
                <input type="text" placeholder="Please enter Branch" > <br>
                <p>
                Address
                    <input type="text" placeholder="Please enter Address" > <br> </p>
                Area
                <input type="text" placeholder="Please enter Area" > <br>
                <p>Email
                    <input type="text" placeholder="Please enter Email" > <br> </p>
                Phone Number
                <input type="text" placeholder="Please enter Phone Number" > <br>
                <p>
                Website
                    <input type="text" placeholder="Please enter Website" > <br> </p>
            </div>

            <div id="footer">
                <button type="submit" class="registerbtn" style="color: #3c763d" >Register</button>
                <button type="button" class="backbtn" style="color: black">Back</button>
            </div>
        </div>
    </form>

</body>
</html>