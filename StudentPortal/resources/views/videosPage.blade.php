<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <style>
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

        .center {
            position: absolute;

        }

        .center h1 {

            margin: 0px 50px;
            text-align: center;
            font-size: 50.5px;
            padding: 0 0 20px 0;
            color : rgb(0, 53, 105) ; 
        }
        
        video {
    
      margin: 0px 430px;
     }




    </style>
</head>

<body>
    
    <div class="center">
        <h1>Videos</h1>
        @foreach($result as $item)
        <video width="720" height="480" controls>
            <source src="/videos/{{$item->location}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <br><br>
        @endforeach
    </div>
</body>

</html>
