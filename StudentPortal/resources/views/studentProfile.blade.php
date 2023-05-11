<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Profile</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="/assets/dcode.css">
    <meta name="viewport" content="width=device-widthy, initial-scale=1.0">

    <style>
        * {
            font-family: sans-serif;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        body {
            background-image: url("/images/image1.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size : 100% 100%;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            height: 100vh;
            overflow: hidden;
        }

        nav {
            height: 80px;
            width: 100%;
        }

        label.logo {
            font-family: sans-serif;
            color: dodgerblue;
            font-size: 30px;
            line-height: 50px;
            font-weight: bold;
        }

        nav ul {
            float: right;
            margin-right: 30px;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            position: relative;
            list-style: none;
        }

        nav ul li a {
            color: rgb(11, 43, 248);
            font-size: 17px;
            text-transform: uppercase;
            display: block;
            padding: 0 15px;
            text-decoration: none;
            line-height: 60px;
        }

        a {
            cursor: pointer;
        }

        nav ul ul a {
            cursor: pointer;
        }

        a:hover {
            background: white;
            transition: .5s;
        }

        nav ul ul {
            position: absolute;
            top: 60px;
            display: none;
            padding: 0;
            margin: 0;
        }

        nav ul li:hover>ul {
            display: block;
            z-index: 100;

        }

        nav ul ul li {
            width: 100px;
            float: none;
            display: list-item;
            position: relative;
        }

        nav ul ul ul li {
            position: relative;
            top: -60px;
            left: 100px;
        }

        a:hover {
            background: white;
            transition: .5s;
        }

       

        .content-table {
            border-collapse: collapse;
            font-size: 1em;
            min-width: 400px;
            width: 75%;    
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            margin: 0px 200px;
        }

        .content-table thead tr {
            background-color: white;
            color: #2980b9;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 4px solid #dddddd;
        }

        .w-5 {
            display: none;
        }

        button[type="submit"] {
            width: 8%;
            height: 30px;
            border: 1px solid;
            background: white;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
            color: purple;
        }

        button[type="submit"]:hover {
            border-color: #2691d9;
            transition: -5s;
        }
        .center h1 {
            margin: 0px 50px;
            text-align: center;
            font-size: 50.5px;
            padding: 0 0 20px 0;
            color : dodgerblue ;
        }

        .card {
            width: 15%;
            background-color: white;
            color: black;
            border-radius: 10px;
            border: solid black 1px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>

</head>

<body>
    <nav>
        <label class="logo"><em>Welcome {{session('username')}}</em></label>
        <ul>
            <li><a href="/">Home</a>
            <li><a href="enrollForm">Enroll</a>
            <li><a href="https://www.udemy.com/">Udemy</a>
            <li><a href="https://www.coursera.com/">Coursera</a>
            <li><a href="https://www.datacamp.com/">Datacamp</a>
            <li><a href="logout">Logout</a>
        </ul>
    </nav>
    <div class="card">
        <h3>ID: {{$info->id}}</h3>
        <h3>GPA: {{$info->gpa}}</h3>
    </div>
    <div  class="center">
    <h1>Courses</h1>
    </div>
    <table class="content-table">
        <thead>
            <tr>
                <td>Course Name</td>
                <td>Grade</td>
                <td>Videos</td>
            </tr>

        </thead>

        <tbody>

            @foreach($result as $item)
            <tr>
                <td>{{$item->coursename}}</td>
                @if($item->grade == 0)
                <td>NA</td>
                @else
                <td>{{$item->grade}}</td>
                @endif
                <td><a style="color: white;" href={{'viewCourseVideos/'.$item->cid}}>>>></a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <br>
</body>

</html>
