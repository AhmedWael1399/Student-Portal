<!DOCTYPE html>
<html lang="en">

<head>
    <title>Teacher Profile</title>
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
            background-image: url("/images/teacher.jpg");
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
            color : rgb(0, 53, 105) ;
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
            color : rgb(0, 53, 105) ;
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
            color : rgb(0, 53, 105) ;
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
        <label class="logo"><em>Welcome Professor {{session('username')}}</em></label>
        <ul>
            <li><a href="/">Home</a>
            <li><a href="editGrades">Edit Grades</a>
            <li><a href="uploadVideoForm">Upload Video</a>
            <li><a href="logout">Logout</a>
        </ul>
    </nav>
    <div class="card">
        <h3>Course: {{$courseName->coursename}}</h3>
        <h3>Course ID: {{$courseName->cid}}</h3>
    </div>
    <div class="center">
    <h1>Registered students</h1>
    </div>
    <table class="content-table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>email</td>
            </tr>

        </thead>

        <tbody>

            @foreach($result as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <br>
</body>

</html>
