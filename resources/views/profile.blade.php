<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/profile/profile.css" rel="stylesheet">

    <title> User Profile </title>
</head>
<body>
<div id="all">
    <div id=" body_header"> Profile </div>

        <form method="post" action="profile">
            <div id="body_left">

            <label ><b>Branch</b></label>
            <input id="br_code" type="text" placeholder="Branch Code" name="br_code">
            <input id="br_name" type="text" placeholder="Branch Name" name="br_name">
                <div style="float: right"><a href="" style="color: red">DAY LA ANH</a></div>
        <p>
            <label ><b>Devision</b></label>
            <input id="dvs_code" type="text" placeholder="Devision Code" name="dvs_code">
            <input id="ep_code" type="text" placeholder="Devison Name" name="dvs_name">
        </p>
                <p>
                    <label ><b>Employ</b></label>
                    <input id="dvs_code" type="text" placeholder="Employ Code" name="code">
                    <input id="ep_code" type="text" placeholder="Employ Name" name="name">
                </p>
        <p>
            <label ><b>Phone Number</b></label>
            <input type="text" placeholder="" name="phone"> <br>
        </p>
        <div style="float: right">
            <label ><b>Date of Birth</b></label>
            <input type="email" placeholder="" name="birthday"> <br>
        </div>
        <p>
            <label ><b>Email</b></label>
            <input type="email" placeholder="" name="email"> <br>
        </p>
        <div style="float: right">
            <label ><b>Work Email</b></label>
            <input type="email" placeholder="" name="work_email"> <br>
        </div>
        <p>
            <label ><b>Address</b></label>
            <input type="text" placeholder="" name="address"> <br>
        </p>
        <div style="float: right">
            <label ><b>ID/Passport Date</b></label>
            <input type="text" placeholder="" name="passport_no"> <br>
        </div>
        <p>
            <label ><b>Join Date</b></label>
            <input type="text" placeholder="" name="join_date"> <br>
        </p>
        <div style="float: right">
            <label ><b>ID/Passport Date</b></label>
            <input type="text" placeholder="" name="passport_date"> <br>
        </div>
        <p>
            <label ><b>Experience</b></label>
            <input type="text" placeholder="" name="join_date"> <br>
        </p>
        <p>
            <label ><b>Type of Contract</b></label>
            <input type="text" placeholder="" name="contract"> <br>
        </p>
    </div>

            <div>
                <button type="submit" style="background-color: #2ab27b"> Register </button>
                <a href="information"><button type="button" style="background-color: black"> Back </button></a>
            </div>

        </form>

</div>

</body>

</html>