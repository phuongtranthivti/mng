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
                <td><input type="text" style="width: 80px;color: gray" value="{{$company->Code}}" name="cpn_code" disabled>
                    <input type="text" style="color: gray" value="{{$company->Name}}" name="cpn_name" disabled></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input id="address" style="width: 300px" type="text" value="{{$company->address}}" name="address" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input id="address" type="email" value="{{$company->Email}}" name="email" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input id="phone" type="text" value="{{$company->Phone}}" name="phone" required></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><input type="text" value="{{$company->website}}" name="website" required></td>
            </tr>
            <tr>
                <td>Working</td>
                <td><input type="text" value="{{$company->Status}}" name="website" required></td>
            </tr>
        </table>

        <div id="image" style="width:30%;float:right;margin-bottom: 150px" >
            <div style="height: 100px;width: 30px;display: inline-block;margin-bottom: 60px">Logo  </div>
            <img src="img/avatar5.jpeg" style="clip-path: circle(50%);display:inline-block;height:100px;">
        </div>

        <hr style="clear: both; margin-top: 300px">

        <button type="button" name="back" style=" color: white; background-color: green" onclick="myFunction()"> Working </button>
        <button type="button" name="back" style=" color: white; background-color: yellowgreen" onclick="myFunction()"> Pending </button>
        <button type="button" name="back" style=" color: white; background-color: red" onclick="myFunction()"> Stop </button>
        <div id="body_button" style="width: 200px;">
            <button type="submit" name="register" style="background-color: #2ab27b" onclick="myFunction1()"> Update </button>
            <a href="../company" > <button type="button" name="back" style=" color: white; background-color: #000000"> Back </button> </a>
        </div>

    </form>
</div>
<script>
    function myFunction() {
        confirm("Do you want to change status in your company?");
    }
    function myFunction1(){
        if (confirm("Do you want to update these company?")){
            alert("Update Company Successfull!");
        }
    }
</script>
</body>
</html>