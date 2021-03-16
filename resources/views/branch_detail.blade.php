<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/untitled.css" rel="stylesheet" type="text/css"/>
    <link href="assets/bootstrap/js/fonts/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
    <script>
        function show() {
            var x = document.getElementById("services");
            if (x.style.display == 'none') {
                x.style.display = "block";
                document.getElementById("logo").setAttribute("class", "shadow animated--grow-in");
            } else if (x.style.display == 'block') {
                x.style.display = "none";
                document.getElementById("logo").removeAttribute("class");
            }
        }
    </script>
</head>

<body id="page-top">
<div id="wrapper" 0="">
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content" style="background-color:white">
            <nav class="navbar navbar-light navbar-expand topbar bg-white static-top" style="padding:0px">
                <div class="container-fluid">
                    <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i
                                class="fas fa-bars"></i></button>
                    <h1 onclick="show()" id="logo" style="margin: 0px;height:70px;padding-left:7px;color:black;"
                        class="shadow animated--grow-in">Logo</h1>
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                                                            data-toggle="dropdown" aria-expanded="false"
                                                                            href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu"
                                 aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small"
                                                                    type="text" placeholder="Search for ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary py-0" type="button"><i
                                                        class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                            <div class="nav-item dropdown no-arrow show"><a class="dropdown-toggle nav-link"
                                                                            data-toggle="dropdown" aria-expanded="true"
                                                                            href="#" style="color:black">Home</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                       data-toggle="dropdown" aria-expanded="false"
                                                                       href="#" style="color:black">About</a>

                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-right"
                                 aria-labelledby="alertsDropdown"></div>
                        </li>
                        <li class="nav-item dropdown no-arrow" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                       data-toggle="dropdown" aria-expanded="false"
                                                                       href="file:///C:/Users/Dell/Documents/index.html#"><img
                                            class="border rounded-circle img-profile"
                                            src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a
                                            class="dropdown-item" role="presentation" href="#"><img
                                                src="assets/img/avatars/Capture5.PNG" style="width:23px;height:22px">&nbsp;Profile</a><a
                                            role="presentation" class="dropdown-item"><img
                                                src="assets/img/avatars/Capture5.PNG" style="width:23px;height:22px">&nbsp;Log
                                        out</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="management">
                <ul class="nav nav-tabs shadow animated--grow-in" id="services"
                    style="display: none; background-color: white;">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="assets/img/avatars/Capture5.PNG"
                                                          style="width:23px;height:22px">Home</a>
                        <a class="nav-link" href="{{route('company.get')}}"><img src="assets/img/avatars/Capture.PNG"
                                                                                 style="width:23px;height:22px">Company</a>
                        <a class="nav-link" href="{{route('branch.get')}}"><img src="assets/img/avatars/Capture2.PNG"
                                                                                style="width:23px;height:22px">Branch</a>
                        <a class="nav-link" href="{{route('devision.get')}}"><img
                                    src="assets/img/avatars/Capture3.PNG" style="width:23px;height:22px">Devision</a>
                        <a class="nav-link" href="{{route('project.get')}}"><img src="assets/img/avatars/Capture4.PNG"
                                                          style="width:23px;height:22px">Project</a>
                        <a class="nav-link" href="#"><img
                                    src="assets/img/avatars/Capture6.PNG" style="width:25px;height:25px">Human Resources</a>
                    </li>
                    <li class="nav-item"></li>
                </ul>

                <div class="phuong" style="width: 98%;margin-left: 1%">
                    <div id="all">

                        <div id="first_body">
                            Branch Register
                        </div>
                        <br> <br>

                        <form action="#" method="post">
                            {{ csrf_field() }}
                            <table style="width: 50%; float:left">
                                <tr>
                                    <td>Company</td>
                                    <td><input type="text" style="width: 80px;color: gray" value="" name="cpn_code" disabled>
                                        <input type="text" style="color: gray" value="" name="cpn_name" disabled></td>
                                </tr>
                                <tr>
                                    <td>Branch</td>
                                    <td><input type="text" style="width: 80px;color: gray" value="{{$branch->br_code}}" name="cpn_code" disabled>
                                        <input type="text" style="color: gray" value="{{$branch->br_name}}" name="cpn_name" disabled></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><input id="address" style="width: 300px" type="text" value="{{$branch->br_address}}" name="address" required></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><input style="width: 300px" type="text" value="{{$branch->br_area}}" name="address" required></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" value="{{$branch->br_email}}" name="email" required></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><input id="phone" type="text" value="{{$branch->br_phone}}" name="phone" required></td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td><input type="text" value="{{$branch->br_website}}" name="website" required></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><input type="text" value="{{$branch->br_status}}" name="website" required></td>
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
                                <a href="../branch" > <button type="button" name="back" style=" color: white; background-color: #000000"> Back </button> </a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>


            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
            <script src="assets/js/theme.js"></script>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        confirm("Do you want to change status in your branch?");
    }
    function myFunction1(){
        if (confirm("Do you want to update these branch?")){
            alert("Update Branch Successfull!");
        }
    }
    </body>
    </html>
