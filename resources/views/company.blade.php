<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href={{ asset('css/company.css') }} rel="stylesheet">

    <title>Company Management</title>
</head>
<body>
<div id="all">
    <div id="first_body">
        Company Management
    </div>
    <br> <br>
    <form action="{{route('search.get')}}" method="get">
        <table>
            <tr>
                <td>Company</td>
                <td><input id="company" style="width: 100px" type="text" placeholder="Company code" name="cpn">
                    <input type="text" placeholder="Please enter Company name" name="cpn_name"></td>
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
                <td><select name="status">
                        <option selected disabled>Select status</option>
                        <option value="working">Working</option>
                        <option value="pending">Pending</option>
                        <option value="stop">Stop</option>
                    </select>
                </td>
            </tr>
        </table>
        <hr style="margin-top: 40px">
        <div id="body_button">
            <a href="{{route('company_register.get')}}" style="text-decoration: none;    margin-left: 10px;">
                <button type="button" name="register" style="background-color: #30c0f0"> Register</button>
            </a>
            <button type="submit" name="search" style="background-color: #2ab27b; margin-left: 10px;"> Search</button>
            <a href="login" style="text-decoration: none; margin-left: 10px;">
                <button type="button" name="back" style="background-color: black"> Back</button>
            </a>
        </div>
    </form>
    <div>
        <table style="; width: 100%" class="table_1">
            <tr style="background-color: #30c0f0">
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
</body>
</html>