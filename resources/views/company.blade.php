<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Comapany Management</title>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/untitled.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/bootstrap/js/fonts/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href={{ asset('css/company.css') }} rel="stylesheet">
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

                    <div type="button" id="exit" style="border: none;width: 15%;height: 70px"><h1  onclick="show()" id="logo" style="gmargin: 0px;height:70px;padding-left:1%;color:black;"
                                                                                                   >Logo</h1> </div>
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
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
                                            src="{{asset('assets/img/avatars/avatar1.jpeg')}}"></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                    <a class="dropdown-item" role="presentation" href="{{route('profile.get')}}"><img
                                                src="{{asset('assets/img/avatars/Capture5.PNG')}}" style="width:23px;height:22px">&nbsp;Profile</a>
                                    <a class="dropdown-item" role="presentation" href="{{route('login.get')}}"><img
                                                src="{{asset('assets/img/avatars/Capture5.PNG')}}" style="width:23px;height:22px">&nbsp;Log
                                        out</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="management" style="margin-left: 1%">
                <ul class="nav nav-tabs shadow animated--grow-in" id="services"
                    style="display: none; background-color: white;">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="{{asset('assets/img/avatars/Capture5.PNG')}}"
                                                          style="width:23px;height:22px">Home</a>
                        <a class="nav-link" href="{{route('company.get')}}"><img src="{{asset('assets/img/avatars/Capture.PNG')}}"
                                                                                 style="width:23px;height:22px">Company</a>
                        <a class="nav-link" href="{{route('branch.get')}}"><img src="{{asset('assets/img/avatars/Capture2.PNG')}}"
                                                                                style="width:23px;height:22px">Branch</a>
                        <a class="nav-link" href="{{route('devision.get')}}"><img
                                    src="{{asset('assets/img/avatars/Capture3.PNG')}}" style="width:23px;height:22px">Devision</a>
                        <a class="nav-link" href="{{route('project.get')}}"><img src="{{asset('assets/img/avatars/Capture4.PNG')}}"
                                                          style="width:23px;height:22px">Project</a>
                        <a class="nav-link" href="#"><img
                                    src="{{asset('assets/img/avatars/Capture6.PNG')}}" style="width:25px;height:25px">Human Resources</a>
                    </li>
                </ul>

                <div id="phuong" class="phuong" style="width: 98%; margin-left: 0%">
                    <div id="all" style="color: black;">
                        <div id="first_body" style="size: 30px">
                            Company Management
                        </div>
                        <br> <br>
                        <form action="{{route('searchCompany.get')}}" method="get">
                            <table>
                                <tr style="margin-top: 20px">
                                    <td >Company</td>
                                    <td><input id="company" style="width: 100px" type="text" placeholder="Company code" name="Code">
                                        <input type="text" placeholder="Please enter Company name" name="cpnn_name"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input id="email" type="email" placeholder="Please enter Email" name="email"></td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td><input type="text" placeholder="Please enter Phone Number" name="phone"></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><div ><select name="status" >
                                                <option selected disabled>Select status</option>
                                                <option value="working" >Working</option>
                                                <option value="pending">Pending</option>
                                                <option value="stop">Stop</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <hr style="margin-top: 40px">
                            <div id="body_button">
                                <a href="{{route('company_register.get')}}" style="text-decoration: none;    margin-left: 10px;width: 400px">
                                    <button class="button" type="button" name="register" style="background-color: #30c0f0"> Register</button>
                                </a>
                                <button class="button" type="submit" name="search" style="background-color: #2ab27b; margin-left: 10px;"> Search</button>
                                <a href="management" style="text-decoration: none; margin-left: 10px;">
                                    <button class="button" type="button" name="back" style="background-color: black"> Back</button>
                                </a>
                            </div>
                        </form>
                        <div>
                            <table style="; width: 100%" class="table_1">
                                <tr style="background-color: #72ACFF">
                                    <th>Code</th>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th> Phone number</th>
                                    <th> Status</th>
                                    <th> Detail</th>
                                </tr>

                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{$company->Code}}</td>
                                        <td>{{$company->Name}}</td>
                                        <td>{{$company->Email}}</td>
                                        <td>{{$company->Phone}}</td>
                                        <td>{{$company->Status}}</td>
                                        <td style="text-align: center">
                                            <a href="{{route('company_detail.get', ['Code'=>$company->Code])}}">
                                                <button type="button" id="detail" name="detail" style="background-color: #30c0f0">
                                                    Detail
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
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
<script language="javascript">

    document.getElementById("exit").onclick = function () {
        document.getElementById("phuong").style.display = 'none';
    };

</script>
</body>
</html>