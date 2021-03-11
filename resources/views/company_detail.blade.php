<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/Company/company_detail.css" rel="stylesheet" >

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
        <div id="left">
            <label for="cpn"><b>Company</b></label>
            <input id="company" type="text" placeholder="Company code" name="cpn" required>
            <input type="text" placeholder="Please enter Company name" name="cpn_name" required> <br>

            <div id="image" style="float: right">
                <h1> <a href="">DAY LA ANH</a></h1>
                <a href=""> <button type="button" style="background-color: #2a88bd"> Upload </button></a>
            </div>

            <p>
                <label for="address"><b>Address</b></label>
                <input id="address" type="text" placeholder="Please enter Address" name="address" required> <br>
            </p>



            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Please enter Email" name="email" required> <br>

            <p>
                <label for="phone"><b>Phone number</b></label>
                <input id="phone" type="text" placeholder="Please enter Phone Number" name="phone" required> <br>
            </p>

            <label for="Website"><b>Website</b></label>
            <input type="text" placeholder="Please enter Website" name="website" required> <br>     <br>
            <br>

            <p>
                <label for="status"><b>Status</b></label>
            </p>
            <div id="footer">
                <button type="button" name="back" style=" color: white; background-color: green" onclick="myFunction()"> Working </button>
                <button type="button" name="back" style=" color: white; background-color: yellowgreen" onclick="myFunction()"> Pending </button>
                <button type="button" name="back" style=" color: white; background-color: red" onclick="myFunction()"> Stop </button>

                <button type="submit" name="register" style="background-color: #2ab27b" onclick="myFunction1()"> Update </button>
                <a href="company" > <button type="button" name="back" style=" color: white; background-color: #000000"> Back </button> </a>
            </div>

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
