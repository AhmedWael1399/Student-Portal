<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>

<head>
    <title>Student Portal System</title>
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
        color: white;
     

        }

        button[type="submit"] {
           width: 30%;
            height: 50px;
            border: 1px solid;
            background: #2691d9;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 500;
            cursor: pointer;
            outline: none;
            margin:4px;
            display: inline-block; 
        }

        button[type="submit"]:hover {
            border-color: #0f0874;
            transition: -5s;
        }

        .center {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            
        }

    </style>
</head>

<body>
    <div class="center">
        <h1>Student Portal System</h1>
        <form action="loginPage">
            <button type="submit">Login</button>
        </form>
        <form action="registerChoice">
            <button type ="submit">Sign up</button>
        </form>
    </div>
</body>

</html>