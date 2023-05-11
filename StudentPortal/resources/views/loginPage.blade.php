<!DOCTYPE html>
<html lang="en">

<head>
<link rel = "stylesheet"  
        href =  
            "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>Login Page</title>
    <style>
        body {
            background-image: url("/images/books.jpeg");
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
            border-radius: 10px;
            margin : 2px 0px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
        }

        .center form {
            padding: 0 50px;
            box-sizing: border-box;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            border-radius: 10px;
            
        }

        .txt_field {
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 10px 0;
            width: 50%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: 1.5px solid;
        }

        button[type="submit"] {
            width: 100%;
            height: 50px;
            border: 1px solid;
            background: #2691d9;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }

            button[type="submit"]:hover {
            border-color: #2691d9;
            transition: -5s;
        }


        .type-2 {
            background-color: #fafafa;
            border:0;
            box-shadow:0 0 4px rgba(0,0,0,0.3);
            transition: .3s box-shadow;
        }
        .type-2:hover {
            box-shadow:0 0 4px rgba(0,0,0,0.5);
        }

        .type-1 {
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 7px 20px;
            width: 70%;
            padding: 0 5px;
            height: 40px;
            border-radius:10px;
            border: 1px solid #eee;
            transition: .3s border-color;
        }
        .type-1:hover {
            border: 1px solid #aaa;
        }

        .mt-checkbox{
            margin: 0px 5px; 
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

        .signup_link b {
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
            color: #0f2c7d;
            text-decoration: none;
        }

    </style>

    <script>
        function validateForm() {
            if ((document.getElementById('student').checked != true) && (document.getElementById('admin').checked != true) && (document.getElementById('teacher').checked != true)) {
                alert("Radio button must be checked");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form action='getLoginInfo' method="POST" onsubmit="return validateForm()">
            @csrf
            <i class = "fa fa-user fa-lg fa-fw" aria-hidden = "true"> </i> 
            <input class="type-1" type="text" name="username" placeholder="Username" />
            <span style="color:red">@error ('username') {{$message}} @enderror</span><br>
            <i class = "fa fa-lock fa-lg fa-fw" aria-hidden = "true"> </i> 
            <input class="type-1" type="password" name="password" placeholder="Password" />
            <span style="color:red">@error ('password') {{$message}} @enderror</span><br><br>
            <label class="mt-checkbox">
                <input type="radio" id="teacher" name="radio" value="teacher"> Teacher
            </label>
            <label class="mt-checkbox">
                <input type="radio" id="admin" name="radio" value="admin"> Admin
            </label>
            <label class="mt-checkbox">
                <input type="radio" id="student" name="radio" value="student"> Student
            </label>
            <br>
            <?php
            if (isset($_SESSION['error'])) {
                echo "<h4 style=color:red><center>" . $_SESSION['error'] . "</center></h4>";
                unset($_SESSION['error']);
            }
            ?>
            <br>
            <button type="submit">Login</button><br><br>
            <div class="signup_link">
           <b>Don't Have an Account?</b> <a href="registerChoice">Sign Up</a>
        </div>
        </form>
    </div>
</body>

</html>