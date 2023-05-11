<!DOCTYPE html>
<html lang="en">

<head>
    <title>Course Edit</title>
    <style>
       body {

            background-image: url("/images/adminBackground.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size : 100% 100%;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            color: rgb(11, 43, 248);
        }
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
        }

        .center h1 {
            text-align: center;
            padding: 0 0 10px 0;
            border-bottom: 1px solid silver;
        }

        .center form {
            padding: 0 50px;
            box-sizing: border-box;
        }

        .txt_field {
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 30px 0;
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: 1.5px solid;
        }

        button[type="submit"] {
            width: 100%;
            height: 40px;
            border: 1px solid;
            background: #0015ff;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }

        button[type="submit"]:hover {
            border-color: #0017e7;
            transition: -5s;
        }

        .signup_link {
            text-align: center;
            font-weight: bold;
        }

        .signup_link a {
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
            color: #0037fd;
            text-decoration: none;
        }
        
         .type-1 {
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 7px 35px;
            width: 70%;
            padding: 0 5px;
            height: 30px;
            border-radius:10px;
            border: 1px solid #eee;
            transition: .3s border-color;
        }
        .type-1:hover {
            border: 1px solid #aaa;
        }
    </style>

</head>

<body>
    <div class="center">
        <h1>Course Edit</h1>
        <form action='courseEdit' method="POST">
            @csrf
            <input class="type-1" type="text" name="coursename" placeholder="Course's name" /><br>
            <span style="color:red">@error ('coursename') {{$message}} @enderror</span><br><br>
            <input class="type-1" type="text" name="cid" placeholder="Course's ID" /><br>
            <span style="color:red">@error ('cid') {{$message}} @enderror</span><br><br>
            <input class="type-1" type="text" name="hrs" placeholder="Credit hours" /><br>
            <span style="color:red">@error ('hrs') {{$message}} @enderror</span><br>
            <?php
            if (isset($_SESSION['error'])) {
                echo "<h4 style=color:red><center>" . $_SESSION['error'] . "</center></h4>";
                unset($_SESSION['error']);
            }
            ?>
            <br>
            <button type="submit">Edit</button><br><br>
        </form>
        <div class="signup_link">
            <a href="/adminProfile">Admin Profile</a> <br>
        </diV>
    </div>

</body>

</html>
