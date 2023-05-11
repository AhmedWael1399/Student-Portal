<!DOCTYPE html>

<head>
<link rel = "stylesheet"  
        href =  
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

    <title>Register Account</title>
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
            width: 425px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            margin :10px 0px ;
            
        }

        .center h1 {
          
            text-align: center;
            padding: 0 0 100px 0;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            margin: 0px 0px;
        }

        .center form {
            border-radius: 10px;
            padding: 0 70px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            margin :2px 0px ;
        }

        .txt_field {
           
            width: 600%;
	        height: 40px;
	        background: #e0dede;
	        justify-content: center;
	        display: flex;
	        margin: 40px auto;
	        padding: 10px;
	        border: none;
	        outline: none;
	        border-radius: 5px;
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

        .inputWithIcon input[type="text"] {  
         padding-left: 40px;  
        }

        img {
            margin: -95px 145px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
     

        }
  
        .inputWithIcon {  
            position: relative;  
        }  
  
        .inputWithIcon i {  
            position: absolute;  
            left: 10;  
            top: 8px;  
            padding: 9px 8px;  
            color: #aaa;  
            transition: 0.3s;  
        }     
  
        .inputWithIcon input[type="text"]:focus + i {  
            color: dodgerBlue;  
        }  
  
        .inputWithIcon.inputIconBg i {  
            background-color: #aaa;  
            color: #fff;  
            padding: 9px 4px;  
            border-radius: 4px 0 0 4px;  
        }  
  
        .inputWithIcon.inputIconBg input[type="text"]:focus + i {  
            color: #fff;  
            background-color: dodgerBlue;  
        }  

        .signup_link a {
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
            color: #0037fd;
            text-decoration: none;
        }

           .signup_link b {
            margin: 30px 20px;
            text-align: center;
            font-size: 16px;
            color: #0f2c7d;
            text-decoration: none;
        }

    </style>
</head>

<body>
    <div class="center">
        <h1>Student Registration</h1>
        <img align="left" src="/images/user1.jpg" alt="Italian Trulli"  width="110" height="90">
        
        <form action="getRegisterInfo" method="POST">
            @csrf    
            
            <i class = "fa fa-user fa-lg fa-fw" aria-hidden = "true"> </i> 
            <input class="type-1" type="username" name="username" placeholder="Username" /><br>
            <span style="color:red">@error ('username') {{$message}} @enderror</span><br><br>
                  
            
            <i class = "fa fa-key fa-lg fa-fw" aria-hidden = "true"> </i>
            <input class="type-1" type="password" name="password" placeholder="Password" /><br>
            <span style="color:red">@error ('password') {{$message}} @enderror</span><br><br>
            <i class = "fa fa-envelope fa-lg fa-fw" aria-hidden = "true"> </i>  
            
            <input class="type-1" type="email" name="email" placeholder="E-mail" /><br>
            <span style="color:red">@error ('email') {{$message}} @enderror</span><br><br>
            <i class = "fa fa-id-card-o fa-lg fa-fw" aria-hidden = "true"> </i>  
            <input class="type-1" type="text" name="id" placeholder="ID" /><br>
            <span style="color:red">@error ('id') {{$message}} @enderror</span><br>
            <?php
            if (isset($_SESSION['error'])) {
                echo "<h4 style=color:red><center>" . $_SESSION['error'] . "</center></h4>";
                unset($_SESSION['error']);
            }
            ?>
            
            <button type="submit">Register</button><br><br>
            <div class="signup_link">
          <b>Already have an account?</b> <a href="loginPage">Login</a>
        </div>
        </form>
    </div>
</body>

</html>