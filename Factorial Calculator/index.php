<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <title> Factorial </title>
    <style>
        .container {
            width: 350px;
            height: 350px;
            border: solid 3px #ddd;
            border-radius: 30px;
            font-family: "Poppins", sans-serif;
            padding: 0px 50px 0px 50px;
            text-align: center;
            margin: 120px auto;
            background: rgba(227, 227, 227, 0.76);
        }

        .title {
            font-size: 30px;
        }

        .num {
            font-size: 20px;
        }

        span {
            color: red;
        }

        .container input {
            width: 100%;
            height: 55px;
            border: solid 2px white;
            background: #ddd;
            border-radius: 12px;
            padding-left: 20px;
            font-size: 18px;
        }

        .container button {
            width: 120px;
            height: 45px;
            border: none;
            border-radius: 11px;
            background: red;
            font-size: 22px;
            transition: .7s;
        }

        .container button:hover {
            background: black;
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="./server.php" method="POST">
        <p class="title">Factorial Calculator</p>
        <input type="number" name="num" placeholder="Your Number ">
        <p class="num">Your number is <span><?php echo $_SESSION['num']; ?></span></p>
        <button type="submit" name="submit">
            Send
        </button>
    </form>
</div>
</body>
</html>