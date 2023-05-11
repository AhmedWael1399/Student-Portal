<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
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
            color: rgb(0, 0, 0);
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
            padding: 0 0 20px 0;
            border-bottom: 1px solid silver;
        }

        .center form {
            padding: 0 65px;
            box-sizing: border-box;
        }
        
        .mt-checkbox{
            margin: 0px 20px; 
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
    <script>
        function validateForm() {
            if ((document.getElementById('student').checked != true) && (document.getElementById('teacher').checked != true)) {
                alert("Radio button must be checked");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="center">
        <h1>Account Type</h1>
        <form action="chooseAccountRegisterType" method="post" onsubmit="return validateForm()">
            @csrf
            <label class="mt-checkbox">
                <input type="radio" id="teacher" name="radio" value="teacher"> Teacher
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
            <button type="submit">Sign Up</button><br><br>
            <div class="signup_link">
                <a href="/loginPage">Login</a> <br>
            </div>
        </form>
    </div>
</body>

</html>
